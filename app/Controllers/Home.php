<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Coffee Dua Arah'
        ];

        return view('pages/home', $data);
    }
}
