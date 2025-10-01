<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{



    public function student()
    {
        return view('student',[
            'title' => 'Student'
        ]);
    }

    public function home()
    {
        return view('home',[
            'title' => 'home'
        ]);
    }

    public function profil()
    {
        $data = [
            'nama' => 'Ozora Radinka Danadyaksa',
            'kelas' => 'XI PPLG 1',
            'sekolah' => 'SMK Raden Umar Said Kudus'
        ];

        return view('profil', $data, [
            'title' => 'Profil'
        ]);
    }



    
}
