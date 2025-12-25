<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Landing Page Configuration
    |--------------------------------------------------------------------------
    |
    | This file is for storing the configuration settings for the landing page
    | of the application. You can define various settings such as hero section,
    | features, testimonials, and contact information here.
    |
    */

    'services' => [
        'Custom Software Development',
        'Mobile App Development (iOS & Android)',
        'AI & Machine Learning Solutions',
        'Website & E-Commerce Development',
        'SaaS & Platform Development',
        'Cloud & DevOps Services',
    ],

    'technologies' => [
        'Frontend Technologies' => [
            ['name' => 'React', 'icon' => 'devicon-react-original colored'],
            ['name' => 'Vue.js', 'icon' => 'devicon-vuejs-plain colored'],
            ['name' => 'Svelte', 'icon' => 'devicon-svelte-plain colored'],
            ['name' => 'Livewire', 'icon' => 'devicon-livewire-plain colored'],
            ['name' => 'Inertia.js', 'icon' => 'devicon-inertiajs-plain colored'],
        ],

        'Backend Technologies' => [
            ['name' => 'PHP', 'icon' => 'devicon-php-plain colored'],
            ['name' => 'Node.js', 'icon' => 'devicon-nodejs-plain colored'],
            ['name' => 'Laravel', 'icon' => 'devicon-laravel-original colored'],
            ['name' => 'Python', 'icon' => 'devicon-python-plain colored'],
        ],

        'AI & ML Tools' => [
            ['name' => 'OpenAI GPT', 'icon' => 'devicon-python-plain colored'],
        ],

        'Databases & Cloud' => [
            ['name' => 'MySQL', 'icon' => 'devicon-mysql-plain colored'],
            ['name' => 'PostgreSQL', 'icon' => 'devicon-postgresql-plain colored'],
            ['name' => 'Redis', 'icon' => 'devicon-redis-plain colored'],
            ['name' => 'Cloud SQL', 'icon' => 'devicon-googlecloud-plain colored'],
        ],

        'DevOps & CI/CD' => [
            ['name' => 'Docker', 'icon' => 'devicon-docker-plain colored'],
            ['name' => 'AWS', 'icon' => 'devicon-amazonwebservices-plain colored'],
            ['name' => 'Google Cloud', 'icon' => 'devicon-googlecloud-plain colored'],
            ['name' => 'CI/CD', 'icon' => 'devicon-git-plain colored'],
        ],
    ],


    'testimonials' => [
        [
            'name' => 'John Doe',
            'position' => 'CEO, ExampleCorp',
            'quote' => 'SaaSApps transformed our business operations!',
        ],
        [
            'name' => 'Jane Smith',
            'position' => 'CTO, TechSolutions',
            'quote' => 'The best SaaS platform we have ever used.',
        ],
    ],
];