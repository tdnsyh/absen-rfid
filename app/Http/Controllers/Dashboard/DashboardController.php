<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Pelajaran;
use App\Models\Presensi;
use App\Models\JamAbsen;
use App\Models\Pengajuan;
use App\Models\Artikel;


class DashboardController extends Controller
{
    public function index()
    {
        $guruCount = Guru::count();
        $pelajaranCount = Pelajaran::count();
        $jamAbsenCount = JamAbsen::count();
        $artikelCount = Artikel::count();
        $presensiCount = Presensi::count();
        $pengajuanCount = Pengajuan::count();
        $today = now()->format('Y-m-d');

        $hadirCount = Presensi::whereDate('tanggal', $today)
            ->whereIn('keterangan', ['Hadir', 'Telat'])
            ->distinct('guru_id')
            ->count('guru_id');

        $lastPresensi = Presensi::with('guru', 'jamAbsen')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        $title = 'Dashboard';
        return view('admin.dashboard.home', compact(
            'title',
            'guruCount',
            'pelajaranCount',
            'jamAbsenCount',
            'artikelCount',
            'presensiCount',
            'pengajuanCount',
            'hadirCount',
            'lastPresensi'
        ));
    }
}
