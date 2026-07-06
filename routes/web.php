<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JurusanController;
Route::resource('jurusan', JurusanController::class);

use App\Http\Controllers\DosenController;
Route::resource('dosen', DosenController::class);

use App\Http\Controllers\MataKuliahController;
Route::resource('mata_kuliah', MataKuliahController::class);

use App\Http\Controllers\KelasController;
Route::resource('Kelas', KelasController::class);

use App\Http\Controllers\KRSController;
Route::resource('KRS', KRSController::class);

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('dashboard', [
        'user' => Auth::user(),
    ]);
})->name('dashboard');


Route::middleware('auth')->group(function(){
Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('/jurusan/{id}', [JurusanController::class, 'show'])->name('jurusan.show');
Route::get('/jurusan-create', [JurusanController::class, 'create'])->name('jurusan.add');
Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.save');
Route::get('/jurusan-edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.edit');
Route::put('/jurusan/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy'])->name('jurusan.delete');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
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

Route::get('/mata_kuliah', [MataKuliahController::class, 'index']);
Route::get('/mata_kuliah/{id}', [MataKuliahController::class, 'show'])->name('mata_kuliah.show');
Route::get('/mata_kuliah-create', [MataKuliahController::class, 'create'])->name('mata_kuliah.add');
Route::post('/mata_kuliah', [MataKuliahController::class, 'store'])->name('mata_kuliah.save');
Route::get('/mata_kuliah-edit/{id}', [MataKuliahController::class, 'edit'])->name('mata_kuliah.edit');
Route::put('/mata_kuliah/{id}', [MataKuliahController::class, 'update'])->name('mata_kuliah.update');
Route::delete('/mata_kuliah/{id}', [MataKuliahController::class, 'destroy'])->name('mata_kuliah.delete');


Route::resource('/krs', KRSController::class);
});


use App\Http\Controllers\AuthController;
Route::get('/register', [AuthController::class, 'registerView']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'loginView']);
Route::post('/login', [AuthController::class, 'login'])->name('login');