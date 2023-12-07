<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
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
            'file_video' => $this->faker->imageUrl(640, 480, 'categories', true),
            'file_video' => $this->faker->randomElement([
                '1.mp4',
                '2.mp4',
                '3.mp4',
            ]),
        ];
    }
}
