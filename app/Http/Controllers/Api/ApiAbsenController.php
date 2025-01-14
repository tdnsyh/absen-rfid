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
        date_default_timezone_set('Asia/Jakarta');
        Carbon::setLocale('id');

        $guru = Guru::where('tag_uid', $uid)->first();

        if (!$guru) {
            return response()->json([
                'success' => false,
                'message' => 'UID tidak ditemukan'
            ], 404);
        }

        $jamAbsen = JamAbsen::first();

        if (!$jamAbsen) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada jam absen yang tersedia'
            ], 404);
        }

        $jamMulai = Carbon::parse($jamAbsen->jam_mulai, 'Asia/Jakarta');
        $jamSelesai = Carbon::parse($jamAbsen->jam_selesai, 'Asia/Jakarta');
        $batasAkhir = $jamSelesai->copy()->addHour();
        $waktuSekarang = Carbon::now('Asia/Jakarta');

        $isTelat = false;

        if ($waktuSekarang < $jamMulai) {
            return response()->json([
                'success' => false,
                'message' => 'Absen hanya dapat dilakukan mulai ' . $jamMulai->format('H:i')
            ], 400);
        }

        if ($waktuSekarang > $batasAkhir) {
            return response()->json([
                'success' => false,
                'message' => 'Absen sudah ditutup pada ' . $batasAkhir->format('H:i')
            ], 400);
        }

        if ($waktuSekarang > $jamSelesai) {
            $isTelat = true;
        }

        $existingAbsensi = Absensi::where('guru_id', $guru->id)
            ->where('tanggal', Carbon::today('Asia/Jakarta')->toDateString())
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
            'tanggal' => Carbon::today('Asia/Jakarta')->toDateString(),
        ]);

        $keterangan = $isTelat ? 'telat' : 'hadir';
        $detailAbsensi = DetailAbsensi::create([
            'absensi_id' => $absensi->id,
            'jam_absen' => $waktuSekarang->toTimeString(),
            'keterangan' => $keterangan,
        ]);

        $message = 'Selamat datang ' . $guru->nama . ', terima kasih sudah melakukan absensi hari ini';
        if ($isTelat) {
            $message .= '. Anda terlambat melakukan absensi.';
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
