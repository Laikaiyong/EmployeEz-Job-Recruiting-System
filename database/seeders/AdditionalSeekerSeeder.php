<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdditionalSeekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Michelle Jewett',
            'title' => 'Business and Marketing Student',
            'description' => 'Recent Bachelor of Marketing & Business Management
            graduate seeking an internship that will allow for learning the
            ins and outs of the advertising field and provide an opportunity
            to add value to ABC Marketing by applying theoretical
            knowledge into practice. Previous informal experience with
            social media channel set up and blogging has been gained
            during university as part of the Campus Newspaper team.',
            'email' => 'michellejewett@outlook.com',
            'password' => Hash::make('michellejewett'),
            'online' => false,
            'current_team_id' => 3,
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Mandy Campbell',
            'title' => 'Bootcamp Instructor',
            'description' => 'Passionate, entry-level Bootcamp Instructor with experience in freelancing assisting clients to reach tough fitness goals.
            Assisted one client to decrease chronic A1C blood sugar levels from 230 mg/dl to 110 mg/dl. Assisted another client
            in designing a routine to decrease body mass into healthy ranges over eight months.',
            'email' => 'mandycampbell@outlook.com',
            'password' => Hash::make('mandycampbell'),
            'online' => false,
            'current_team_id' => 3,
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);
    }
}
