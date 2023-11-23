<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Coffee Dua Arah'
        ];

        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Us | Coffee Dua Arah'
        ];

        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us | Coffee Dua Arah',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. Paingan 2',
                    'kabupaten' => 'Sleman'

                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl Kepuh sari',
                    'kabupaten' => 'Sleman'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }

    public function menupelanggan()
    {
        $data = [
            'title' => 'Daftar Menu'
        ];
        return view('pages/menupelanggan', $data);
    }
}
