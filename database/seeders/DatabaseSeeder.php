<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ConfigsTableSeeder::class);
        $this->call(PaymentPlatformsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(PlanTableSeeder::class);
        // $this->call(CategoryCourseTableSeeder::class);
        // $this->call(CourseTableSeeder::class);
        // $this->call(VideoTableSeeder::class);
        // $this->call(AudioTableSeeder::class);
        // $this->call(InstructorTableSeeder::class);
        // $this->call(CourseInstructorTableSeeder::class);
    }
}
