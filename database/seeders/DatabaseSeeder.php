<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            TeamSeeder::class,
            AdminSeeder::class,
            SeekerSeeder::class,
            CompanySeeder::class,
            JobSeeder::class
        ]);
    }
}
