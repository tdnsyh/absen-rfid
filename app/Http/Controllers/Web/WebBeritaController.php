<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class WebBeritaController extends Controller
{
    public function index()
    {
        $title = 'Berita';
        $artikels = Artikel::paginate(10);
        return view('web.berita', compact('title', 'artikels'));
    }

    public function detail($kategori, $id, $judul)
    {
        $artikel = Artikel::findOrFail($id);

        if ($artikel->kategori != $kategori) {
            abort(404);
        }

        $otherArticles = Artikel::where('kategori', $kategori)
            ->where('id', '!=', $id)
            ->latest()
            ->take(3)
            ->get();

        $title = $artikel->judul;
        return view('web.detail-berita', compact('artikel', 'title', 'otherArticles'));
    }
}
