<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\JamAbsen;
use App\Models\Presensi;
use Illuminate\Support\Carbon;

class ApiPresensiController extends Controller
{
    public function absenByUid($tag_uid)
    {
        date_default_timezone_set('Asia/Jakarta');
        Carbon::setLocale('id');

        $guru = Guru::where('tag_uid', $tag_uid)->first();

        if (!$guru) {
            return response()->json([
                'success' => false,
                'message' => 'UID tidak ditemukan',
            ], 404);
        }

        $jamAbsen = JamAbsen::whereTime('jam_mulai', '<=', now('Asia/Jakarta')->toTimeString())
            ->whereTime('jam_selesai', '>=', now('Asia/Jakarta')->toTimeString())
            ->first();

        if (!$jamAbsen) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada jam absen yang tersedia pada waktu ini',
            ], 404);
        }

        $existingPresensi = Presensi::where('guru_id', $guru->id)
            ->where('jam_absen_id', $jamAbsen->id)
            ->whereDate('tanggal', now('Asia/Jakarta')->toDateString())
            ->first();

        if ($existingPresensi) {
            return response()->json([
                'success' => false,
                'message' => 'Sudah melakukan presensi pada hari dan jam ini',
                'guru' => $guru,
                'existing_presensi' => $existingPresensi,
            ], 409);
        }

        $jamAbsenMulai = Carbon::parse($jamAbsen->jam_mulai);
        $jamPresensi = Carbon::now('Asia/Jakarta');
        $isTelat = $jamPresensi->diffInMinutes($jamAbsenMulai) > 60;
        $keterangan = $isTelat ? 'Telat' : 'Hadir';

        $presensi = Presensi::create([
            'guru_id' => $guru->id,
            'jam_absen_id' => $jamAbsen->id,
            'tanggal' => now('Asia/Jakarta')->toDateString(),
            'jam_presensi' => $jamPresensi->toTimeString(),
            'keterangan' => $keterangan,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Presensi berhasil dicatat',
            'guru' => $guru,
            'jam_absen' => $jamAbsen,
            'presensi' => $presensi,
        ], 200);
    }
}
