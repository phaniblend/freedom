<?php

$menus = [
  "#home" => "Home",
  "#about-us" => "About Us",
  "#services" => "Services",
  "#specialisation" => "Specialisation",
  "#jobs" => "Job Postings",
  "https://h1bconnect-frontend-production.up.railway.app" => "Freedom",
  "#contact" => "Contact",
];

$home = [
  'bg' => '/images/capital-recruiters-home-bg.png',
  'caption' => 'Human capital at its best',
];

$about = [
  'slider' => [
    '/images/about-us/about-1.png',
    '/images/about-us/about-2.png',
    '/images/about-us/about-3.png',
  ],
  'p1' => 'Capital recruiters is an employee-friendly organization where we give each other's opinions or count on each other's advice in delivering the best to our clients.',
  'p2' => 'Owing to our decades of combined domestic and international experience, 
           we have been delivering tailor-made solutions to our partners with the highest possible quality in the industry. 
           We hire and work with the best in the industry who cater to our satisfied clients regardless of the size of the project.',
  't3' => 'Vision and mission:',
  'p3' => 'Our goal is to be the best in the industry in delivering tailor-made solutions across the domains 
           that need niche skillsets, which are very difficult to fill with advertisements and online databases.',
];

$services = [
  'Direct search / Headhunting',
  'Recruitment and selection',
  'Compiling a job description',
  'Competency-based interviews',
  'Structured candidate reporting',
  'Reference check',
  'Outplacement',
  'Recruitment outsourcing',
  'Mass recruitment project management',
  'Other HR project management',
  'Market research',
  'Language tests',
  'Psychometric tests',
  'Assessment Centers',
  'Salary surveys',
  'Media planning',
];

$specialisation = [
  'title' => 'WE PRIDE IN CATERING TO THE FOLLOWING INDUSTRIES',
  'cardsArr' => array_chunk([
    [
      'icon' => 'server',
      'bg' => '/images/industries/it-tel-1.png',
      'title' => 'IT / Telecommunications',
      'works' => [
        'Software Developer',
        'Software Designer',
        'Software Tester',
        'Hardware Developer',
        'Database Expert',
        'System Administrator',
        'IT Project Manager',
        'IT Consultant',
        'Enterprise Management System Expert',
        'Infrastructure Expert',
        'Solution Integrator',
        'Solution Architect',
        'Network and Telecommunications Engineer',
      ],
    ],
    [
      'icon' => 'award',
      'bg' => '/images/industries/Engineering-TechnicalField.png',
      'title' => 'Engineering / Technical field',
      'works' => [
        'Electrical Engineer',
        'Mechanical Engineer',
        'Design Engineer',
        'Development Engineer',
        'Constructor Process Engineer',
        'Quality Assurance Engineer',
        'Machining Engineer',
        'Assembly Engineer',
        'Maintenance Engineer',
        'Test Engineer',
      ],
    ],
    [
      'icon' => 'phone',
      'bg' => '/images/industries/SSC-BSC.png',
      'title' => 'SSC / BSC',
      'works' => [
        'Service Desk Agent (with different language combinations)',
        'Helpdesk Support',
      ],
    ],
    [
      'icon' => 'warehouse',
      'bg' => '/images/industries/PURCHASING.png',
      'title' => 'Purchasing / Logistics',
      'works' => [
        'Purchasing Engineer',
        'Technology Purchasing',
        'Strategic Purchasing',
        'Customer Contact',
        'IT Purchasing',
      ],
    ],
    [
      'icon' => 'chart-line',
      'bg' => '/images/industries/FINANCE.png',
      'title' => 'Finance',
      'works' => [
        'Accountant Controller',
        'Finance Officer',
        'Financial Assistant',
        'AP / AR Specialist',
        'Accounting Officer',
        'Payroll',
        'Market Data Specialist',
        'Risk Manager',
      ],
    ],
    [
      'icon' => 'pencil',
      'bg' => '/images/industries/MARKETING.png',
      'title' => 'Marketing',
      'works' => [
        'Marketing Specialist',
        'Product Manager',
        'Regional Representative',
        'Account Manager',
        'Brand Manager',
        'Communication Officer',
        'PR Specialist',
        'ATL / BTL Specialist',
      ],
    ],
    [
      'icon' => 'money',
      'bg' => '/images/industries/SALES.png',
      'title' => 'Sale',
      'works' => [
        'Engineering Sales',
        'Sales Associate',
        'Sales Representative',
        'Customer Manager',
      ],
    ],
    [
      'icon' => 'beaker',
      'bg' => '/images/industries/PHARMA.png',
      'title' => 'Pharma',
      'works' => [
        'Chemical Engineer',
        'Chemist',
        'Quality Assurance',
      ],
    ],
  ], 3),
];

$jobs = [
  [
    'title' => 'Software Developer I',
    'ref' => '5210.001',
    'location' => 'Austin, Texas',
    'duties' => 'Assist clients in developing, maintaining, and enhancing software systems. Collaborate to understand software requirements, create and execute development plans, and ensure timely delivery and functionality compliance. Work with QA to resolve issues in products. Document software development and provide support as needed. Requires travel and/or relocation to various unanticipated U.S. locations. Technologies used include JavaScript, React, Node.js, MySQL.',
    'skills' => 'Position requires a Bachelor's Degree in Computer Science, Engineering, or a related field and one (1) year of experience. Experience must include JavaScript, React, Node.js, and MySQL. Requires travel and/or relocation to various unanticipated U.S. locations.',
    'apply_email' => 'hr@capitalrecruiters.net',
  ],
  [
    'title' => 'Software Developer II',
    'ref' => '6220.002',
    'location' => 'Sulphur Springs, Texas',
    'duties' => 'Help clients to develop, maintain, or improve software systems. Work with clients to understand requirements for software. Develop software pursuant to agreed-upon plans ensuring compliance with timelines, functionality, and other requirements. Work with QA staff to resolve issues found in products. Document developed software and provide support as necessary. Travel and/or relocation to various unanticipated locations throughout the U.S. required. Work with the following: Java, Spring Boot, Angular, GIT, Oracle DB.',
    'skills' => 'Position requires a Master's Degree in Computer Science, Engineering, or related field and six (6) months of experience. Six (6) months of experience must have included: Java, Spring Boot, Angular, GIT, Oracle DB. Travel and/or relocation to various unanticipated locations throughout the U.S. required.',
    'apply_email' => 'hr@capitalrecruiters.net',
  ],
  [
    'title' => 'Business Systems Developer II',
    'ref' => '6220.001',
    'location' => 'Sulphur Springs, Texas',
    'duties' => 'Help clients to move their data to new and updated systems. Evaluate client systems to understand data sources and target systems. Develop plans for data migrations and implement them. Customize new systems to meet client needs. Establish and implement testing procedures for new systems. Create and maintain backups. Document the development process. Telecommuting permitted. Work with the following: Ab-Initio ETL, UNIX Shell Scripting, PL/SQL, Oracle, Teradata.',
    'skills' => 'Position requires a Bachelor's Degree in Control and Instrumentation Engineering, Computer Science, Engineering, or related field and twelve (12) months experience. One (1) year experience must have included: Ab-Initio ETL, UNIX Shell Scripting, PL/SQL, Oracle, Teradata. Telecommuting permitted.',
    'apply_email' => 'hr@capitalrecruiters.net',
  ],
];


$contact = [
  'email' => 'hr@capitalrecruiters.net',
  'address' => '320 Church Street, Ste. 214, Sulphur Springs, TX 75482',
];
