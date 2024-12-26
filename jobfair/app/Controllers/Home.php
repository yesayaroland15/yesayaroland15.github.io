<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Cek apakah pengguna sudah login
        if (!session()->get('isLoggedIn')) {
            // Redirect ke halaman login
            return redirect()->to('/login');
        }

        // Jika sudah login, tampilkan halaman admin
        return view('admin/overview');
    }
}
