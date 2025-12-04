<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

// HALAMAN UTAMA (LANDING PAGE)
Route::get('/', [PageController::class, 'home'])->name('home');

// LOGIN PAGE
Route::get('/login', [AuthController::class, 'showLogin'])->middleware('guest')->name('login');

// PROSES LOGIN
Route::post('/login/process', [AuthController::class, 'loginProcess'])->name('processLogin');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// HALAMAN SETELAH LOGIN (PROTECTED)
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/data', [PageController::class, 'data']);
    Route::get('/operasional', [PageController::class, 'operasional']);
    Route::get('/laporan', [PageController::class, 'laporan']);
    Route::get('/jadwal', [PageController::class, 'jadwal']);

});
