<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Audio;

class AudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Audio::factory()->count(100)->create();
    }
}
