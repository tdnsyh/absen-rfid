<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelajaran;

class DashboardMapelController extends Controller
{
    public function index()
    {
        $title = 'Mata Pelajaran';
        $deskripsi = 'bbb';
        $pelajaran = Pelajaran::all();
        return view('admin.mapel.index', compact('title', 'deskripsi', 'pelajaran'));
    }

    public function create()
    {
        $title = 'Mata Pelajaran';
        return view('admin.mapel.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelajaran' => 'required|string|max:255',
        ]);

        Pelajaran::create($request->only('nama_pelajaran'));

        return redirect()->route('mata-pelajaran.index')->with('success', 'Pelajaran berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $title = 'Mata Pelajaran';
        $pelajaran = Pelajaran::findOrFail($id);
        return view('admin.mapel.edit', compact('pelajaran', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelajaran' => 'required|string|max:255',
        ]);

        $pelajaran = Pelajaran::findOrFail($id);
        $pelajaran->update($request->only('nama_pelajaran'));

        return redirect()->route('mata-pelajaran.index')->with('success', 'Pelajaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pelajaran = Pelajaran::findOrFail($id);
        $pelajaran->delete();

        return redirect()->route('mata-pelajaran.index')->with('success', 'Pelajaran berhasil dihapus.');
    }
}
