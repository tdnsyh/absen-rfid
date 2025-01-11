<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Pelajaran;
use App\Models\DetailGuru;

class DashboardDataGuruController extends Controller
{
    public function index()
    {
        $title = 'Data Guru';
        $deskripsi = 'bbb';
        $gurus = Guru::with('detailGuru')->get();
        return view('admin.guru.index', compact('title', 'deskripsi', 'gurus'));
    }

    public function create()
    {
        $title = 'Data Guru';
        $pelajaran = Pelajaran::all();
        return view('admin.guru.create', compact('pelajaran', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'tag_uid' => 'required|unique:guru',
            'pelajaran_id' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'no_telf' => 'required',
            'alamat' => 'required',
        ]);

        $guru = Guru::create($request->only('nama', 'nip', 'tag_uid'));

        DetailGuru::create([
            'guru_id' => $guru->id,
            'pelajaran_id' => $request->pelajaran_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nik' => $request->nik,
            'no_telf' => $request->no_telf,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('data-guru.index')->with('success', true)->with('message', 'Guru berhasil dibuat.');
    }


    public function edit($id)
    {
        $title = 'Data Guru';
        $guru = Guru::with('detailGuru')->findOrFail($id);
        $pelajaran = Pelajaran::all();
        return view('admin.guru.edit', compact('guru', 'pelajaran', 'title'));
    }

    public function show($id)
    {
        $title = 'Data Guru';
        $guru = Guru::with('detailGuru.pelajaran')->findOrFail($id);
        return view('admin.guru.show', compact('guru', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'tag_uid' => 'required|unique:guru,tag_uid,' . $id,
            'pelajaran_id' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'no_telf' => 'required',
            'alamat' => 'required',
        ]);

        $guru = Guru::findOrFail($id);
        $guru->update($request->only('nama', 'nip', 'tag_uid'));

        $detailGuru = DetailGuru::where('guru_id', $guru->id)->first();
        $detailGuru->update([
            'pelajaran_id' => $request->pelajaran_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nik' => $request->nik,
            'no_telf' => $request->no_telf,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('data-guru.index')->with('success', true)->with('message', 'Guru berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect()->route('data-guru.index')->with('success', true)->with('message', 'Guru berhasil dihapus.');
    }
}
