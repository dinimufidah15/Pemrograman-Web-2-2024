<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/pegawai', [PegawaiController::class, 'index']);
    Route::get('/admin/kelurahan', [KelurahanController::class, 'index']);
    Route::get('/admin/kelurahan/create', [KelurahanController::class, 'create']);
    Route::post('/admin/kelurahan/store', [KelurahanController::class, 'store']);
    Route::get('/admin/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
    Route::put('/admin/kelurahan/update/{id}', [KelurahanController::class, 'update']);
    Route::delete('/admin/kelurahan/destroy/{id}', [KelurahanController::class, 'destroy']);
    Route::get('/admin/kelurahan/show/{id}', [KelurahanController::class, 'show']);
    Route::middleware('admin')->group(function () {
        Route::get('/admin/pasien/create', [PasienController::class, 'create']);
        Route::get('/admin/pasien', [PasienController::class, 'index']);
        Route::get('/admin/pasien/edit/{id}', [PasienController::class, 'edit']);
        Route::put('/admin/pasien/update/{id}', [PasienController::class, 'update']);
        Route::delete('/admin/pasien/destroy/{id}', [PasienController::class, 'destroy']);
        Route::post('/admin/pasien/store', [PasienController::class, 'store']);
        Route::get('/admin/pasien/show/{id}', [PasienController::class, 'show']);
    });

});

require __DIR__.'/auth.php';

//Route::get('/admin', [AdminController::class, 'index']);//
// Route::get('/pegawai', [PegawaiController::class, 'index']);


//pertemuan laravel ke-3
// Route::get('/admin/kelurahan', [KelurahanController::class, 'index']);

//tugas laravel ke-3
//Route::get('/admin/pasien', [PasienController::class, 'index']);//

//praktikum laravel ke-4
// Route::get('/admin/kelurahan/create', [KelurahanController::class, 'create']);
// Route::post('/admin/kelurahan/store', [KelurahanController::class, 'store']);
// Route::get('/admin/kelurahan/show/{id}', [KelurahanController::class, 'show']);

//tugas praktikum laravel ke-4
// Route::get('/admin/pasien/create', [PasienController::class, 'create']);
// Route::post('/admin/pasien/store', [PasienController::class, 'store']);
// Route::get('/admin/pasien/show/{id}', [PasienController::class, 'show']);

//praktikum laravel ke-5
// Route::get('/admin/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
// Route::put('/admin/kelurahan/update/{id}', [KelurahanController::class, 'update']);
// Route::delete('/admin/kelurahan/destroy/{id}', [KelurahanController::class, 'destroy']);

//tugas praktikum laravel ke-5
// Route::get('/admin/pasien/edit/{id}', [PasienController::class, 'edit']);
// Route::put('/admin/pasien/update/{id}', [PasienController::class, 'update']);
// Route::delete('/admin/pasien/destroy/{id}', [PasienController::class, 'destroy']);