<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_course_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->sentence(3),
            'slug' => $this->faker->unique()->slug(2),
            'description' => $this->faker->paragraph(3),
            'show' => 1,
            'popular' => 1,
            'image' => $this->faker->randomElement([
                'course-1.jpg',
                'course-2.jpg',
                'course-3.jpg',
                'course-4.jpg',
                'course-5.jpg',
                'course-6.jpg',
            ]),
            'file_pdf' => null,
            'status'  => 1,
        ];
    }
}
