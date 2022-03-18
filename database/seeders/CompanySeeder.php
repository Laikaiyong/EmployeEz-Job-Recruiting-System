<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Maybank',
            'type' => 'Finance',
            'email' => 'maybank@maybank.com',
            'password' => Hash::make('maybank'),
            'online' => false,
            'description' => 'Malayan Banking Berhad (doing business as Maybank) is a Malaysian universal bank, with key operating "home markets" of Malaysia, Singapore, and Indonesia. According to the 2020 Brand Finance report, Maybank is Malaysia\'s most valuable bank brand, the fourth top brand in amongst the Asean countries, and ranked 70th in the world\'s most valuable bank brands',
            'current_team_id' => 2,
            'latitude' => 3.1473160483221343,  
            'longitude' => 101.699535197427,
            'cover_image_url' => 'https://malaysiaboleh.com/wp-content/uploads/2018/07/banner-maybank.jpg',
            'url' => 'https://www.maybank.com/en/index.page',
            'address' => 'Maybank Tower 100, Jalan Tun Perak Bukit Bintang 50050 Kuala Lumpur Federal Territory of Kuala Lumpur',
            'city' => 'Bukit Bintang',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Intel Corporation',
            'type' => 'Technology',
            'email' => 'intel@intel.com',
            'password' => Hash::make('intel'),
            'online' => false,
            'description' => 'At Intel, we\'re setting a new standard for corporate responsibility, enacting meaningful change throughout our entire global network. From advancing climate solutions to diversity and inclusion initiatives, we\'re uniting our partners, our customers, and our global technology portfolio to achieve something wonderful.',
            'current_team_id' => 2,
            'latitude' => 3.1441669526987495, 
            'longitude' => 101.70995373290141,
            'cover_image_url' => 'https://www.livemint.com/rf/Image-621x414/LiveMint/Period1/2013/02/14/Photos/Intel--621x414.jpg',
            'url' => 'https://www.intel.com/content/www/us/en/homepage.html',
            'address' => 'Plaza Low Yat, 7, Jalan Bintang, Bukit Bintang, 55100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
            'city' => 'Bukit Bintang',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Sunway',
            'type' => 'Business',
            'email' => 'sunway@sunway.com',
            'password' => Hash::make('sunway'),
            'online' => false,
            'description' => 'The very birth of Sunway Group in 1974 was founded on the concept of sustainable development. It began with the development of Sunway City Kuala Lumpur, a tin-mining wasteland to an integrated smart and sustainable township. Today, we are one of Southeast Asia\'s leading conglomerates with core interests in real estate, construction, education, healthcare, retail, and hospitality. We are committed to advancing the United Nations Sustainable Development Goals and continues to align them with our Environmental, Social, and Governance (ESG) targets as part of our corporate strategy and social responsibility towards driving the group\'s long-term success and deepening our commitment to nation-building.',
            'current_team_id' => 2,
            'latitude' => 3.071758703838105, 
            'longitude' => 101.60532313047392,
            'cover_image_url' => 'https://image-tc.galaxy.tf/wijpeg-1lf3mhli9cwh2v4y6ox2nbgx0/file.jpg',
            'url' => 'https://www.sunway.com.my/',
            'address' => '3, Jalan PJS 11/11, Bandar Sunway, 47500 Subang Jaya, Selangor',
            'city' => 'Subang Jaya',
            'state' => 'Selangor',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Shopee',
            'type' => 'Technology',
            'email' => 'shopee@shopee.com',
            'password' => Hash::make('shopee'),
            'online' => false,
            'description' => 'Shopee Malaysia is a leading e-commerce platform that offers C2C as well as B2B services. It is part of SEA Group (previously known as Garena), and is one of the regional branches of Shopee, which is headquartered in Singapore. Shopee Malaysia offers a variety of items for purchase to customers who want the convenience of getting everything at their doorstep with just a few clicks.',
            'current_team_id' => 2,
            'latitude' => 3.116551981562237, 
            'longitude' => 101.67560871163383,
            'cover_image_url' => 'https://miro.medium.com/max/1400/1*pPSgLTHG7tIelAzZK5-ENg.jpeg',
            'url' => 'https://shopee.com.my/',
            'address' => 'Suite G-302 Ground Floor, Menara Southpoint, Medan Syed Putra Selatan, Mid Valley City, 59200 Wilayah Persekutuan, Wilayah Persekutuan Kuala Lumpur, Malaysia',
            'city' => 'Mid Valley',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Petronas',
            'type' => 'Engineering',
            'email' => 'petronas@petronas.com',
            'password' => Hash::make('petronas'),
            'online' => false,
            'description' => 'Petroliam Nasional Berhad (National Petroleum Limited), commonly known as Petronas, is a Malaysian oil and gas company. Established in 1974 and wholly owned by the Government of Malaysia, the corporation is vested with the entire oil and gas resources in Malaysia and is entrusted with the responsibility of developing and adding value to these resources. Petronas is ranked among Fortune Global 500\'s largest corporations in the world. In the 2017 Forbes Global 2000, Petronas Gas was ranked as the 1881st largest public company in the world',
            'current_team_id' => 2,
            'latitude' => 3.116551981562237, 
            'longitude' => 101.67560871163383,
            'cover_image_url' => 'https://assets.theedgemarkets.com/Petronas_TEM1361_20210316192047_theedgemarkets_2.jpg',
            'url' => 'https://www.petronas.com/',
            'address' => 'Petronas Twin Towers, Tower 1, Kuala Lumpur City Centre, 50088 Kuala Lumpur, Federal Territory of Kuala Lumpur',
            'city' => 'City Centre',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);
    }
}
