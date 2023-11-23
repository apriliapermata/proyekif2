<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class PagesKaryawan extends BaseController
{


    public function menu()
    {
        $menuModel = new MenuModel();
        $data = [
            'title' => 'Daftar Menu',
            'menu' => $menuModel->findAll(), // Mengambil semua data menu dari model
        ];

        return view('pageskaryawan/menu', $data);
    }


    public function tambahMenu()
    {
        $menuModel = new MenuModel();
        // Validasi formulir jika diperlukan
        $validationRules = [
            'kodeProduk' => 'required',
            'kategori' => 'required', 
            'namaProduk' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]',
        ];

        if ($this->validate($validationRules)) {
            // Ambil data dari formulir
            $namaProduk = $this->request->getPost('namaProduk');
            $kodeProduk = $this->request->getPost('kodeProduk');
            $kategori = $this->request->getPost('kategori');
            $harga = $this->request->getPost('harga');
            $gambar = $this->request->getFile('gambar');
            $gambar->move(ROOTPATH . 'public/uploads', $gambar->getName());


            // Simpan ke database menggunakan model
            $data = [
                'namaProduk' => $namaProduk,
                'harga' => $harga,
                'kodeProduk' => $kodeProduk,
                'kategori' => $kategori,
                'gambar' => $gambar->getName(),
            ];

            $menuModel->insert($data);

            // Redirect atau tampilkan pesan sukses
            return redirect()->to('/menu')->with('success', 'Menu berhasil ditambahkan');
        } else {
            // Tampilkan halaman formulir dengan pesan error
            return view('pageskaryawan/tambahmenu', ['validation' => $this->validator]);
        }
    }

    public function laporan()
    {
        $data = [
            'title' => 'Laporan'
        ];
        return view('pageskaryawan/laporan', $data);
    }

    public function pelanggan()
    {
        $data = [
            'title' => 'Daftar Pelanggan'
        ];
        return view('pageskaryawan/pelanggan', $data);
    }
}
