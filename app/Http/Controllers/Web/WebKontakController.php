<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebKontakController extends Controller
{
    public function index()
    {
        $title = 'kontak';
        return view('web.kontak', compact('title'));
    }
}
