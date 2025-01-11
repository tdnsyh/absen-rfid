<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class DashboardArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        return view('admin.artikel.index', compact('artikels'))->with('title', 'Daftar Artikel');
    }

    public function create()
    {
        return view('admin.artikel.create')->with('title', 'Tambah Artikel');
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.show', compact('artikel'))->with('title', 'Detail Artikel');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_berita' => 'required',
            'penulis' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->isi_berita = $request->isi_berita;
        $artikel->penulis = $request->penulis;
        $artikel->kategori = $request->kategori;

        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $artikel->gambar = $imageName;
        }

        $artikel->save();

        return redirect()->route('artikel.index')->with('success', true)->with('message', 'Artikel berhasil dibuat.');
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.edit', compact('artikel'))->with('title', 'Edit Artikel');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_berita' => 'required',
            'penulis' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->isi_berita = $request->isi_berita;
        $artikel->penulis = $request->penulis;
        $artikel->kategori = $request->kategori;

        if ($request->hasFile('gambar')) {
            if ($artikel->gambar && file_exists(public_path('images/' . $artikel->gambar))) {
                unlink(public_path('images/' . $artikel->gambar));
            }

            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $artikel->gambar = $imageName;
        }

        $artikel->save();
        return redirect()->route('artikel.index')->with('success', true)->with('message', 'Artikel berhasil diperbarui!.');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        if ($artikel->gambar && file_exists(public_path('images/' . $artikel->gambar))) {
            unlink(public_path('images/' . $artikel->gambar));
        }

        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', true)->with('message', 'Artikel berhasil dihapus.');
    }
}
