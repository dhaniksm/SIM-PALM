<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\LahanController;
use App\Http\Controllers\TanamanController;

Route::resource('petani', PetaniController::class);
Route::resource('lahan', LahanController::class);
Route::resource('tanaman', TanamanController::class);

?>
