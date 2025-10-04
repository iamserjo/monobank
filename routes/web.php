<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\PublicCheckController;

Route::get('/', function () {
    return view('welcome');
});

// Store new check from public form
Route::post('/check/store', [PublicCheckController::class, 'store'])->name('check.store');

// Admin panel for checks CRUD
Route::prefix('system')->group(function () {
    Route::resource('checkz', CheckController::class);
});

// Public check display
Route::get('/p/{string_id}', [PublicCheckController::class, 'show'])->name('public.check');

// PDF receipt
Route::get('/pdf/receipt_{pdf_uuid}', [PublicCheckController::class, 'generatePdf'])->name('pdf.receipt');

// HTML receipt
Route::get('/html/receipt_{pdf_uuid}', [PublicCheckController::class, 'showReceipt'])->name('html.receipt');
