<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseInstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->unique()->numberBetween(1, 30),
            'instructor_id' => $this->faker->numberBetween(1, 8),
        ];
    }
}
