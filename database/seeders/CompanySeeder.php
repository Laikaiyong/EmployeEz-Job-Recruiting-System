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
            'name' => 'BASF SE',
            'type' => 'Chemical',
            'email' => 'basf@basf.com',
            'password' => Hash::make('basf'),
            'online' => false,
            'description' => 'BASF SE is a German multinational chemical company and the largest chemical producer in the world. The BASF Group comprises subsidiaries and joint ventures in more than 80 countries and operates six integrated production sites and 390 other production sites in Europe, Asia, Australia, the Americas and Africa.',
            'current_team_id' => 2,
            'latitude' => 3.1069832885075575, 
            'longitude' => 101.5478349717752,
            'cover_image_url' => 'https://rsb.org/wp-content/uploads/2018/03/BASF-LOGO.jpg',
            'url' => 'https://www.basf.com/my/en.html',
            'address' => '2, Jalan U8/87, Bukit Jelutong Business And Technology Centre, 40706 Shah Alam, Seksyen U8',
            'city' => 'Shah Alam',
            'state' => 'Selangor',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'MoneyLion',
            'type' => 'Finance',
            'email' => 'moneylion@moneylion.com',
            'password' => Hash::make('moneylion'),
            'online' => false,
            'description' => 'MoneyLion was founded in 2013 with the belief that we all get ahead when nobody gets left behind. We are here for the millions of Americans who’ve long been ignored — or even taken advantage of — by traditional banks.

            We are rewiring the American banking system to make money more approachable and to give consumers a more accessible and sustainable path to their goals.
            
            Welcome to MoneyLion, where the 99% can feel 100% about their future.',
            'current_team_id' => 2,
            'latitude' => 3.136528476585656, 
            'longitude' => 101.68724119999997,
            'cover_image_url' => 'https://securecdn.pymnts.com/wp-content/uploads/2020/02/moneylion.png',
            'url' => 'https://www.moneylion.com/',
            'address' => 'Unit No 27-16, Menara Q Sentral, Jalan Stesen Sentral 2, Tijani 2, 50470 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
            'city' => 'Q Central',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Infront Consulting',
            'type' => 'Technology',
            'email' => 'infront@infront.com',
            'password' => Hash::make('infront'),
            'online' => false,
            'description' => 'Infront Consulting Asia Pacific is a pioneer regional specialist in Cloud and Datacenter Consulting. We are in the business of improving the lives of organizations through the power of technology. We consult, implement and manage medium and Enterprise organizations to help them through Digital Transformation.',
            'current_team_id' => 2,
            'latitude' => 3.126833213495819, 
            'longitude' => 101.64277196830923,
            'cover_image_url' => 'https://resources.wobbjobs.com/resized/uploads/jobs-malaysia/company_images/5388/jobs-malaysia-infront-consulting-15093695_show.jpg',
            'url' => 'https://infrontconsulting.asia/',
            'address' => 'Address: Unit 10-02 Block B, Phileo Damansara 1, 9, Jalan 16/11, 46350 Petaling Jaya, Selangor',
            'city' => 'Petaling Jaya',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Google',
            'type' => 'Technology',
            'email' => 'google@google.com',
            'password' => Hash::make('google'),
            'online' => false,
            'description' => 'Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include a search engine, online advertising technologies, cloud computing, software, and hardware.',
            'current_team_id' => 2,
            'latitude' => 3.1334452105139476,  
            'longitude' => 101.68485191063894,
            'cover_image_url' => 'https://cdn.vox-cdn.com/thumbor/Pkmq1nm3skO0-j693JTMd7RL0Zk=/0x0:2012x1341/1200x800/filters:focal(0x0:2012x1341)/cdn.vox-cdn.com/uploads/chorus_image/image/47070706/google2.0.0.jpg',
            'url' => 'https://www.google.com/',
            'address' => 'Axiata Tower, Level 20, 9, Jalan Stesen Sentral 5, Kuala Lumpur Sentral, 50470 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
            'city' => 'Axiata Tower',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Axiata',
            'type' => 'Technology',
            'email' => 'axiata@axiata.com',
            'password' => Hash::make('axiata'),
            'online' => false,
            'description' => 'Axiata Group Berhad, commonly known as Axiata, formerly known as TM International Berhad, is a Malaysian multinational telecommunications conglomerate with extensive operations in Asia. It is one of the largest wireless carriers in the country.',
            'current_team_id' => 2,
            'latitude' => 3.1337770093109536,
            'longitude' => 101.68426495265525,
            'cover_image_url' => 'https://www.brandinginasia.com/wp-content/uploads/2021/08/Axiata-Branding-in-Asia.jpg',
            'url' => 'https://www.axiata.com/',
            'address' => 'Level 5, Axiata Centre 9, Jalan Stesen Sentral 5, Kuala Lumpur Sentral,, 50470, Kuala Lumpur, 50470 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
            'city' => 'Axiata Centre',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Airasia',
            'type' => 'Service',
            'email' => 'airasia@airasia.com',
            'password' => Hash::make('airasia'),
            'online' => false,
            'description' => 'AirAsia is a leading travel and financial platform company in Asia Pacific, providing air transport, travel and lifestyle products, as well as financial services. AirAsia started as a low-cost carrier with operations in Malaysia, Indonesia, Thailand, the Philippines and India, and has carried more than 600 million guests to over 160 destinations in its network across Asia, Australia, the Middle East and the US. ',
            'current_team_id' => 2,
            'latitude' => 3.1340838683272114, 
            'longitude' => 101.68591445259491,
            'cover_image_url' => 'https://www.lcct.com.my/images/promotions/2019-05-may/airasia-promotions.jpg',
            'url' => 'https://www.airasia.com/en/gb',
            'address' => '2, 4, Jalan Stesen Sentral 5, Kuala Lumpur Sentral, 50470 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
            'city' => 'Stesen Sentral',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Dell',
            'type' => 'Technology',
            'email' => 'dell@dell.com',
            'password' => Hash::make('dell'),
            'online' => false,
            'description' => 'Dell is an American company that develops, sells, repairs, and supports computers and related products and services, and is owned by its parent company of Dell Technologies',
            'current_team_id' => 2,
            'latitude' => 2.910287028474017, 
            'longitude' => 101.65719843585059,
            'cover_image_url' => 'https://tbcdn.talentbrew.com/company/375/v4_0/img/logos/dell-share-logo.jpg',
            'url' => 'https://www.dell.com/en-my',
            'address' => '2900, Persiaran Apec, Cyberjaya, 63000 Cyberjaya, Selangor',
            'city' => 'Cyberjaya',
            'state' => 'Selangor',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Texas',
            'type' => 'F&B',
            'email' => 'texas@texas.com',
            'password' => Hash::make('texas'),
            'online' => false,
            'description' => 'Texas Chicken Malaysia restaurant featuring Original and Spicy Fried Chicken, Honey-Butter Biscuits and other mouth watering sides and desserts.',
            'current_team_id' => 2,
            'latitude' => 3.0936258165241286, 
            'longitude' => 101.63080533674967,
            'cover_image_url' => 'http://www.restaurantnews.com/wp-content/uploads/2015/10/Texas-Chicken-Opens-Two-New-Restaurants-in-Bulgaria.jpg',
            'url' => 'https://www.texaschickenmalaysia.com/',
            'address' => '2900, Persiaran Apec, Cyberjaya, 63000 Cyberjaya, Selangor',
            'city' => 'Cyberjaya',
            'state' => 'Selangor',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Tealive',
            'type' => 'F&B',
            'email' => 'tealive@tealive.com',
            'password' => Hash::make('tealive'),
            'online' => false,
            'description' => 'Tealive is our name. And tea is our game. We are a team of passionate tea people. And we\'re here to brew new life to tea.',
            'current_team_id' => 2,
            'latitude' => 3.1607123834187276, 
            'longitude' => 101.57462922674276,
            'cover_image_url' => 'https://assets.theedgemarkets.com/tealive.png?Mf5s7mTw1zZvizqUPqg2XGauHRJlFZRe',
            'url' => 'https://www.tealive.com.my/',
            'address' => 'Jalan Cecawi 6/18, Kota Damansara, 47810 Petaling Jaya, Selangor',
            'city' => 'Petaling Jaya',
            'state' => 'Selangor',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'CIMB',
            'type' => 'Finance',
            'email' => 'cimb@cimb.com',
            'password' => Hash::make('cimb'),
            'online' => false,
            'description' => 'CIMB Group is a leading ASEAN universal bank and one of the region\'s foremost corporate advisors. It is also a world leader in Islamic finance.',
            'current_team_id' => 2,
            'latitude' => 3.068464118940552, 
            'longitude' => 101.69286927874234,
            'cover_image_url' => 'https://www.unepfi.org/wordpress/wp-content/uploads/2018/10/CIMB-logo.png',
            'url' => 'https://www.cimb.com.my/en/personal/home.html',
            'address' => '28, Jalan Radin Tengah, Taman Seri Petaling, 57000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
            'city' => 'Seri Petaling',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Acer',
            'type' => 'Technology',
            'email' => 'acer@acer.com',
            'password' => Hash::make('acer'),
            'online' => false,
            'description' => 'Acer Inc. is a Taiwanese multinational hardware and electronics corporation specializing in advanced electronics technology, headquartered in Xizhi, New Taipei City.',
            'current_team_id' => 2,
            'latitude' => 3.046149097247154, 
            'longitude' => 101.56567253170994,
            'cover_image_url' => 'https://wallpaperaccess.com/full/6464636.jpg',
            'url' => 'https://www.acer.com/ac/en/MY/content/home',
            'address' => '6, Jalan TP 6, Taman Perindustrian Uep, 47600 Subang Jaya, Selangor',
            'city' => 'Subang Jaya',
            'state' => 'Selangor',
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

        DB::table('users')->insert([
            'name' => 'Fluor',
            'type' => 'Engineering',
            'email' => 'fluor@fluor.com',
            'password' => Hash::make('fluor'),
            'online' => false,
            'description' => 'Fluor provides professional and technical solutions to deliver safe, well‑executed, capital‑efficient engineering, procurement and construction (EPC) projects to clients around the world.',
            'current_team_id' => 2,
            'latitude' => 3.116551981562237, 
            'longitude' => 101.67560871163383,
            'cover_image_url' => 'https://www.international-construction.com/Images/1260x628/index-20210111-172027-Fluorpic.jpg',
            'url' => 'https://www.fluor.com/',
            'address' => 'Suite 20-06, Level 20, Integra Tower, The Intermark, 348, Jalan Tun Razak, 50400 Kuala Lumpur, 50400 Kuala Lumpur',
            'city' => 'Jalan Tun Razak',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Schlumberger',
            'type' => 'Engineering',
            'email' => 'schlumberger@schlumberger.com',
            'password' => Hash::make('schlumberger'),
            'online' => false,
            'description' => 'Schlumberger Limited is an oilfield services company. Schlumberger employees represent more than 140 nationalities working in more than 120 countries. Schlumberger has four principal executive offices located in Paris, Houston, London, and The Hague. Schlumberger is the world’s largest offshore drilling company.',
            'current_team_id' => 2,
            'latitude' => 3.1469048625749583, 
            'longitude' => 101.6158255024865,
            'cover_image_url' => 'https://mms.businesswire.com/media/20210122005175/en/70213/22/bluelogo.jpg',
            'url' => 'https://www.slb.com/',
            'address' => 'Level 6 & 7, 1, First Avenue, Bandar Utama, 47800 Petaling Jaya, Selangor',
            'city' => 'Petaling Jaya',
            'state' => 'Selangor',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'EY',
            'type' => 'Finance',
            'email' => 'ey@ey.com',
            'password' => Hash::make('ey'),
            'online' => false,
            'description' => 'At EY, our purpose is Building a better working world. The insights and quality services we provide help build trust and confidence in the capital markets and in economies the world over. We develop outstanding leaders who team to deliver on our promises to all our stakeholders. In so doing, we play a critical role in building a better working world for our people, for our clients and for our communities.',
            'current_team_id' => 2,
            'latitude' => 3.1470700464864017, 
            'longitude' => 101.66239580171936,
            'cover_image_url' => 'https://media.thestar.com.my/Prod/F57858C3-A161-4033-A73F-08FB0B2BF98C',
            'url' => 'https://www.ey.com/en_my',
            'address' => 'Level 23A Menara Milenium, Wilayah Persekutuan, Malaysia, Jalan Damanlela, Damansara Town Centre, 50490 Kuala Lumpur, Federal Territory of Kuala Lumpur',
            'city' => 'Damansara',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Hilti',
            'type' => 'Manufacturer',
            'email' => 'hilti@hilti.com',
            'password' => Hash::make('hilti'),
            'online' => false,
            'description' => 'Hilti Corporation is a Liechtenstein multinational company that develops, manufactures, and markets products for the construction, building maintenance, energy and manufacturing industries, mainly to the professional end-user.',
            'current_team_id' => 2,
            'latitude' => 3.1143621367034777, 
            'longitude' => 101.57445566841893,
            'cover_image_url' => 'https://www.hilti.com.my/content/hilti/A2/MY/en/company/corporate-information/strategy/core-purpose-and-values/jcr:content/childSections/childsection/teaserset/teaser1.img.1920.medium.jpg/1533278247196.jpg',
            'url' => 'https://www.hilti.com.my/',
            'address' => 'Tower 3, Level 8, Iskandar Wing, Brunsfield Oasis, Oasis Square, 2, Jalan PJU 1A/7, Taipan 2 Damansara, 47301 Petaling Jaya, Selangor',
            'city' => 'Petaling Jaya',
            'state' => 'Selangor',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Avanade',
            'type' => 'Technology',
            'email' => 'avanade@avanade.com',
            'password' => Hash::make('avanade'),
            'online' => false,
            'description' => 'Avanade was founded as a joint venture between Microsoft Corporation and Accenture LLP. Our solutions are built on an unrivaled combination of insight, innovation and technical knowledge, backed by proven tools, methodologies and practices.',
            'current_team_id' => 2,
            'latitude' => 3.141863386679697, 
            'longitude' => 101.71867611074748,
            'cover_image_url' => 'https://www.avanade.com/-/media/images/blogs/inside-avanade/evolving-avanade-brand.jpg?la=en&ver=2',
            'url' => 'https://www.avanade.com/en',
            'address' => 'Federal Territory of Kuala Lumpur, Kuala Lumpur, Tun Razak Exchange Lingkaran TRX, Suite 29.07 Level 29, Menara Exchange',
            'city' => 'Menara Exchange',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Accenture',
            'type' => 'Technology',
            'email' => 'accenture@accenture.com',
            'password' => Hash::make('accenture'),
            'online' => false,
            'description' => 'Accenture plc is an Ireland-based multinational professional services company that specialises in information technology services and consulting. A Fortune Global 500 company, it reported revenues of $50.53 billion in 2021.',
            'current_team_id' => 2,
            'latitude' => 3.1106836845446533, 
            'longitude' => 101.66556343958632,
            'cover_image_url' => 'https://www.savethechildren.org/content/dam/usa/images/donors/partners/logos/accenture-rec.png/_jcr_content/renditions/original',
            'url' => 'https://www.accenture.com/my-en',
            'address' => 'Level 20 & 21, Vertical Corporate Tower B Avenue 10 The Vertical Bangsar South City, 8, Jalan Kerinchi, 59200 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
            'city' => 'Bangsar South',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Zalora',
            'type' => 'Fashion',
            'email' => 'zalora@zalora.com',
            'password' => Hash::make('zalora'),
            'online' => false,
            'description' => 'Zalora Group is an e-retailer founded by Kinnevik AB and Rocket Internet with operations in several South East Asian countries.',
            'current_team_id' => 2,
            'latitude' => 3.124526458676638, 
            'longitude' => 101.7110572026869,
            'cover_image_url' => 'https://d23xypyp2dkdqm.cloudfront.net/wp-content/uploads/2019/11/01074159/Zalora-case-study-image.jpg',
            'url' => 'https://www.zalora.com.my/',
            'address' => 'A-5-1 Southgate Commercial Centre, Jalan Dua, Chan Sow Lin, 55200 Kuala Lumpur',
            'city' => 'Chan Sow Lin',
            'state' => 'Kuala Lumpur',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);
    }
}
