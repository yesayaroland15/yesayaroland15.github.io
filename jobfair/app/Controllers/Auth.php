<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // Halaman Registrasi
    public function register()
    {
        return view('auth/register');
    }

    // Proses Registrasi
    public function attemptRegister()
    {
        if ($this->validate([
            'username' => 'required|min_length[3]|max_length[20]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'role'     => 'required|in_list[admin,user,owner]', // Batasi pilihan role
        ])) {
            // Simpan data user
            $this->userModel->save([
                'username' => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'role'     => $this->request->getVar('role'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]);

            return redirect()->to('/login')->with('success', 'Registration successful! Please log in.');
        }

        return view('auth/register', [
            'validation' => \Config\Services::validation(),
        ]);
    }

    // Halaman Login
    public function login()
    {
        return view('auth/login');
    }

    // Proses Login
    public function attemptLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan email
        $user = $this->userModel->where('email', $email)->first();

        // Jika user tidak ditemukan
        if (!$user) {
            return redirect()->back()->withInput()->with('error', 'User not found.');
        }

        // Verifikasi password
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Incorrect password.');
        }

        // Set session data
        session()->set([
            'isLoggedIn' => true,
            'userId'     => $user['id'],
            'username'   => $user['username'],
            'role'       => $user['role'], // Tambahkan role ke session
        ]);

        // Redirect ke dashboard sesuai role
        if ($user['role'] === 'admin') {
            return redirect()->to('/')->with('success', 'Welcome Admin!');
        } else if ($user['role'] === 'user') {
            return redirect()->to('/')->with('success', 'Welcome User!');
        }else if ($user['role'] === 'owner') {
            return redirect()->to('/')->with('success', 'Welcome Owner!');
        }

        return redirect()->to('/')->with('error', 'Role not recognized.');
    }

    // Proses Logout
    public function logout()
    {
        session()->destroy(); // Hapus semua data session

        return redirect()->to('/login')->with('success', 'You have been logged out.');
    }
}
