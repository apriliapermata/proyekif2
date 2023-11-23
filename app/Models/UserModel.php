<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    public function getData($username, $password)
    {
        return $this->db->table('karyawan')->where(['username' => $username, 'password' => $password])->get()->getRowArray();
    }

}

