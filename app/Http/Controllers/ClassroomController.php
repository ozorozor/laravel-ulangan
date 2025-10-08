<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
public function index()
{
    $classrooms = Classroom::all();
    $students = Student::all(); // langsung ambil semua student

    return view('classrooms.index', compact('classrooms', 'students'));
}

}
