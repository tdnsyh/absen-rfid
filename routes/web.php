<?php

use App\Http\Controllers\Api\ApiAbsenController;
use App\Http\Controllers\Dashboard\DashboardArtikelController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DashboardDataAbsensiController;
use App\Http\Controllers\Dashboard\DashboardDataGuruController;
use App\Http\Controllers\Dashboard\DashboardJamAbsenController;
use App\Http\Controllers\Dashboard\DashboardMapelController;
use App\Http\Controllers\Dashboard\DashboardPusatUnduhanController;
use App\Http\Controllers\Dashboard\DashboardUserController;
use App\Http\Controllers\Web\WebHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    //admin
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('data-guru', DashboardDataGuruController::class);
    Route::resource('mata-pelajaran', DashboardMapelController::class);
    Route::resource('jam-absen', DashboardJamAbsenController::class);
    Route::resource('artikel', DashboardArtikelController::class);

    //can beres
    Route::get('absensi', [DashboardDataAbsensiController::class, 'index']);
    Route::get('pusat-unduhan', [DashboardPusatUnduhanController::class, 'index']);
    Route::get('pengguna-sistem', [DashboardUserController::class, 'index']);
});

//api
Route::get('/api/cek-uid/{uid}', [ApiAbsenController::class, 'checkUid']);

//web
Route::get('/', [WebHomeController::class, 'index']);
