<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Tampilkan halaman login
    public function login()
    {
        return view('login');
    }

    // Terima form login, kirim username lewat parameter URL
    public function prosesLogin(Request $request)
    {
        $request->validate(['username' => 'required']);

        return redirect()->route('dashboard', [
            'username' => $request->username,
        ]);
    }

    // Dashboard: ambil username dari URL, kirim ke view
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Tamu');
        return view('dashboard', ['username' => $username]);
    }

    // Pengelolaan: kirim username + array menu ke view
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Tamu');

        $menus = [
            ['nama' => 'Nasi Goreng', 'harga' => 15000, 'stok' => 20],
            ['nama' => 'Mie Ayam',    'harga' => 12000, 'stok' => 15],
            ['nama' => 'Es Teh',      'harga' => 4000,  'stok' => 50],
            ['nama' => 'Gorengan',    'harga' => 2000,  'stok' => 40],
        ];

        return view('pengelolaan', [
            'username' => $username,
            'menus' => $menus,
        ]);
    }

    // Profile: kirim username + array info ke view
    public function profile(Request $request)
    {
        $username = $request->query('username', 'Tamu');

        $info = [
            'Nama Web'  => 'Kantin Kampus',
            'Tema'      => 'Pengelolaan Menu Kantin',
            'Framework' => 'Laravel',
        ];

        return view('profile', [
            'username' => $username,
            'info' => $info,
        ]);
    }
}