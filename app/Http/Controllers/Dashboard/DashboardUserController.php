<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DashboardUserController extends Controller
{
    public function index()
    {
        $title = 'Pengguna';
        $deskripsi = 'Daftar pengguna yang terdaftar di sistem.';
        $users = User::all();
        return view('admin.user.index', compact('users', 'title', 'deskripsi'));
    }

    public function create()
    {
        $title = 'Pengguna';
        $deskripsi = 'Tambah pengguna baru ke sistem.';
        return view('admin.user.create', compact('title', 'deskripsi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('pengguna-sistem.index')
            ->with('success', true)
            ->with('message', 'Pengguna berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $title = 'Pengguna';
        $deskripsi = 'Edit informasi pengguna.';
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user', 'title', 'deskripsi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('pengguna-sistem.index')
            ->with('success', true)
            ->with('message', 'Pengguna berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('pengguna-sistem.index')
            ->with('success', true)
            ->with('message', 'Pengguna berhasil dihapus!');
    }
}
