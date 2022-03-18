<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_posts')->insert([
            'title' => 'Software Engineer', 
            'description' => 'Coordinate with the Technical Director on current programming tasks. Collaborate with other programmers to design and implement features. Quickly produce well-organized, optimized, and documented source code. Create and document software tools required by artists or other developers.
            Debug existing source code and polish feature sets. Contribute to technical design documentation. Work independently when required.
            Continuously learn and improve skills. Attention to detail is essential and all tasks must be carried out to the highest standard.',
            'requirement' => 'Software development degree or four years of professional experience. Proficiency with the C#, C++, Objective-C, or JavaScript programming languages. Excellent debugging and problem-solving skills. English language fluency.',
            'type' => 'Full-time',
            'location' => 'Kuala Lumpur',
            'experience_level' => 'Intermediate',
            'user_id' => 2,
            'company' => 'Setel',
            'industry' => 'Technology',
            'beneficial_skills' => 'Unity or Unreal game engine experience. Web development skills (HTML/CSS, JavaScript)',
            'cover_image_url' => 'https://play-lh.googleusercontent.com/wA0BQ3N59FIceoUjBi16016i-11sRlsHpLFgFTh2RmLFfmjcwFlEIysjdNlW1VXmBVfl',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-05-20')),
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Sales Manager', 
            'description' => 'As a manager, set priorities for the team, get results across boundaries, ensure an inclusive work environment, develop employees, and manage performance. This is a commissioned sales position: Responsible for working with customers on joint sales and marketing programs which includes creative, imaginative and proactive marketing or business development programs. Supports the major customer sales force and negotiates with many levels of customer management. Represents Intel in third party relationships. Requires extensive theoretical, practical, and industry knowledge. Applies and/or develops highly advanced technologies, principles, and concepts.',
            'requirement' => 'A graduate in Business or related fields or equivalent degree Full proficiency in English and business Japanese language Minimum of 3 years of people manager experience in diverse environment. Minimum of 5 years of sales experience in influencing and managing Japanese customers at senior management level. Proven track record in Sales, Strategic account management, Partner and/or End-Customer sales experience Strategic thinking, entrepreneurial skill, thinking out of the box, excellent integration skills across teams and the capability to inspire internal and external stakeholders Professional business acumen in datacentric technologies (Big Data/Analytics/AI/IoT/Cloud/Networking-Comms etc.) Comfort with risk-taking and disruptive approaches to drive Business Units success Strong business and Analytic acumen and the ability to turn research into strategy is a must-have Hunger to learn from success and failures',
            'type' => 'Full-time',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Advanced",
            'user_id' => 2,
            'company' => 'Intel Corporation',
            'industry' => 'Marketing',
            'beneficial_skills' => 'SEO Optimization Skill',
            'cover_image_url' => 'https://d1io3yog0oux5.cloudfront.net/_776c9cc070d4cab6e8157b9f1dc8702c/intel/db/878/6995/social_image_resized.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-05-20')),
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);
    }
}
