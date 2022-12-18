<?php

use App\Http\Controllers\UkfController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');
Route::resource('mahasiswa',MahasiswaController::class);
Route::resource('ukf',UkfController::class);
