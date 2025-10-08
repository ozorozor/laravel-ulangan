<?php

namespace Database\Factories;

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Web Development', 'Informatika', 'Desktop Development', 'IOT', 'Game Development'
            ]),
            'description' => $this->faker->sentence(8),
        ];
    }
}
