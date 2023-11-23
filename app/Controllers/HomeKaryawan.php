<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeKaryawan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Coffee Dua Arah'
        ];

        return view('pageskaryawan/homekaryawan', $data);
    }

    // public function coba()
    // {
    //     echo $this->ama;
    // }

}
