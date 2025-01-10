<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPusatUnduhanController extends Controller
{
    public function index()
    {
        $title = 'Pusat Unduhan';
        $deskripsi = 'bbb';
        return view('admin.unduhan.index', compact('title', 'deskripsi'));
    }
}
