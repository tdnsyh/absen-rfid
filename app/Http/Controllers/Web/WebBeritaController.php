<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebBeritaController extends Controller
{
    public function index()
    {
        $title = 'berita';
        return view('web.berita', compact('title'));
    }
    public function detail()
    {
        $title = 'detail-berita';
        return view('web.detail-berita', compact('title'));
    }
}
