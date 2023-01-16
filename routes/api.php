<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\PegawaiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Proses sistem login

// Halaman register
Route::post('/register',[AuthController::class,'register']);

// Halaman Login
Route::post('/login',[AuthController::class,'login']);

// Untuk mengakses beberapa sistem di bawah ini diperlukan token data yang di ambil setelah user sudah login
// Dengan mengecek lewat aplikasi atau website postman
Route::group(['middleware' =>['auth:sanctum']],function(){
    // Halaman utama pegawai
    Route::get('/pegawais',[PegawaiController::class, 'index']);

    // Untuk proses tambah data post
    Route::post('/pegawai',[PegawaiController::class, 'store']);

    // Untuk proses detail data post
    Route::get('/pegawais/{id}',[PegawaiController::class, 'show']);

    // Untuk proses ubah data post
    Route::put('/pegawais/{id}',[PegawaiController::class, 'update']);

    // Untuk proses hapus data post
    Route::delete('/pegawais/{id}',[PegawaiController::class, 'destroy']);

    // Halaman utama Jabatan
    Route::get('/jabatans',[JabatanController::class, 'index']);

    // Untuk proses tambah data post
    Route::post('/jabatan',[JabatanController::class, 'store']);

    // Untuk proses detail data post
    Route::get('/jabatans/{id}',[JabatanController::class, 'show']);

    // Untuk proses ubah data post
    Route::put('/jabatans/{id}',[JabatanController::class, 'update']);

    // Untuk proses hapus data post
    Route::delete('/jabatans/{id}',[JabatanController::class, 'destroy']);

    // Halaman utama kontrak
    Route::get('/kontraks',[KontrakController::class, 'index']);

    // Untuk proses tambah data post
    Route::post('/kontrak',[KontrakController::class, 'store']);

    // Untuk proses detail data post
    Route::get('/kontraks/{id}',[KontrakController::class, 'show']);

    // Untuk proses ubah data post
    Route::put('/kontraks/{id}',[KontrakController::class, 'update']);

    // Untuk proses hapus data post
    Route::delete('/kontraks/{id}',[KontrakController::class, 'destroy']);


    Route::post('/logout',[AuthController::class,'logout']);

});