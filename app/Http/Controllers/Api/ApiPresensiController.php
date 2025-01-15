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
        // Cek apakah tag_uid ada di tabel guru
        $guru = Guru::where('tag_uid', $tag_uid)->first();

        if (!$guru) {
            return response()->json([
                'status' => 'error',
                'message' => 'Guru tidak ditemukan.',
            ], 404);
        }

        // Cek apakah ada jam absen yang tersedia
        $jamAbsen = JamAbsen::whereTime('jam_mulai', '<=', now()->toTimeString())
            ->whereTime('jam_selesai', '>=', now()->toTimeString())
            ->first();

        if (!$jamAbsen) {
            return response()->json([
                'status' => 'error',
                'message' => 'Tidak ada jam absen yang tersedia pada waktu ini.',
            ], 404);
        }

        // Cek apakah sudah ada presensi di hari dan jam yang sama
        $presensi = Presensi::where('guru_id', $guru->id)
            ->where('jam_absen_id', $jamAbsen->id)
            ->whereDate('tanggal', now()->toDateString())
            ->first();

        if ($presensi) {
            return response()->json([
                'status' => 'error',
                'message' => 'Guru sudah melakukan presensi pada hari dan jam ini.',
                'data' => $presensi,
            ], 409); // 409 Conflict
        }

        // Mencatat presensi
        $presensiBaru = Presensi::create([
            'guru_id' => $guru->id,
            'jam_absen_id' => $jamAbsen->id,
            'tanggal' => now()->toDateString(),
            'jam_presensi' => now()->toTimeString(),
            'keterangan' => 'Hadir',
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Presensi berhasil dicatat.',
            'data' => $presensiBaru,
        ], 200);
    }
}
