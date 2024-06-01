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

//praktikum laravel ke-4
Route::get('/admin/kelurahan/create', [KelurahanController::class, 'create']);
Route::post('/admin/kelurahan/store', [KelurahanController::class, 'store']);
Route::get('/admin/kelurahan/show/{id}', [KelurahanController::class, 'show']);

//tugas praktikum laravel ke-4
Route::get('/admin/pasien/create', [PasienController::class, 'create']);
Route::post('/admin/pasien/store', [PasienController::class, 'store']);
Route::get('/admin/pasien/show/{id}', [PasienController::class, 'show']);
