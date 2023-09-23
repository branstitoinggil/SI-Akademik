<?php

use App\Http\Controllers\WebDosenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TUController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [LoginController::class, 'index']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'actionRegister']);
    
});

Route::group(['middleware' => ['web', 'auth:web']], function() {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::prefix('tu')->group(function () 
    {
        Route::get('/dashboard', [TUController::class, 'index']);
        Route::get('/kelola_mahasiswa', [TUController::class, 'mahasiswa']);
        Route::get('/tambah_mahasiswa', [TUController::class, 'tambah_mahasiswa']);
        Route::post('/aksi_tambah_mahasiswa', [TUController::class, 'aksi_tambah_mahasiswa']);
        Route::get('/update_mahasiswa/{id}', [TUController::class, 'update_mahasiswa']);
        Route::post('/aksi_update_mahasiswa', [TUController::class, 'aksi_update_mahasiswa']);
        Route::get('/hapus_mahasiswa/{id}', [TUController::class, 'hapus_mahasiswa']);

        Route::get('/kelola_dosen', [TUController::class, 'dosen']);
        Route::get('/tambah_dosen', [TUController::class, 'tambah_dosen']);
        Route::post('/aksi_tambah_dosen', [TUController::class, 'aksi_tambah_dosen']);
        Route::get('/update_dosen/{id}', [TUController::class, 'update_dosen']);
        Route::post('/aksi_update_dosen', [TUController::class, 'aksi_update_dosen']);
        Route::get('/hapus_dosen/{id}', [TUController::class, 'hapus_dosen']);


        Route::get('/kelola_matkul', [TUController::class, 'matkul']);
        Route::get('/tambah_matkul', [TUController::class, 'tambah_matkul']);
        Route::post('/aksi_tambah_matkul', [TUController::class, 'aksi_tambah_matkul']);
        Route::get('/update_matkul/{id}', [TUController::class, 'update_matkul']);
        Route::post('/aksi_update_matkul', [TUController::class, 'aksi_update_matkul']);
        Route::get('/hapus_matkul/{id}', [TUController::class, 'hapus_matkul']);

        Route::get('/kelola_nilai', [TUController::class, 'nilai']);
        Route::get('/tambah_nilai', [TUController::class, 'tambah_nilai']);
        Route::post('/aksi_tambah_nilai', [TUController::class, 'aksi_tambah_nilai']);
        Route::get('/update_nilai/{id}', [TUController::class, 'update_nilai']);
        Route::post('/aksi_update_nilai', [TUController::class, 'aksi_update_nilai']);
        Route::get('/hapus_nilai/{id}', [TUController::class, 'hapus_nilai']);
    });
});






Route::prefix('mahasiswa')->group(function () 
{
    Route::get('/dashboard', [MahasiswaController::class, 'index']);

});