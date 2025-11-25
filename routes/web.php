<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');

Route::prefix('data')->group(function () {
    Route::get('/petani', [PageController::class, 'dataPetani'])->name('data.petani');
    Route::get('/lahan', [PageController::class, 'dataLahan'])->name('data.lahan');
    Route::get('/tanaman', [PageController::class, 'dataTanaman'])->name('data.tanaman');
});

Route::prefix('operasional')->group(function () {
    Route::get('/pemupukan', [PageController::class, 'pemupukan'])->name('operasional.pemupukan');
    Route::get('/panen', [PageController::class, 'panen'])->name('operasional.panen');
    Route::get('/perawatan', [PageController::class, 'perawatan'])->name('operasional.perawatan');
});

Route::get('/laporan', [PageController::class, 'laporan'])->name('laporan');
Route::get('/kalender', [PageController::class, 'kalender'])->name('kalender');