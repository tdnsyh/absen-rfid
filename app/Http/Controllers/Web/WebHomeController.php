<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('web.home', compact('title'));
    }
}
