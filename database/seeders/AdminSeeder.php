<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kai Yong',
            'title' => 'Head Administrator',
            'email' => 'kaiyong@admin.employeez.com',
            'password' => Hash::make('kaiyong'),
            'online' => false,
            'department' => 'Operation and Management',
            'description' => 'Hello there! My name is Kai Yong, please reach out to me if you have any feedback and suggestion on EmployeEz platform.',
            'current_team_id' => 1,
            'contact_number' => '0188888888',
            'url' => 'https://www.laikaiyong.github.io',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);
    }
}
