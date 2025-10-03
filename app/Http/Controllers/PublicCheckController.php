<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PublicCheckController extends Controller
{
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

        // Build the URL for the HTML version of the receipt
        $htmlUrl = route('html.receipt', ['pdf_uuid' => $pdf_uuid]);

        // Call remote PDF generation service
        try {
            $response = Http::timeout(30)->post('http://kuraloh.com:3000/pdf', [
                'url' => $htmlUrl,
                'options' => [
                    'format' => 'A4',
                    'printBackground' => true
                ]
            ]);

            if ($response->successful()) {
                return response($response->body(), 200)
                    ->header('Content-Type', 'application/pdf')
                    ->header('Content-Disposition', "inline; filename=\"receipt_{$pdf_uuid}.pdf\"");
            } else {
                // Fallback to local PDF generation if remote service fails
                return $this->generateLocalPdf($check, $pdf_uuid);
            }
        } catch (\Exception $e) {
            // Fallback to local PDF generation on error
            Log::error('Failed to generate PDF: ' . $e->getMessage());;
            abort(500, 'Failed to generate PDF: ' . $e->getMessage());
        }
    }

    private function generateLocalPdf($check, $pdf_uuid)
    {
        $data = $this->getReceiptData($check);
        $pdf = Pdf::loadView('pdf.receipt', $data);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream("receipt_{$pdf_uuid}.pdf");
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
        $ones = [
            '', 'один', 'два', 'три', 'чотири', "п'ять", 'шість', 'сім', 'вісім', "дев'ять"
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

        if ($number == 0) {
            return 'нуль гривень 00 копійок';
        }

        $result = '';
        $grn = floor($number);
        $kop = str_pad(round(($number - $grn) * 100), 2, '0', STR_PAD_LEFT);

        if ($grn >= 1000) {
            $thousands = floor($grn / 1000);
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
                $thousands = 0;
            }
            if ($thousands > 0) {
                if ($thousands == 1) {
                    $result .= 'одна ';
                } elseif ($thousands == 2) {
                    $result .= 'дві ';
                } else {
                    $result .= $ones[$thousands] . ' ';
                }
            }

            $result .= 'тисяч ';
            $grn = $grn % 1000;
        }

        if ($grn >= 100) {
            $result .= $hundreds[floor($grn / 100)] . ' ';
            $grn = $grn % 100;
        }

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

        $result .= 'гривень ' . $kop . ' копійок';

        return trim($result);
    }
}

