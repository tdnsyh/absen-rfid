<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Pengajuan;

class WebPengajuanController extends Controller
{
    public function index()
    {
        $title = 'Pengajuan';
        return view('web.pengajuan', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required|exists:guru,id',
            'jenis_pengajuan' => 'required|in:Sakit,Izin',
            'keterangan' => 'nullable|string',
            'dokumen_pendukung' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
        ]);

        $path = $request->file('dokumen_pendukung') ? $request->file('dokumen_pendukung')->store('dokumen', 'public') : null;

        Pengajuan::create([
            'guru_id' => $request->guru_id,
            'jenis_pengajuan' => $request->jenis_pengajuan,
            'keterangan' => $request->keterangan,
            'dokumen_pendukung' => $path,
            'status' => 'pending',
        ]);

        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan berhasil disubmit!.');
    }

    public function searchGuru(Request $request)
    {
        $guru = Guru::where('nip', $request->nip)->first();

        if ($guru) {
            return response()->json(['id' => $guru->id, 'nama' => $guru->nama]);
        }

        return response()->json(['error' => 'Guru tidak ditemukan.'], 404);
    }
}
