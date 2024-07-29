<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\MetodeController;
use App\Http\Controllers\KalkulatorZakatController;
use App\Http\Controllers\AdminController;

Route::get('/forkalam', function () {
    return view('forkalam');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anggota', function () {
    return view('anggota');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
});

Route::get('/thanks', function () {
    return view('thanks');
});

Route::get('/kalkulator', [KalkulatorZakatController::class, 'index']);
Route::get('/kalkulator', [KalkulatorZakatController::class, 'hitungMaal']);

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/registrasi',[RegisterController::class, 'index']);
Route::post('/registrasi',[RegisterController::class, 'store']);

Route::get('/metode',[MetodeController::class, 'index']);
Route::post('/metode',[MetodeController::class, 'store']);

Route::get('/jenis',[JenisController::class, 'index']);
Route::post('/jenis',[JenisController::class, 'store']);

Route::get('/dana',[AdminController::class, 'index']);
Route::post('/dana',[AdminController::class, 'save']);
Route::get('/tampilanadmin',[AdminController::class, 'indexx']);

