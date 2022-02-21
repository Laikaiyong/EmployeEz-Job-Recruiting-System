<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'online' => false,
            'current_team_id' => 1,
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Recruiter',
            'email' => 'recruiter@gmail.com',
            'password' => Hash::make('recruiter'),
            'online' => false,
            'current_team_id' => 2,
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Job Seeker',
            'email' => 'jobseeker@gmail.com',
            'password' => Hash::make('jobseeker'),
            'online' => false,
            'current_team_id' => 3,
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);
    }
}
