<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AudioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->numberBetween(1, 30),
            'name' => $this->faker->sentence(2),
            'description'  => $this->faker->paragraph(3),
            'file_audio' => $this->faker->randomElement([
                '1.mp3',
                '2.mp3',
                '3.mp3',
                '4.mp3',
                '5.mp3',
            ]),
        ];
    }
}
