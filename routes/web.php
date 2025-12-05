<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\LahanController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OperasionalController;
use App\Http\Controllers\LaporanController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/login', [AuthController::class, 'showLogin'])->middleware('guest')->name('login');
Route::post('/login/process', [AuthController::class, 'loginProcess'])->name('processLogin');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    Route::prefix('manajemen')->group(function () {
        Route::get('/', [PageController::class, 'index'])->name('manajemen.index');
            Route::prefix('petani')->group(function () {
                Route::get('/', [PetaniController::class, 'index'])->name('petani.index');
                Route::post('/store', [PetaniController::class, 'store'])->name('petani.store');
                Route::get('/{id}/edit', [PetaniController::class, 'edit'])->name('petani.edit');
                Route::put('/{id}', [PetaniController::class, 'update'])->name('petani.update');
                Route::delete('/{id}', [PetaniController::class, 'destroy'])->name('petani.destroy');
            });
            Route::prefix('lahan')->group(function () {
                Route::get('/', [LahanController::class, 'index'])->name('lahan.index');
                Route::post('/store', [LahanController::class, 'store'])->name('lahan.store');
                Route::get('/{id}/edit', [LahanController::class, 'edit'])->name('lahan.edit');
                Route::put('/{id}', [LahanController::class, 'update'])->name('lahan.update');
                Route::delete('/{id}', [LahanController::class, 'destroy'])->name('lahan.destroy');
            });
            Route::prefix('tanaman')->group(function () {
                Route::get('/', [TanamanController::class, 'index'])->name('tanaman.index');
                Route::post('/store', [TanamanController::class, 'store'])->name('tanaman.store');
                Route::get('/{id}/edit', [TanamanController::class, 'edit'])->name('tanaman.edit');
                Route::put('/{id}', [TanamanController::class, 'update'])->name('tanaman.update');
                Route::delete('/{id}', [TanamanController::class, 'destroy'])->name('tanaman.destroy');
            });
    });

    Route::prefix('operasional')->group(function () {
        Route::get('/', [OperasionalController::class, 'index'])->name('operasional.index');
        Route::get('/create', [OperasionalController::class, 'create'])->name('operasional.create');
        Route::post('/store', [OperasionalController::class, 'store'])->name('operasional.store');
        Route::get('/{id}/edit', [OperasionalController::class, 'edit'])->name('operasional.edit');
        Route::put('/{id}', [OperasionalController::class, 'update'])->name('operasional.update');
        Route::delete('/{id}', [OperasionalController::class, 'destroy'])->name('operasional.destroy');
    });
    
    Route::prefix('laporan')->group(function () {
        Route::get('/', [LaporanController::class, 'laporan'])->name('laporan.index');
        Route::get('/panen', [LaporanController::class, 'panen'])->name('laporan.panen');
        Route::get('/pemupukan', [LaporanController::class, 'pemupukan'])->name('laporan.pemupukan');
        Route::get('/perawatan', [LaporanController::class, 'perawatan'])->name('laporan.perawatan');
    });

    Route::get('/kalender', [PageController::class, 'kalender']);
});