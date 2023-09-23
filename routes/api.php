<?php

use App\Http\Controllers\API\MahasiswaController;
use App\Http\Controllers\API\NilaiController;
use App\Http\Controllers\API\MatkulController;
use App\Http\Controllers\API\DosenController;
use App\Http\Controllers\API\AuthController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::prefix('v1')->group(function () 
{ 

    Route::prefix('auth')->group(function () {
        Route::post('register',[AuthController::class,'register']);
        Route::post('login',[AuthController::class,'login']);
        Route::post('me',[AuthController::class,'me']);
        Route::post('logout',[AuthController::class,'logout']);
    });
    Route::get('/nilai', [NilaiController::class, 'get']);
    Route::get('/mahasiswa', [MahasiswaController::class, 'get']);
    Route::get('/matkul', [MatkulController::class, 'get']);    
    Route::get('/dosen', [DosenController::class, 'get']);
});