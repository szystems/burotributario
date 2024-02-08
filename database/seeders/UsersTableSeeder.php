<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Otto Szarata',
            'email' => 'szystems@hotmail.com',
            'password' => Hash::make('SPP7007aaa@@@'),
            'role_as' => '1',
            'principal' => '1',
        ]);

        User::create([
            'name' => 'Eduardo',
            'email' => 'eduardom.buro@gmail.com',
            'password' => Hash::make('12345678'),
            'role_as' => '1',
            'principal' => '0',
        ]);

        User::create([
            'name' => 'Rodolfo de Leon',
            'email' => 'rodolfo.buro@gmail.com',
            'password' => Hash::make('12345678'),
            'role_as' => '1',
            'principal' => '0',
        ]);

        User::create([
            'name' => 'Hugo',
            'email' => 'Sistemas.buro@gmail.com',
            'password' => Hash::make('12345678'),
            'role_as' => '1',
            'principal' => '0',
        ]);
    }
}
