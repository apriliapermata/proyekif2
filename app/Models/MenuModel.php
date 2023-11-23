<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'kodeProduk';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['namaProduk', 'harga', 'kategori','gambar', 'kodeProduk', 'action'];

    // Fungsi untuk menambahkan menu ke dalam database
    public function tambahMenu($data)
    {
        return $this->insert($data);
    }

    // Fungsi untuk mendapatkan semua menu dari database
    public function getMenu($kodeProduk)
    {
        return $this->find($kodeProduk);
    }

    public function getAllMenu()
    {
        return $this->findAll();
    }
}


