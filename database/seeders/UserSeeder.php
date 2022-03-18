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
            'name' => 'Lisa Lorinna',
            'title' => 'Junior Administrator',
            'email' => 'lisalorinna@admin.employeez.com',
            'password' => Hash::make('lisalorinna'),
            'online' => false,
            'department' => 'Operations and Admin',
            'description' => 'Hello there! My name is Lisa Lorinna, I am currently working as a junior admin in EmployeEz. If you have any enquiries about the system, feel free to reach out to me! I will assist you on your journey of getting your dream job.',
            'current_team_id' => 1,
            'contact_number' => '01344658756',
            'reporter_id' => 4,
            'url' => 'https://www.lisalorinna.com',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Setel',
            'type' => 'Technology',
            'email' => 'setel@setel.com',
            'password' => Hash::make('seteltechnology'),
            'online' => false,
            'description' => 'Minimise contact and maximise convenience with Setel. For hassle-free refuelling, pay for fuel from your vehicle and Kedai Mesra purchases at over 1,000 PETRONAS stations. Now with Deliver2Me - a store-to-vehicle delivery service at over 270 PETRONAS stations in the Klang Valley - and Pay with Setel, a QR pay service for Setel users at selected automotive and F&B outlets.',
            'current_team_id' => 2,
            'latitude' => 3.161110972766931, 
            'longitude' => 101.61472817802844,
            'url' => 'https://www.setel.com/',
            'cover_image_url' => 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
            'address' => 'Level 17, M-05, Nucleus Tower, Mutiara Damansara, 47800 Petaling Jaya, Selangor',
            'city' => 'Petaling Jaya',
            'state' => 'Selangor',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Louisa Allen',
            'title' => 'Software Engineering Student',
            'description' => 'Hello there! My name is Louisa Marie Allen. I\'m a Software Engineering student studying at Asia Pacific University with experience working within the intricacies of people management for several student organisations such as the International Council of Malaysian Scholars and Young Malaysian Engineers. Outside of work, I enjoy hiking with friends and family.',
            'email' => 'louisaallen@gmail.com',
            'contact_number' => '0123248574',
            'url' => 'https://www.louisaallen.com',
            'password' => Hash::make('louisaallen'),
            'online' => false,
            'current_team_id' => 3,
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);
    }
}
