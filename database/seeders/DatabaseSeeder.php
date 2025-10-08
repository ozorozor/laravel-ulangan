<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use App\Models\Classroom;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    Subject::factory(5)->create();
    student::factory(5)->create();
    Teacher::factory(5)->create();
    \App\Models\Guardian::factory(10)->create();
        Classroom::factory()->count(4)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
