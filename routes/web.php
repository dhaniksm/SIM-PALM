<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OperasionalController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/login', [AuthController::class, 'showLogin'])->middleware('guest')->name('login');
Route::post('/login/process', [AuthController::class, 'loginProcess'])->name('processLogin');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
//     Route::get('/data', [PageController::class, 'data']);
//     Route::get('/operasional', [PageController::class, 'operasional']);
//     Route::get('/laporan', [PageController::class, 'laporan']);
//     Route::get('/jadwal', [PageController::class, 'jadwal']);
// });

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::prefix('operasional')->group(function () {
    Route::get('/', [OperasionalController::class, 'index'])->name('operasional.index');
    Route::get('/create', [OperasionalController::class, 'create'])->name('operasional.create');
    Route::post('/store', [OperasionalController::class, 'store'])->name('operasional.store');
    Route::get('/{id}/edit', [OperasionalController::class, 'edit'])->name('operasional.edit');
    Route::put('/{id}', [OperasionalController::class, 'update'])->name('operasional.update');
    Route::delete('/{id}', [OperasionalController::class, 'destroy'])->name('operasional.destroy');
});