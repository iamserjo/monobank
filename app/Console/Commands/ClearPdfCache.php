<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ClearPdfCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pdf:clear-cache {pdf_uuid?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear cached PDF files. Specify pdf_uuid to clear a specific PDF, or omit to clear all.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $pdfUuid = $this->argument('pdf_uuid');

        if ($pdfUuid) {
            // Clear specific PDF
            return $this->clearSpecificPdf($pdfUuid);
        }

        // Clear all cached PDFs
        return $this->clearAllPdfs();
    }

    private function clearSpecificPdf($pdfUuid)
    {
        $cachePath = "pdfs/receipt_{$pdfUuid}.pdf";

        if (Storage::disk('local')->exists($cachePath)) {
            Storage::disk('local')->delete($cachePath);
            $this->info("✓ Cleared cached PDF: {$pdfUuid}");
            return Command::SUCCESS;
        }

        $this->warn("× Cached PDF not found: {$pdfUuid}");
        return Command::FAILURE;
    }

    private function clearAllPdfs()
    {
        $files = Storage::disk('local')->files('pdfs');
        $count = 0;

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
                Storage::disk('local')->delete($file);
                $count++;
            }
        }

        if ($count > 0) {
            $this->info("✓ Cleared {$count} cached PDF(s)");
        } else {
            $this->info("No cached PDFs found");
        }

        return Command::SUCCESS;
    }
}
