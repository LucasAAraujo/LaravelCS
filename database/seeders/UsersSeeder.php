<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'firstname' => "Lucas",
            'lastName' => 'Alves',
            'email'=> 'lucas@alves.com',
            'password'=> bcrypt('123456'),
        ]);
    }
}
