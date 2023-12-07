<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description'   => $this->faker->paragraph(2),
            'image' => $this->faker->randomElement([
                'team-1.jpg',
                'team-2.jpg',
                'team-3.jpg',
                'team-4.jpg',
            ]),
            'twitter' => 'https://twitter.com/szotto18',
            'facebook' => 'https://www.facebook.com/otto.szarata/',
            'instagram' => 'https://www.instagram.com/szotto18/',
            'linkedin' => 'https://www.linkedin.com/in/ottoszarata/',
        ];
    }
}
