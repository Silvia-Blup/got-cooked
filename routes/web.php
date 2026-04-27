<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JurusanController;
Route::resource('jurusan', JurusanController::class);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::get('/mahasiswa-create', [MahasiswaController::class, 'create'])->name('mahasiswa.add');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.save');
Route::get('/mahasiswa-edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');