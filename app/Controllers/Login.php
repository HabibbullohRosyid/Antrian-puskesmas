<?php

namespace App\Controllers;

use App\Models\PasienModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function auth()
    {
        $a = 'Admin';
        $name       = $this->request->getPost('user');
        $pass        = $this->request->getPost('pass');
        if ($name == $a) {
            return redirect()->to(base_url('pasien'));
            return view('pasien');
        } else {
            echo "<script>alert('Password Salah!'); window.location('.base_url(home)')</script>";
            return view('login');
        }
    }
}
