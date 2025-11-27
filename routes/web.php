<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/data', [PageController::class, 'data']);
Route::get('/operasional', [PageController::class, 'operasional']);
Route::get('/laporan', [PageController::class, 'laporan']);
Route::get('/jadwal', [PageController::class, 'jadwal']);