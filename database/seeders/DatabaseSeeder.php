<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use App\Models\Classroom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory(10)->create();
    \App\Models\Guardian::factory(10)->create();
        Classroom::factory()->count(4)->create();



        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
