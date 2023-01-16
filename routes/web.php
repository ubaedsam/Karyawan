<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/', function () {
    //return view('welcome');
    //return view('auth.registration');
    return view('auth.login');
});

// Auth (Sebelum Login)
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');

Route::post('custom-registration', [CustomAuthController::class, 'custom_registration'])->name('register.custom');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');

Route::post('custom-login', [CustomAuthController::class, 'custom_login'])->name('login.custom');

Route::get('reset-password', [CustomAuthController::class, 'reset_password'])->name('reset-password');
Route::post('reset-password-submit', [CustomAuthController::class, 'reset_password_submit'])->name('reset-password-submit');
Route::get('reset-password/{token}', [CustomAuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-pass', [CustomAuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');

Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

// Pengolahan data Pegawai
Route::get('pegawai', [PegawaiController::class, 'all'])->name('pegawai');

Route::get('pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');

Route::post('pegawai/tambah', [PegawaiController::class, 'tambah'])->name('pegawai.tambah');

Route::get('editp/{id}', [PegawaiController::class, 'editp']);

Route::post('updatep/{id}', [PegawaiController::class, 'ubahp']);

Route::delete('deletep/{id}', [PegawaiController::class, 'hapusp']);

// Pengolahan data jabatan
Route::get('jabatan', [JabatanController::class, 'all'])->name('jabatan');

Route::get('jabatan/create', [JabatanController::class, 'create'])->name('jabatan.create');

Route::post('jabatan/tambah', [JabatanController::class, 'tambah'])->name('jabatan.tambah');

Route::get('editj/{id}', [JabatanController::class, 'editj']);

Route::post('updatej/{id}', [JabatanController::class, 'ubahj']);

Route::delete('deletej/{id}', [JabatanController::class, 'hapusj']);

// Pengolahan data kontrak
Route::get('kontrak', [KontrakController::class, 'all'])->name('kontrak');

Route::get('kontrak/create', [KontrakController::class, 'create'])->name('kontrak.create');

Route::post('kontrak/tambah', [KontrakController::class, 'tambah'])->name('kontrak.tambah');

Route::get('editk/{id}', [KontrakController::class, 'editk']);

Route::post('updatek/{id}', [KontrakController::class, 'ubahk']);

Route::delete('deletek/{id}', [KontrakController::class, 'hapusk']);