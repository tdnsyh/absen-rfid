<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebProfilController extends Controller
{
    public function index()
    {
        $title = 'Profil SMK Niko Al - Farisi';
        return view('web.profil', compact('title'));
    }
}
