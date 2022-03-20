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

        DB::table('job_posts')->insert([
            'title' => 'Internship 2022', 
            'description' => 'The Maybank Internship Programme aims to provide opportunities to talented undergraduates to gain hands-on working experience through on-the-job attachments with the largest financial services provider in Malaysia. The Maybank Internship Program is also a platform for Maybank to evaluate and screen potential employees for its talent pipelines as Interns having gone through internship with Maybank assimilates faster to their new roles and have shorter learning curves than external hires.',
            'requirement' => 'Students seeking opportunities to stimulate their interests and provide real-world experiences should consider an opportunity for internship with Maybank. Bachelor’s Degree or Diploma students in any field that will undergo an internship Strong command of written and spoken English Good interpersonal skills and sociable person Possess a strong analytical skills Forward – thinking, results – driven and enthusiastic personality',
            'type' => 'Internship',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Beginner",
            'user_id' => 6,
            'company' => 'Maybank',
            'industry' => 'Finance',
            'beneficial_skills' => 'Microsoft-Office-Skills',
            'cover_image_url' => 'https://www.maybank.com/iwov-resources/corporate_new/img/common/key-business-entities-large.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-05-20')),
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Apprenticeship', 
            'description' => 'A holistic learning experience with customised on-the-job rotations.
            Enhancing leadership skills among others, via involvement in group-wide special projects.
            International Assignments to immerse Global Maybank Apprentices in global network operations.
            Experiential learning through CR initiatives, project management and presentation to top management.
            Face-to-face development interventions where a dedicated coach and mentor is assigned to guide Global Maybank Apprentices throughout their journey.',
            'requirement' => 'Minimum qualification of Bachelor’s Degree
            Not more than 2 years of working experience
            Has held leadership positions in extra-curricular activities
            Strong communication and analytical skills',
            'type' => 'Contract',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Beginner",
            'user_id' => 6,
            'company' => 'Maybank',
            'industry' => 'Finance',
            'beneficial_skills' => 'Positive Behaviour',
            'cover_image_url' => 'https://www.maybank.com/iwov-resources/corporate_new/img/common/key-business-entities-large.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-09')),
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Maybank ITDP', 
            'description' => 'ITDP is a development program aimed best graduates to provide opportunities and banking careers acceleration, especially in Information Technology (IT) in Maybank. 

            It\'s a fast track program to develop Talented and Youth Enthusiasts like you to start a career as IT Professional.  
            
            This program applies comprehensive development principles which combine classroom, field learning, On the Job Training, as well as special guidance and mentoring by mentors from selected Senior Managers at Maybank.',
            'requirement' => 'Minimum Bachelor Degree from IT, Information System or Computer Science from leading universities (Minimum GPA of 3, scale 4)
            Fresh Graduates or max 2 years working experience 
            Smart, agile, eager to learn, high motivation, self driven',
            'type' => 'Internship',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Beginner",
            'user_id' => 6,
            'company' => 'Maybank',
            'industry' => 'Technology',
            'beneficial_skills' => 'Passionate attitude
            ',
            'cover_image_url' => 'https://www.maybank.com/iwov-resources/corporate_new/img/common/key-business-entities-large.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-09')),
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Consultant', 
            'description' => 'Identify sales and new business opportunities to secure new customers.
            Continuously engage with existing customers and maintain a high level of sales achievement.
            Develop and follow up on all sales lead to achieve sales target/quotas, this include presenting ideas to potential clients, negotiating, listening to their wishes and concerns and closing deals.
            Advertise, attend to inquiries or complaints, recommend solutions and provide support to customers as and when required.
            Gain a clear understanding of customers’ businesses and requirements to identify best market opportunities and trends
            Keep abreast on the market trends, opportunities and threats, including competitions, and contribute positively through relevant initiatives e.g. marketing campaigns etc.
            Collate data & produce reports for tracking and review purposes as and when required.
            Perform any other ad-hoc tasks / duties as and when required.',
            'requirement' => 'Candidate must possess at least a Diploma in any field.
            Minimum 1-2 years of sales experience. Candidate with working experience in remittance/ banking/ shipping industry will be prioritized.
            Required language(s): English, Bahasa Malaysia. Mandarin will be an added advantage.
            Possess own transport, willing to travel and able to work outstation occasionally.
            Proficient in Microsoft Office tools such as Word, Excel and PowerPoint.
            Able to multi-task and work under pressure with minimum supervision
            Results oriented, resourceful and proactive with a strong urgency to achieve desired results.
            Team player with excellent interpersonal and communication skills.',
            'type' => 'Full-time',
            'location' => 'Selangor',
            'experience_level' => "Beginner",
            'user_id' => 6,
            'company' => 'Sunway',
            'industry' => 'Business',
            'beneficial_skills' => '2 years work experience
            ',
            'cover_image_url' => 'https://www.propertyhunter.com.my/transfer/181027143537sunway.png',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-30')),
            'created_at' => date(format: 'Y-m-d H:i:s'),
            'updated_at' => date(format: 'Y-m-d H:i:s')
        ]);
    }
}
