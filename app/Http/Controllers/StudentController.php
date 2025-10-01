<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = [
        //     [
        //         'id' => 1,
        //         'name' => 'Ozora Radinka Danadyaksa',
        //         'alamat' => 'Semarang',
        //         'email' => 'ozorozor1337@gmail.com',
        //         'nilai' => 90,
        //         'birth_date' => '2007-05-12',
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Caesar Raya Junior Nugroho',
        //         'alamat' => 'Koedoes',
        //         'email' => 'iwan@gmail.com',
        //         'nilai' => 85,
        //         'birth_date' => '2007-08-21',
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Arza Armandhito',
        //         'alamat' => 'Koedoes',
        //         'email' => 'argo@gmail.com',
        //         'nilai' => 88,
        //         'birth_date' => '2007-10-03',
        //     ],
        //     [
        //         'id' => 4,
        //         'name' => 'Sumaryo Gian',
        //         'alamat' => 'Kalimantan',
        //         'email' => 'sumaryo@gmail.com',
        //         'nilai' => 92,
        //         'birth_date' => '2007-12-11',
        //     ],
        // ];


        $students = Student::all();

        return view('student', [
            'title' => 'Student',
            'students' => $students
        ]);
    }

    public function create() {}
    public function store(Request $request) {}
    public function show(string $id) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}
