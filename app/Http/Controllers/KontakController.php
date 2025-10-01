<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $dataKontak = [
            'email' => 'ozorozor1337@gmail.com',
            'nomor' => '6289675470705',
        ];
        return view('kontak', $dataKontak, [
            'title' => 'Kontak'
        ]);
    }
}
