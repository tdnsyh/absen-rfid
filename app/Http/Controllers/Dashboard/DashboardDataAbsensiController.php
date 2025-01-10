<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardDataAbsensiController extends Controller
{
    public function index()
    {
        $title = 'Absensi';
        $deskripsi = 'bbb';
        return view('admin.absensi.index', compact('title', 'deskripsi'));
    }
}
