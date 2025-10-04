<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Check extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender',
        'recipient',
        'amount',
        'date',
        'description',
        'sender_bankname',
        'sender_account',
        'sender_taxid',
        'recipient_taxid',
        'recipient_account',
        'recipient_bankname',
        'execution_date',
    ];

    protected $casts = [
        'date' => 'datetime',
        'amount' => 'integer',
        'execution_date' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($check) {
            if (empty($check->string_id)) {
                $check->string_id = self::generateStringId();
            }
            if (empty($check->pdf_uuid)) {
                $check->pdf_uuid = self::generatePdfUuid();
            }
        });

        // Invalidate cached PDF when check is updated
        static::updated(function ($check) {
            $check->invalidatePdfCache();
        });

        // Invalidate cached PDF when check is deleted
        static::deleted(function ($check) {
            $check->invalidatePdfCache();
        });
    }

    /**
     * Generate unique string_id like: cG6Ljx-rdzrQO0xVMD9x
     */
    private static function generateStringId(): string
    {
        do {
            $part1 = Str::random(6);
            $part2 = Str::random(14);
            $stringId = $part1 . '-' . $part2;
        } while (self::where('string_id', $stringId)->exists());

        return $stringId;
    }

    /**
     * Generate unique pdf_uuid
     */
    private static function generatePdfUuid(): string
    {
        do {
            $uuid = strtoupper(Str::random(4) . '-' . Str::random(4) . '-' . Str::random(4) . '-' . Str::random(4));
        } while (self::where('pdf_uuid', $uuid)->exists());

        return $uuid;
    }

    /**
     * Invalidate the cached PDF for this check
     */
    public function invalidatePdfCache(): bool
    {
        if (!$this->pdf_uuid) {
            return false;
        }

        $cachePath = "pdfs/receipt_{$this->pdf_uuid}.pdf";
        
        if (\Storage::disk('local')->exists($cachePath)) {
            \Storage::disk('local')->delete($cachePath);
            \Log::info("Invalidated cached PDF for check {$this->pdf_uuid}");
            return true;
        }

        return false;
    }
}



