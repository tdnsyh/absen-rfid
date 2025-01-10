<?php

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

//admin
Route::resource('data-guru', DashboardDataGuruController::class);
Route::resource('mata-pelajaran', DashboardMapelController::class);
Route::resource('jam-absen', DashboardJamAbsenController::class);
Route::resource('artikel', DashboardArtikelController::class);

//can beres
Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('absensi', [DashboardDataAbsensiController::class, 'index']);
Route::get('pusat-unduhan', [DashboardPusatUnduhanController::class, 'index']);
Route::get('pengguna-sistem', [DashboardUserController::class, 'index']);

//web
Route::get('/', [WebHomeController::class, 'index']);
