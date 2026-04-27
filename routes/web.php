<?php

Route::get('/welcome', function () {
    return view('welcome');
});

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JurusanController;
Route::resource('jurusan', JurusanController::class);

use App\Http\Controllers\DosenController;
Route::resource('dosen', DosenController::class);

Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('/jurusan/{id}', [JurusanController::class, 'show'])->name('jurusan.show');
Route::get('/jurusan-create', [JurusanController::class, 'create'])->name('jurusan.add');
Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.save');
Route::get('/jurusan-edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.edit');
Route::put('/jurusan/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy'])->name('jurusan.delete');

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::get('/mahasiswa-create', [MahasiswaController::class, 'create'])->name('mahasiswa.add');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.save');
Route::get('/mahasiswa-edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/{id}', [DosenController::class, 'show'])->name('dosen.show');
Route::get('/dosen-create', [DosenController::class, 'create'])->name('dosen.add');
Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.save');
Route::get('/dosen-edit/{id}', [DosenController::class, 'edit'])->name('dosen.edit');
Route::put('/dosen/{id}', [DosenController::class, 'update'])->name('dosen.update');
Route::delete('/dosen/{id}', [DosenController::class, 'destroy'])->name('dosen.delete');