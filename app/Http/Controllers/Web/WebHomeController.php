<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class WebHomeController extends Controller
{
    public function index()
    {
        $title = 'SMK Niko Al - Farisi';
        $artikels = Artikel::where('kategori', 'Prestasi')->limit(2)->get();
        $berita = Artikel::whereIn('kategori', ['Berita', 'Artikel'])->limit(3)->get();
        return view('web.home', compact('title', 'artikels', 'berita'));
    }

    public function detail($kategori, $id, $judul)
    {
        $artikel = Artikel::findOrFail($id);

        if ($artikel->kategori != $kategori) {
            abort(404);
        }

        $otherArticles = Artikel::all()
            ->where('id', '!=', $id)
            ->take(3);

        $title = $artikel->judul;

        return view('web.detail-berita', compact('artikel', 'title', 'otherArticles'));
    }
}
