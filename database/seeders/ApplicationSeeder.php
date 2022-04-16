<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->insert([
            'resume' => 'https://196034-584727-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2022/02/Lisbon-Resume-Template-Creative.pdf',
            'jobpostid' => 12,
            'jobpost_type' => 'Internship',
            'jobpost_title' => 'Young Banker',
            'jobpost_cover' => 'https://www.maybank.com/iwov-resources/corporate_new/img/common/key-business-entities-large.jpg',
            'jobpost_location' => 'Kuala Lumpur',
            'jobpost_industry' => 'Finance',
            'company_id' => 6,
            'company_name' => 'Maybank',
            'user_id' => 29,
            'user_name' => 'Michelle Jewett',
            'additional_comments' => "I'm passionate in learnig, I hope to join the wonderful team",
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('applications')->insert([
            'resume' => 'https://196034-584727-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2022/02/Lisbon-Resume-Template-Creative.pdf',
            'jobpostid' => 17,
            'jobpost_type' => 'Internship',
            'jobpost_title' => 'Technician',
            'jobpost_cover' => 'https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/Intel_Xeon_Roadmap_Ice_Lake_Sapphire_Rapids_Granite_Rapids_5_2060x1159.png',
            'jobpost_location' => 'Kuala Lumpur',
            'jobpost_industry' => 'Marketing',
            'company_id' => 7,
            'company_name' => 'Intel Corporation',
            'user_id' => 29,
            'user_name' => 'Michelle Jewett',
            'additional_comments' => "I'm passionate in learnig, I hope to join the wonderful team",
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('applications')->insert([
            'resume' => 'https://196034-584727-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2022/02/London-Resume-Template-Professional.pdf',
            'jobpostid' => 12,
            'jobpost_type' => 'Internship',
            'jobpost_title' => 'Young Banker',
            'jobpost_cover' => 'https://www.maybank.com/iwov-resources/corporate_new/img/common/key-business-entities-large.jpg',
            'jobpost_location' => 'Kuala Lumpur',
            'jobpost_industry' => 'Finance',
            'company_id' => 6,
            'company_name' => 'Maybank',
            'user_id' => 30,
            'user_name' => 'Mandy Campbell',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('applications')->insert([
            'resume' => 'https://196034-584727-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2022/02/London-Resume-Template-Professional.pdf',
            'jobpostid' => 8,
            'jobpost_type' => 'Full-time',
            'jobpost_title' => 'Cybersecurity Analyst',
            'jobpost_cover' => 'https://securecdn.pymnts.com/wp-content/uploads/2020/02/moneylion.png',
            'jobpost_location' => 'Kuala Lumpur',
            'jobpost_industry' => 'Technology',
            'company_id' => 11,
            'company_name' => 'MoneyLion',
            'user_id' => 30,
            'user_name' => 'Mandy Campbell',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);
        
        DB::table('applications')->insert([
            'resume' => 'https://196034-584727-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2022/02/London-Resume-Template-Professional.pdf',
            'jobpostid' => 9,
            'jobpost_type' => 'Internship',
            'jobpost_title' => 'Geoscience Engineer',
            'jobpost_cover' => 'https://mms.businesswire.com/media/20210122005175/en/70213/22/bluelogo.jpg',
            'jobpost_location' => 'Kuala Lumpur',
            'jobpost_industry' => 'Engineering',
            'company_id' => 6,
            'company_name' => 'Maybank',
            'user_id' => 30,
            'user_name' => 'Mandy Campbell',
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);
    }
}
