<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        $title = 'Pengguna';
        $deskripsi = 'bbb';
        return view('admin.user.index', compact('title', 'deskripsi'));
    }
}
