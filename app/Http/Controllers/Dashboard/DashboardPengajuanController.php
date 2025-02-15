<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\JamAbsen;
use App\Models\Presensi;

class DashboardPengajuanController extends Controller
{
    public function index()
    {
        $pengajuans = Pengajuan::with('guru')->where('status', 'pending')->get();
        $title = 'Data Pengajuan';
        return view('admin.pengajuan.index', compact('pengajuans', 'title'));
    }

    public function updateStatus($id, $status)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status = $status;
        $pengajuan->save();

        if ($status == 'approved') {
            $earliestJamAbsen = JamAbsen::orderBy('jam_mulai', 'asc')->first();

            if ($earliestJamAbsen) {
                $keterangan = $this->generateKeterangan($pengajuan->jenis_pengajuan);

                Presensi::create([
                    'guru_id' => $pengajuan->guru_id,
                    'jam_absen_id' => $earliestJamAbsen->id,
                    'tanggal' => now()->toDateString(),  // Set the current date
                    'jam_presensi' => $earliestJamAbsen->jam_mulai,
                    'keterangan' => $keterangan,
                ]);
            }
        }

        return redirect()->route('data-pengajuan.index')->with('success', 'Status berhasil diperbaharui.');
    }

    private function generateKeterangan($jenisPengajuan)
    {
        switch ($jenisPengajuan) {
            case 'Izin':
                return 'Izin';
            case 'Sakit':
                return 'Sakit';
            default:
                return 'Presensi otomatis setelah pengajuan disetujui.';
        }
    }

    public function  history()
    {
        $pengajuans = Pengajuan::with('guru')->get();
        $title = 'History Pengajuan';
        return view('admin.pengajuan.history', compact('pengajuans', 'title'));
    }
}
