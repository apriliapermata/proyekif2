<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function action()
    {

        // Memuat model UserModel
        $muser = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Menggunakan metode getData untuk mendapatkan data user
        $userData = $muser->getData($username, $password);

        if ($userData) {
            // Jika data ditemukan
            if ($userData['posisi'] == 'Owner') {
                // Jika posisi adalah 'owner', atur session dan redirect ke halaman owner
                session()->set('username', $userData['username']);
                session()->set('nama', $userData['namaKaryawan']);
                return redirect()->to(base_url('homekaryawan'));
            } elseif ($userData['posisi'] == 'Karyawan') {
                // Jika posisi adalah 'karyawan', atur session dan redirect ke halaman karyawan
                session()->set('username', $userData['username']);
                session()->set('nama', $userData['namaKaryawan']);
                return redirect()->to(base_url('homekaryawan'));
            } else {
                // Posisi tidak dikenali, atur flashdata untuk pesan kesalahan dan redirect ke halaman login
                session()->setFlashdata('error', 'Posisi tidak valid.');
                return redirect()->to(base_url('login'));
            }
        } else {
            // Jika data tidak ditemukan, set flashdata untuk pesan kesalahan
            session()->setFlashdata('error', 'Username atau password salah!');
            // Jika data tidak ditemukan, redirect ke halaman login
            return redirect()->to(base_url('login'));
        }
    }
}
