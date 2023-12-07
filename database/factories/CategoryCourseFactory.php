<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'slug' => $this->faker->unique()->slug(2),
            'description' => $this->faker->paragraph(3),
            'show' => 1,
            'popular' => 1,
            'image' => $this->faker->randomElement([
                'cat-1.jpg',
                'cat-2.jpg',
                'cat-3.jpg',
                'cat-4.jpg',
                'cat-5.jpg',
                'cat-6.jpg',
            ]),
            'status' => 1,
        ];
    }
}
