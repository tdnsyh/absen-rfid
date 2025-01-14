<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JamAbsen;

class DashboardJamAbsenController extends Controller
{
    public function index()
    {
        $jamAbsens = JamAbsen::all();
        $title = "Daftar Jam Absen";
        return view('admin.jam.index', compact('jamAbsens', 'title'));
    }

    public function create()
    {
        $title = "Tambah Jam Absen";
        return view('admin.jam.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i',
        ]);

        JamAbsen::create($request->all());

        return redirect()->route('jam-absen.index')->with('success', true)->with('message', 'Jam Absen berhasil dibuat.');
    }

    public function destroy($id)
    {
        $jamAbsen = JamAbsen::findOrFail($id);
        $jamAbsen->delete();

        return redirect()->route('jam-absen.index')->with('success', true)->with('message', 'Jam Absen berhasil dihapus.');
    }
}
