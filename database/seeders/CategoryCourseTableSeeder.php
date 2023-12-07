<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryCourse;

class CategoryCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryCourse::factory()->count(10)->create();
    }
}
