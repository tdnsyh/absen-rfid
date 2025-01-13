<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\JamAbsen;
use Illuminate\Support\Carbon;
use App\Models\Absensi;
use App\Models\DetailAbsensi;

class ApiAbsenController extends Controller
{
    public function checkUid($uid)
    {
        // Mencari guru berdasarkan UID
        $guru = Guru::where('tag_uid', $uid)->first();

        // Jika guru tidak ditemukan
        if (!$guru) {
            return response()->json([
                'success' => false,
                'message' => 'UID tidak ditemukan'
            ], 404);
        }

        // Mengambil data jam absen
        $jamAbsen = JamAbsen::first();

        if (!$jamAbsen) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada jam absen yang tersedia'
            ], 404);
        }

        // Mendapatkan waktu mulai dan waktu selesai dari jam absen
        $jamMulai = Carbon::parse($jamAbsen->jam_mulai);
        $jamSelesai = Carbon::parse($jamAbsen->jam_selesai);
        $waktuSekarang = Carbon::now();

        // Cek apakah waktu sekarang berada dalam rentang waktu jam absen
        if ($waktuSekarang < $jamMulai || $waktuSekarang > $jamSelesai) {
            return response()->json([
                'success' => false,
                'message' => 'Absen hanya dapat dilakukan antara ' . $jamMulai->format('H:i') . ' dan ' . $jamSelesai->format('H:i')
            ], 400);
        }

        // Cek apakah sudah ada absensi untuk guru pada hari yang sama dan jam yang sama
        $existingAbsensi = Absensi::where('guru_id', $guru->id)
            ->where('tanggal', Carbon::today()->toDateString())
            ->where('jam_absen_id', $jamAbsen->id)
            ->first();

        if ($existingAbsensi) {
            return response()->json([
                'success' => false,
                'message' => 'Sudah absen pada jam ini',
                'guru' => $guru,
                'existing_absensi' => $existingAbsensi
            ]);
        }

        $absensi = Absensi::create([
            'guru_id' => $guru->id,
            'jam_absen_id' => $jamAbsen->id,
            'tanggal' => Carbon::today()->toDateString(),
        ]);

        $detailAbsensi = DetailAbsensi::create([
            'absensi_id' => $absensi->id,
            'jam_absen' => $waktuSekarang->toTimeString(),
            'keterangan' => 'hadir',
        ]);

        $currentHour = $waktuSekarang->hour;
        if ($currentHour < 9) {
            $message = 'Selamat datang ' . $guru->nama . ', terima kasih sudah melakukan absensi hari ini, selamat mengajar';
        } elseif ($currentHour > 12) {
            $message = 'Selamat datang ' . $guru->nama . ', terima kasih sudah melakukan absensi hari ini, selamat pulang';
        } else {
            $message = 'Selamat datang ' . $guru->nama . ', terima kasih sudah melakukan absensi hari ini';
        }

        return response()->json([
            'success' => true,
            'message' => $message,
            'guru' => $guru,
            'jam_absen' => $jamAbsen,
            'absensi' => $absensi,
            'detail_absensi' => $detailAbsensi
        ]);
    }
}
