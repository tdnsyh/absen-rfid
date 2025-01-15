<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Presensi;

class DashboardDataAbsensiController extends Controller
{
    public function index()
    {
        $title = 'Presensi';
        $deskripsi = 'bbb';
        $totalGuru = Guru::count();

        $today = now()->format('Y-m-d');

        $presensis = Presensi::whereDate('jam_presensi', $today)
            ->with('guru')
            ->orderBy('jam_presensi')
            ->get()
            ->unique('guru_id');
        $gurusNotPresent = Guru::whereNotIn('id', $presensis->pluck('guru_id'))->get();
        $hadirCount = Presensi::whereDate('tanggal', $today)
            ->whereIn('keterangan', ['Hadir', 'Telat'])
            ->distinct('guru_id')
            ->count('guru_id');
        $izinCount = Presensi::whereDate('tanggal', $today)
            ->where('keterangan', 'Izin')
            ->count();
        $sakitCount = Presensi::whereDate('tanggal', $today)
            ->where('keterangan', 'Sakit')
            ->count();

        $totalGuruCount = Guru::count();
        $presensiCount = $hadirCount;
        $belumAbsenCount = $totalGuruCount - $presensiCount;

        return view('admin.absensi.index', compact('title', 'deskripsi', 'totalGuru', 'presensis', 'gurusNotPresent', 'hadirCount', 'izinCount', 'sakitCount', 'belumAbsenCount'));
    }

    public function history(Request $request)
    {
        $title = 'History Presensi';

        $gurus = Guru::all();
        $presensis = Presensi::query();

        if ($request->has('tanggal') && $request->tanggal) {
            $presensis->whereDate('tanggal', $request->tanggal);
        }
        if ($request->has('guru_id') && $request->guru_id) {
            $presensis->where('guru_id', $request->guru_id);
        }

        $presensis = $presensis->paginate(10);
        return view('admin.absensi.history', compact('presensis', 'gurus', 'title'));
    }
}
