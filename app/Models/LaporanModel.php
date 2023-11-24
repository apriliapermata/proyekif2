<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'data_penjualan'; // Sesuaikan dengan nama tabel di database

    public function getTotalPendapatan()
    {
        try {
            $query = $this->db->table('data_penjualan')->selectSum('hargaTotal')->get();
            return $query->getRow()->hargaTotal;
        } catch (\Exception $e) {
            die($e->getMessage()); // Tampilkan pesan kesalahan
        }
    }
}
