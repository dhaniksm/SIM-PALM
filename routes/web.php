<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

Route::get('/', [PageController::class, 'login']);
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.process');

Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/data', [PageController::class, 'data']);
Route::get('/operasional', [PageController::class, 'operasional']);
Route::get('/laporan', [PageController::class, 'laporan']);
Route::get('/jadwal', [PageController::class, 'jadwal']);