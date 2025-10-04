<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PublicCheckController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender' => 'required|string|max:255',
            'recipient' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'description' => 'required|string|max:1000',
            'sender_bankname' => 'nullable|string|max:64',
            'sender_account' => 'nullable|string|max:1000',
            'sender_taxid' => 'nullable|string|max:65',
        ]);

        // Convert amount to integer (kopiyka)
        $validated['amount'] = (int)($validated['amount'] * 100);

        $check = Check::create($validated);

        return redirect('/')
            ->with('success', 'Платіжну інструкцію успішно створено!')
            ->with('check', $check);
    }

    public function show($string_id)
    {
        $check = Check::where('string_id', $string_id)->firstOrFail();

        return view('public.check', compact('check'));
    }

    public function showReceipt($pdf_uuid)
    {
        $check = Check::where('pdf_uuid', $pdf_uuid)->firstOrFail();

        // Get receipt data
        $data = $this->getReceiptData($check);

        return view('pdf.receipt', $data);
    }

    public function generatePdf($pdf_uuid)
    {
        $check = Check::where('pdf_uuid', $pdf_uuid)->firstOrFail();

        // Define cache path
        $cachePath = "pdfs/receipt_{$pdf_uuid}.pdf";
        $filename = "receipt_{$pdf_uuid}.pdf";
        
        // Check if cached PDF exists - serve it directly if it does
        if (Storage::disk('local')->exists($cachePath)) {
            Log::info("Serving cached PDF for {$pdf_uuid}");
            
            return Storage::disk('local')->response($cachePath, $filename, [
                'Content-Type' => 'application/pdf',
                'Cache-Control' => 'public, max-age=31536000',
            ]);
        }

        // Generate new PDF if not cached
        Log::info("Generating new PDF for {$pdf_uuid}");
        $pdfContent = $this->generateNewPdf($check, $pdf_uuid);
        
        // Cache the PDF
        try {
            Storage::disk('local')->put($cachePath, $pdfContent);
            Log::info("Successfully cached PDF for {$pdf_uuid} at {$cachePath}");
        } catch (\Exception $e) {
            Log::error("Failed to cache PDF for {$pdf_uuid}: " . $e->getMessage());
            // Continue even if caching fails
        }

        // Return the generated PDF
        return response($pdfContent, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', "inline; filename=\"{$filename}\"")
            ->header('Cache-Control', 'public, max-age=31536000');
    }

    private function generateNewPdf($check, $pdf_uuid)
    {
        // Build the URL for the HTML version of the receipt
        $htmlUrl = route('html.receipt', ['pdf_uuid' => $pdf_uuid]);

        // Call remote PDF generation service
        try {
            $response = Http::timeout(120)->post('http://kuraloh.com:3000/pdf', [
                'url' => $htmlUrl,
                'options' => [
                    'format' => 'A4',
                    'printBackground' => true
                ]
            ]);

            if ($response->successful()) {
                return $response->body();
            } else {
                Log::warning("Remote PDF service failed, falling back to local generation");
                return $this->generateLocalPdfContent($check, $pdf_uuid);
            }
        } catch (\Exception $e) {
            Log::error('Failed to generate PDF via remote service: ' . $e->getMessage());
            Log::info('Falling back to local PDF generation');
            return $this->generateLocalPdfContent($check, $pdf_uuid);
        }
    }

    private function generateLocalPdf($check, $pdf_uuid)
    {
        $data = $this->getReceiptData($check);
        $pdf = Pdf::loadView('pdf.receipt', $data);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream("receipt_{$pdf_uuid}.pdf");
    }

    private function generateLocalPdfContent($check, $pdf_uuid)
    {
        $data = $this->getReceiptData($check);
        $pdf = Pdf::loadView('pdf.receipt', $data);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->output();
    }

    private function getReceiptData($check)
    {
        // Extract payer and recipient info
        $payer_name = $this->extractPayerName($check->sender);
        $payer_code = $this->generateCode();
        $payer_account = $this->generateAccount('444111');

        $recipient_code = $this->generateCode();
        $recipient_account = $this->generateAccount();

        // Convert amount to words in Ukrainian
        $amount_in_words = $this->numberToWordsUkrainian($check->amount);

        return compact(
            'check',
            'payer_name',
            'payer_code',
            'payer_account',
            'recipient_code',
            'recipient_account',
            'amount_in_words'
        );
    }

    private function extractPayerName($sender)
    {
        // Extract name from sender field (assuming format like in the example)
        return $sender;
    }

    private function generateCode()
    {
        // Generate a 10-digit code
        return str_pad(rand(1000000000, 9999999999), 10, '0', STR_PAD_LEFT);
    }

    private function generateAccount($prefix = null)
    {
        // Generate Ukrainian bank account format (29 digits)
        // Format: UA + 2 digits + 25 digits
        $account = 'UA';
        $account .= rand(10, 99); // Control digits
        $account .= rand(100000000000, 999999999999); // Bank and account number (12 digits)

        if ($prefix) {
            $account .= $prefix; // Add prefix if provided
            $account .= str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT);
        } else {
            $account .= str_pad(rand(1, 9999999999999), 13, '0', STR_PAD_LEFT);
        }

        return $account;
    }

    private function numberToWordsUkrainian($number)
    {
        // Convert kopiyky to hryvnias and kopiyky
        $grn = floor($number / 100);
        $kop = $number % 100;

        $ones = [
            '', 'один', 'два', 'три', 'чотири', "п'ять", 'шість', 'сім', 'вісім', "дев'ять"
        ];
        $onesFeminine = [
            '', 'одна', 'дві', 'три', 'чотири', "п'ять", 'шість', 'сім', 'вісім', "дев'ять"
        ];
        $tens = [
            '', '', 'двадцять', 'тридцять', 'сорок', "п'ятдесят", 'шістдесят', 'сімдесят', 'вісімдесят', "дев'яносто"
        ];
        $hundreds = [
            '', 'сто', 'двісті', 'триста', 'чотириста', "п'ятсот", 'шістсот', 'сімсот', 'вісімсот', "дев'ятсот"
        ];
        $teens = [
            'десять', 'одинадцять', 'дванадцять', 'тринадцять', 'чотирнадцять',
            "п'ятнадцять", 'шістнадцять', 'сімнадцять', 'вісімнадцять', "дев'ятнадцять"
        ];

        if ($grn == 0 && $kop == 0) {
            return 'нуль гривень 00 копійок';
        }

        $result = '';

        // Thousands
        if ($grn >= 1000) {
            $thousands = floor($grn / 1000);
            $thousandsWord = '';
            
            if ($thousands >= 100) {
                $result .= $hundreds[floor($thousands / 100)] . ' ';
                $thousands = $thousands % 100;
            }
            if ($thousands >= 20) {
                $result .= $tens[floor($thousands / 10)] . ' ';
                $thousands = $thousands % 10;
            }
            if ($thousands >= 10) {
                $result .= $teens[$thousands - 10] . ' ';
                $thousandsWord = $this->getThousandsDeclension(0);
                $thousands = 0;
            }
            if ($thousands > 0) {
                $result .= $onesFeminine[$thousands] . ' ';
                $thousandsWord = $this->getThousandsDeclension($thousands);
            } else if ($thousandsWord == '') {
                $thousandsWord = $this->getThousandsDeclension(0);
            }

            $result .= $thousandsWord . ' ';
            $grn = $grn % 1000;
        }

        // Hundreds
        if ($grn >= 100) {
            $result .= $hundreds[floor($grn / 100)] . ' ';
            $grn = $grn % 100;
        }

        // Tens and ones
        if ($grn >= 20) {
            $result .= $tens[floor($grn / 10)] . ' ';
            $grn = $grn % 10;
        }

        if ($grn >= 10) {
            $result .= $teens[$grn - 10] . ' ';
            $grn = 0;
        }

        if ($grn > 0) {
            $result .= $ones[$grn] . ' ';
        }

        // Get the last digit of the original amount for declension
        $lastDigit = floor($number / 100) % 10;
        $lastTwoDigits = floor($number / 100) % 100;
        
        $result .= $this->getHryvniaDeclension($lastDigit, $lastTwoDigits) . ' ';
        $result .= str_pad($kop, 2, '0', STR_PAD_LEFT) . ' ';
        $result .= $this->getKopiykaDeclension($kop);

        return trim($result);
    }

    private function getThousandsDeclension($lastDigit)
    {
        if ($lastDigit == 1) {
            return 'тисяча';
        } elseif ($lastDigit >= 2 && $lastDigit <= 4) {
            return 'тисячі';
        } else {
            return 'тисяч';
        }
    }

    private function getHryvniaDeclension($lastDigit, $lastTwoDigits)
    {
        if ($lastTwoDigits >= 11 && $lastTwoDigits <= 14) {
            return 'гривень';
        }
        
        if ($lastDigit == 1) {
            return 'гривня';
        } elseif ($lastDigit >= 2 && $lastDigit <= 4) {
            return 'гривні';
        } else {
            return 'гривень';
        }
    }

    private function getKopiykaDeclension($kop)
    {
        $lastDigit = $kop % 10;
        $lastTwoDigits = $kop % 100;
        
        if ($lastTwoDigits >= 11 && $lastTwoDigits <= 14) {
            return 'копійок';
        }
        
        if ($lastDigit == 1) {
            return 'копійка';
        } elseif ($lastDigit >= 2 && $lastDigit <= 4) {
            return 'копійки';
        } else {
            return 'копійок';
        }
    }
}

