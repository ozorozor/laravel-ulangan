<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/home', [ProfilController::class, 'home'])->name('home');
Route::get('/guardians', [GuardianController::class, 'index'])->name('guardians');
Route::get('/classrooms', [ClassroomController::class, 'index'])->name('classrooms.index');
