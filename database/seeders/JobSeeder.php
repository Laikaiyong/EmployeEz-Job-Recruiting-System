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
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-02-20')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-02-20'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Sales Manager', 
            'description' => 'As a manager, set priorities for the team, get results across boundaries, ensure an inclusive work environment, develop employees, and manage performance. This is a commissioned sales position: Responsible for working with customers on joint sales and marketing programs which includes creative, imaginative and proactive marketing or business development programs. Supports the major customer sales force and negotiates with many levels of customer management. Represents Intel in third party relationships. Requires extensive theoretical, practical, and industry knowledge. Applies and/or develops highly advanced technologies, principles, and concepts.',
            'requirement' => 'A graduate in Business or related fields or equivalent degree Full proficiency in English and business Japanese language Minimum of 3 years of people manager experience in diverse environment. Minimum of 5 years of sales experience in influencing and managing Japanese customers at senior management level. Proven track record in Sales, Strategic account management, Partner and/or End-Customer sales experience Strategic thinking, entrepreneurial skill, thinking out of the box, excellent integration skills across teams and the capability to inspire internal and external stakeholders Professional business acumen in datacentric technologies (Big Data/Analytics/AI/IoT/Cloud/Networking-Comms etc.) Comfort with risk-taking and disruptive approaches to drive Business Units success Strong business and Analytic acumen and the ability to turn research into strategy is a must-have Hunger to learn from success and failures',
            'type' => 'Full-time',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Advanced",
            'user_id' => 7,
            'company' => 'Intel Corporation',
            'industry' => 'Marketing',
            'beneficial_skills' => 'SEO Optimization Skill',
            'cover_image_url' => 'https://d1io3yog0oux5.cloudfront.net/_776c9cc070d4cab6e8157b9f1dc8702c/intel/db/878/6995/social_image_resized.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-05-20')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
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
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
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
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-16')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-16'))
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
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-16')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-16'))
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
            'user_id' => 8,
            'company' => 'Sunway',
            'industry' => 'Business',
            'beneficial_skills' => '2 years work experience
            ',
            'cover_image_url' => 'https://www.propertyhunter.com.my/transfer/181027143537sunway.png',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-30')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'AI Product Manager', 
            'description' => 'An AI product manager is responsible for developing and actively managing the product road map for data driven AI products being developed at MoneyLion. The role involves working with stakeholders from multiple teams to define the problems or consumer needs that we can solve using AI. This role will also drive the AI products strategy roadmap and actively define new opportunities and areas where AI can be applied.',
            'requirement' => '2+ years experience in direct product management / development owning a directly relevant product or one related to machine learning or AI.
            Entrepreneurial and experienced in working with resource constrained teams to deliver outstanding successes.
            Strong background understanding of AI tools and techniques.
            Exposure to product management in Fintech domain (desired).
            Demonstrated commitment to learning about AI through your own initiatives through courses, books, or side projects.
            Basic statistics skills acquired through academic study (i.e. math, computer science, engineering, economics, physics) or comparable work experience.
            Comfortable with working under ambiguity.
            Ability to do exploratory research and data analysis to help define problems solutions.
            Keen understanding of data analysis and model development life cycle.',
            'type' => 'Full-time',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Intermediate",
            'user_id' => 11,
            'company' => 'MoneyLion',
            'industry' => 'Technology',
            'beneficial_skills' => 'Communicator: You possess strong communication skills and enjoy working with diverse stakeholders.
            Team-Oriented: You can embrace the ideas of others (even if they conflict with your own) for the sake of the company and client.
            Driven: You are a driven team player, collaborator, and relationship builder whose infectious can-do attitude inspires others and encourages great performance in a fast-moving environment.
            Entrepreneurial: You thrive in a fast-paced, changing environment and you’re excited by the chance to play a large role.
            Self-motivated: You can work with a minimum of supervision and be capable of strategically prioritizing multiple tasks in a proactive manner.',
            'cover_image_url' => 'https://securecdn.pymnts.com/wp-content/uploads/2020/02/moneylion.png',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-05-19')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Cybersecurity Analyst', 
            'description' => 'Conduct threat monitoring to identify cyber attacks in a timely manner.
            Work closely with the IT and CloudOps team to respond and investigate security events. When necessary, carry out digital forensic for reporting and auditing purposes.
            Deploy, maintain and fine-tune threat detection rules in response to the latest threat landscape.
            Identify the gaps in the current threat detection & monitoring capabilities, and provide suggestions to reduce these gaps.
            Perform analysis of potential cyber security risks and recommend risk mitigation strategies.
            Contribute in threat hunting exercises.
            Contribute in developing or improving SOP and playbooks.
            Contribute in various innovative projects to improve MoneyLion’s overall security posture.',
            'requirement' => 'Good working knowledge of information security systems (i.e. firewall, IPS/IDS, AV/EDR, SIEM), and frameworks such as MITRE ATT&CK, and Lockheed Martin Cyber Kill Chain.
            Strong analytical and problem solving skills.
            Good written and verbal communication skills.
            Good report writing skills.
            Ability to work on an on-call basis as required.
            Self-motivated, innovative, and a team player.
            Proficient in languages (i.e. Python, Bash, Go) to process data and automate tasks.',
            'type' => 'Full-time',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Intermediate",
            'user_id' => 11,
            'company' => 'MoneyLion',
            'industry' => 'Technology',
            'beneficial_skills' => 'Academic background in Information Technology/Computer Science.
            Knowledge in using any SIEM platform.
            Knowledge of cloud service providers such as AWS.
            Knowledge of SIM3 framework.
            Knowledge of FIRST and NIST standards.
            Knowledge of using OSS tools to perform CSIRT related tasks.
            GCIH/Security+/CySA+/CEH/ECIH certification.',
            'cover_image_url' => 'https://securecdn.pymnts.com/wp-content/uploads/2020/02/moneylion.png',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-01')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Geoscience Engineer', 
            'description' => 'Specific job description will be discussed should you be shortlisted for the internship positions.',
            'requirement' => '• Currently pursuing degree or diploma in any engineering or geosciences related disciplines or equivalent.
            • Active in extracurricular activities with leadership roles.
            • Willing to drive development plan and take extra initiatives during internship.
            • Willing to work hard while getting your hands dirty.
            • Currently in Malaysia and willing to relocate to our offices/workshops.',
            'type' => 'Internship',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Beginner",
            'user_id' => 23,
            'company' => 'Schlumberger',
            'industry' => 'Engineering',
            'beneficial_skills' => '-',
            'cover_image_url' => 'https://mms.businesswire.com/media/20210122005175/en/70213/22/bluelogo.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-05-20')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Functional Intern', 
            'description' => 'Specific job description will be discussed should you be shortlisted for the internship positions.',
            'requirement' => '• • Currently pursuing diploma/degree in any related disciplines or equivalent.
            • Active in extracurricular activities with leadership roles.
            • Willing to drive development plan and take extra initiatives during internship.
            • Currently in Malaysia and willing to relocate to our offices/workshops.',
            'type' => 'Internship',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Beginner",
            'user_id' => 23,
            'company' => 'Schlumberger',
            'industry' => 'Business',
            'beneficial_skills' => '-',
            'cover_image_url' => 'https://mms.businesswire.com/media/20210122005175/en/70213/22/bluelogo.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-05-20')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Admin', 
            'description' => 'You will be assisting us in the Admin Project Department by supporting the admin functions',
            'requirement' => 'Any degree or diploma can apply A good attitude and willingness to learn is an added advantage Preferably 36 months internship Please state your internship period when applying for this position Job Types Fulltime, Internship Contract length 3.',
            'type' => 'Internship',
            'location' => 'Selangor',
            'experience_level' => "Beginner",
            'user_id' => 17,
            'company' => 'Texas',
            'industry' => 'Business',
            'beneficial_skills' => '-',
            'cover_image_url' => 'http://www.restaurantnews.com/wp-content/uploads/2015/10/Texas-Chicken-Opens-Two-New-Restaurants-in-Bulgaria.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-23')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Young Banker', 
            'description' => 'Maybank Young Banker Internship Programme (MYBIP) is a structured internship programme targeted for final semester student, designed to enhance their employability and soft-skills capability as well as providing them with technical skills and license certification. The aims of this programme is to fast track them to be Maybank ready talents. At the end of this programme, interns will be able to gain a practical experience in banking industry and also can improve their skills to interact and communicate effectively. A structured evaluation and assessment will be conducted in the middle and at the end of their internship. This is to align with the University performance assessment for students grading.',
            'requirement' => '•Final semester Bachelor’s Degree students in any field that will undergo an internship starting in February / March 2022 for 5 months
            •Strong command of written and spoken English
            •Good interpersonal skills and a sociable person
            •Possess a strong analytical ability
            •Forward-thinking, results-driven and enthusiastic personality
            •Willing to be relocated throughout the country
            •Candidates who have held leadership roles during their university years will have an added advantage',
            'type' => 'Internship',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Beginner",
            'user_id' => 6,
            'company' => 'Maybank',
            'industry' => 'Finance',
            'beneficial_skills' => '-',
            'cover_image_url' => 'https://www.maybank.com/iwov-resources/corporate_new/img/common/key-business-entities-large.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-09')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Software Engineer', 
            'description' => '• Assist in analysis, design, program, test, document and maintain IT systems or applications.
            • Develop test cases, conduct SIT, load test, and tune the performance of systems to meet SLA.
            • Design and implement UI/UX based on client\'s requirements.
            • Design and develop databases with various complexities.
            • Deploy systems to production and provide post-implementation support.
            • Preparation for client’s engagement and presentation',
            'requirement' => '• Currently studying for a bachelor\'s degree in Software Engineering or equivalent
            • Other IT related fields are encouraged to apply.
            • Minimum GPA requirement: 3.0
            • Programming and coding in language HTML, CSS, JavaScript, DBMS',
            'type' => 'Internship',
            'location' => 'Selangor',
            'experience_level' => "Beginner",
            'user_id' => 12,
            'company' => 'Infront Consulting',
            'industry' => 'Technology',
            'beneficial_skills' => '• Programming and coding in language Python, Django, Flask, PHP
            • DBMS experience in PostgreSQL, MSSQL',
            'cover_image_url' => 'https://resources.wobbjobs.com/resized/uploads/jobs-malaysia/company_images/5388/jobs-malaysia-infront-consulting-15093695_show.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-15')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Full Stack Developer', 
            'description' => 'We are looking for a highly skilled computer programmer who is comfortable with both front and back-end programming. Full stack developers are responsible for developing and designing front end web architecture, ensuring the responsiveness of applications, and working alongside graphic designers for web design features, among other duties. Full stack developers will be required to see out a project from conception to final product, requiring good organizational skills and attention to detail. Full Stack Developer Responsibilities: • Developing front end website architecture. • Designing user interactions on web pages. • Developing back-end website applications. • Creating servers and databases for functionality. • Ensuring cross-platform optimization for mobile phones. • Ensuring responsiveness of applications. • Working alongside graphic designers for web design features. • Seeing through a project from conception to finished product. • Designing and developing APIs. • Meeting both technical and consumer needs. • Staying abreast in web applications and programming languages.',
            'requirement' => ' • Degree in computer science. • Strong organizational and project management skills. • Proficiency with fundamental front-end languages such as HTML, CSS, and JavaScript. • Familiarity with JavaScript frameworks such as React and Node JS • Proficiency with server-side languages such as Python, Java, PHP, and .Net. • Familiarity with database technology such as MySQL, MSSQL and MongoDB.',
            'type' => 'Full-time',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Beginner",
            'user_id' => 12,
            'company' => 'Infront Consulting',
            'industry' => 'Technology',
            'beneficial_skills' => 'Excellent verbal communication skills. • Good problem-solving skills. • Attention to detail.',
            'cover_image_url' => 'https://resources.wobbjobs.com/resized/uploads/jobs-malaysia/company_images/5388/jobs-malaysia-infront-consulting-15093695_show.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-26')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Cross Media Specialist', 
            'description' => 'Identify new areas of improvement in key compete media objectives like Lead generation & Online Sales Help in building out new Discovery and Performance Max pitches to drive activation.
            Take to market and operationalize tools to enable clearer insight on competing offerings and go-to-market response for them
            Manage a book of business on performance on lead generation and online business growth.
            Be a cross-product advocate for clients to drive business growth through best practice sharing',
            'requirement' => 'Bachelor\'s degree or equivalent practical experience.
            4 years of experience in advertising sales, marketing, consulting, or media.
            1 year of experience working as a member of a Large Customer Sales pod.
            Experience with the display advertising ecosystem.',
            'type' => 'Full-time',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Intermediate",
            'user_id' => 13,
            'company' => 'Google',
            'industry' => 'Marketing',
            'beneficial_skills' => 'Experience managing digital advertising campaigns for large, complex clients with proficiency in online measurement, operations, and ad networks. Ability to help close the loop/ensure success when needed.
            Vertical or industry knowledge and experience.
            Deep understanding of social platforms
            Expert understanding of AdWords’ value proposition, targeting types and cross-devices capabilities, including the apps space.
            Ability to deliver high quality results quickly and under pressure.
            Excellent organizational, analytical, communication and influencing skills.',
            'cover_image_url' => 'https://cdn.vox-cdn.com/thumbor/Pkmq1nm3skO0-j693JTMd7RL0Zk=/0x0:2012x1341/1200x800/filters:focal(0x0:2012x1341)/cdn.vox-cdn.com/uploads/chorus_image/image/47070706/google2.0.0.jpg',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-20')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Engineer', 
            'description' => 'The engineers from Intel Malaysia are part of the global development team working on the latest Intel® Processors and Chipset products. They contribute significantly to the design and development of products powered by Intel’s latest processing technology. This highly-skilled workforce is a testament to Intel’s commitment in Malaysia as our operations move up the global value chain.',
            'requirement' => 'Our internship programs cater best to students who have an ambition to make the world a better place through technology, constantly challenging the boundaries of what is possible. You must have a great attitude towards growing and developing yourself as an individual.

            Engineering Undergraduates: Electrical & Electronics / Computer Engineering / Software Engineering / Microelectronics / Electronics & Communications / Mechatronics / Computer Science
            
            o CGPA: 3.0 and above or equivalent',
            'type' => 'Internship',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Beginner",
            'user_id' => 7,
            'company' => 'Intel Corporation',
            'industry' => 'Engineering',
            'beneficial_skills' => 'Able to rellocate',
            'cover_image_url' => 'https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/Intel_Xeon_Roadmap_Ice_Lake_Sapphire_Rapids_Granite_Rapids_5_2060x1159.png',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-20')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Technician', 
            'description' => 'Responsibilities may be quite diverse in technical nature Experience and education requirements will vary significantly depending on the unique needs of the job Job assignments are typically for digital logic RTL validation and verification based on FPGA prototyping approach and emulation',
            'requirement' => 'You must be pursuing a Bachelor or higher of Science degree in',
            'type' => 'Internship',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Beginner",
            'user_id' => 7,
            'company' => 'Intel Corporation',
            'industry' => 'Marketing',
            'beneficial_skills' => 'Passionate in learning',
            'cover_image_url' => 'https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/Intel_Xeon_Roadmap_Ice_Lake_Sapphire_Rapids_Granite_Rapids_5_2060x1159.png',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-20')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);

        DB::table('job_posts')->insert([
            'title' => 'Intel TEG', 
            'description' => 'As Technical Equipment Group Intern, you will work together as a team with Manufacturing System and Engineer to explore and develop new process and system to support Manufacturing needs. It\'s require you to be fearless, creative, take inform risk and bring your most strategic thinking to every challenge. This role will help you to further develop your skills and capabilities in problem solving, decision making process, project and stakeholder management, effective communication and more while foster collaboration and teamwork.',
            'requirement' => 'Knowledge and Experience you will need to be successful in this role:
            • Leverage systems-thinking, teamwork, and collaboration in order to achieve results.
            • Demonstrated effectiveness to work within and across groups
            • Proficiency in Microsoft Office including PowerPoint, Word, Outlook and completing data analysis in Excel.',
            'type' => 'Internship',
            'location' => 'Kuala Lumpur',
            'experience_level' => "Beginner",
            'user_id' => 7,
            'company' => 'Intel Corporation',
            'industry' => 'Technology',
            'beneficial_skills' => 'Your knowledge in developing a website, editing, automation application and scripting are an added advantage.',
            'cover_image_url' => 'https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/Intel_Xeon_Roadmap_Ice_Lake_Sapphire_Rapids_Granite_Rapids_5_2060x1159.png',
            'closing_date' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-04-20')),
            'created_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06')),
            'updated_at' => date(format: 'Y-m-d H:i:s', timestamp: strtotime('2022-03-06'))
        ]);
    }
}
