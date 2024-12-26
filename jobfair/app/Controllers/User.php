<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use Myth\Auth\Config\Services;
use Myth\Auth\Password;

class User extends Controller
{
    public function register()
    {
        helper(['form', 'url']);

        $data = [];

        $hashedPassword = Password::hash($password); // Hash the password
        $data = [
            'email'        => $email,
            'password_hash' => $hashedPassword,
        ];
    
        $this->userModel->insert($data);

        if ($this->request->getMethod() == 'post') {
            // Form validation rules
            $validationRules = [
                'username' => 'required|min_length[3]|max_length[255]|is_unique[users.username]',
                'email'    => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]|max_length[255]',
                'confirm_password' => 'matches[password]',
            ];

            if (!$this->validate($validationRules)) {
                return view('register', ['validation' => $this->validator]);
            }

            // Collect form data
            $userModel = new UserModel();
            $userModel->save([
                'username' => $this->request->getPost('username'),
                'email'    => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
            ]);

            return redirect()->to('/login');
        }

        return view('register');
    }

    public function attemptRegister()
    {
        $activator = service('activator');  // Check this line
        if ($activator) {
            // Perform registration and activation logic
        } else {
            // Handle the error if activator is null
        }
    }

    public function login()
    {
        helper(['form', 'url']);

        if ($this->request->getMethod() == 'post') {
            $session = session();
            $userModel = new UserModel();

            // Validate user login credentials
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $userModel->where('email', $email)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Store session data
                $session->set([
                    'id'       => $user['id'],
                    'email'    => $user['email'],
                    'username' => $user['username'],
                    'isLoggedIn' => true,
                ]);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('error', 'Invalid email or password');
            }
        }

        return view('login');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/login');
    }
}
