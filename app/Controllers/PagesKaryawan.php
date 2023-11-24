<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\LaporanModel;

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

    public function pelanggan()
    {
        $data = [
            'title' => 'Daftar Pelanggan'
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('pelanggan');

        try {
            $query = $builder->get();
            $dt['pelanggan'] = $query->getResultArray(); // Convert result to array
        } catch (\Exception $e) {
            die($e->getMessage()); // Display the error message
        }

        return view('pageskaryawan/pelanggan', $data + $dt); // Use + to merge arrays
    }

    public function create()
    {
        $data = [
            'title' => 'Daftar Pelanggan'
        ];

        return view('pageskaryawan/add', $data);
    }

    public function store()
    {
        // Get the data from the POST request
        $data = $this->request->getPost();

        try {
            // Use $this->db to get the database instance
            $this->db->table('pelanggan')->insert($data);

            if ($this->db->affectedRows() > 0) {
                return redirect()->to(site_url('datapelanggan'))->with('success', 'Data Berhasil Ditambahkan');
            } else {
                // Handle case when no rows were affected (insert failed)
                // You might want to add some error handling or feedback to the user
            }
        } catch (\Exception $e) {
            // Handle database errors
            die($e->getMessage());
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('pelanggan')->getWhere(['kode' => $id]);
            $data['pelanggan'] = $query->getRow();

            if ($data['pelanggan']) {
                return view('pageskaryawan/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id = null)
    {
        if ($id != null && $this->request->getMethod() === 'post') {
            $data = [
                'kode' => $this->request->getPost('kode'),
                'nama' => $this->request->getPost('nama'),
                'noHp' => $this->request->getPost('noHp'),
            ];

            $this->db->table('pelanggan')->update($data, ['kode' => $id]);

            if ($this->db->affectedRows() > 0) {
                return redirect()->to(site_url('datapelanggan'));
            } else {
                // Handle case when no rows were affected (update failed)
                // You might want to add some error handling or feedback to the user
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function keuangan()
    {
        // Instansiasi model
        $LaporanModel = new LaporanModel();

        // Ambil total pendapatan dari model
        $total_pendapatan = $LaporanModel->getTotalPendapatan();

        // Kirim data ke view
        $data = [
            'total_pendapatan' => $total_pendapatan
        ];

        return view('pageskaryawan/laporan', $data);
    }
}
