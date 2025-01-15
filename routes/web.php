<?php

use App\Http\Controllers\Api\ApiAbsenController;
use App\Http\Controllers\Api\ApiPresensiController;
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
use App\Http\Controllers\Dashboard\DashboardPengajuanController;
use App\Http\Controllers\Web\WebBeritaController;
use App\Http\Controllers\Web\WebKontakController;
use App\Http\Controllers\Web\WebPengajuanController;
use App\Http\Controllers\Web\WebProfilController;
use Monolog\Processor\WebProcessor;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::middleware(['auth'])->group(function () {
    //admin
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('data-guru', DashboardDataGuruController::class);
    Route::resource('mata-pelajaran', DashboardMapelController::class);
    Route::resource('jam-absen', DashboardJamAbsenController::class);
    Route::resource('artikel', DashboardArtikelController::class);

    Route::get('absensi', [DashboardDataAbsensiController::class, 'index']);
    Route::get('history', [DashboardDataAbsensiController::class, 'history'])->name('history.presensi');
    Route::get('pusat-unduhan', [DashboardPusatUnduhanController::class, 'index']);
    Route::resource('pengguna-sistem', DashboardUserController::class);

    Route::get('data-pengajuan', [DashboardPengajuanController::class, 'index'])->name('data-pengajuan.index');
    Route::get('data-pengajuan/history', [DashboardPengajuanController::class, 'history'])->name('data-pengajuan.history');
    Route::post('data-pengajuan/{id}/update-status/{status}', [DashboardPengajuanController::class, 'updateStatus'])->name('pengajuan.updateStatus');
});

//api
Route::get('/api/cek-uid/{uid}', [ApiAbsenController::class, 'checkUid']);
Route::get('/api/presensi/{tag_uid}', [ApiPresensiController::class, 'absenByUid']);

//web
// home
Route::get('/', [WebHomeController::class, 'index']);
// profil
Route::get('/profil', [WebProfilController::class, 'index'])->name('bebas');
// berita
Route::get('/berita', [WebBeritaController::class, 'index']);
// detail-berita
Route::get('/detail-berita', [WebBeritaController::class, 'detail']);
// kontak
Route::get('/kontak', [WebKontakController::class, 'index']);


Route::get('/pengajuan', [WebPengajuanController::class, 'index'])->name('pengajuan.index');
Route::post('/pengajuan', [WebPengajuanController::class, 'store'])->name('pengajuan.store');
Route::post('/cari-guru', [WebPengajuanController::class, 'searchGuru'])->name('pengajuan.searchGuru');
