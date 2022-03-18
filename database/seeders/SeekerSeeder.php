<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SeekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Vandyck Lai',
            'title' => 'Software Engineering Student',
            'description' => 'Hey there I am enjoying my life in the coding prison, please hit me up if you want to collab.',
            'email' => 'vandycklai@outlook.com',
            'contact_number' => '0123344553',
            'url' => 'https://www.vandycklai.github.io',
            'password' => Hash::make('vandycklai'),
            'online' => false,
            'current_team_id' => 3,
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);
    }
}
