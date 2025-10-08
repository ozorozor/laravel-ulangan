<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'MobileDevelopment', 'WebDevelopment', 'IoT', 'GameDevelopment', 'DesktopDevelopment'
            ]),
            'description' => fake()->sentence(8),
        ];
    }
}
