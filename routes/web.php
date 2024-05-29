<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [AdminController::class, 'index']);

//pertemuan laravel ke-3
Route::get('/admin/kelurahan', [KelurahanController::class, 'index']);

//tugas laravel ke-3
Route::get('/admin/pasien', [PasienController::class, 'index']);
