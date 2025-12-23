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
        'Web Development',
        'API Development',
        'App Development',
        'AI Integration',
        'Cloud Solutions',
        'Data Analytics',
    ],

    'features' => [
        [
            'icon' => 'fa-solid fa-cloud',
            'title' => 'Cloud Integration',
            'description' => 'Seamlessly integrate with cloud services.',
        ],
        [
            'icon' => 'fa-solid fa-shield-alt',
            'title' => 'Secure',
            'description' => 'Top-notch security for your data.',
        ],
        [
            'icon' => 'fa-solid fa-cogs',
            'title' => 'Customizable',
            'description' => 'Tailor the platform to your needs.',
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