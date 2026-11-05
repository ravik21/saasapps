<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class CaseStudiesProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $casesData = [
            [
                'title' => 'TrustPatrick — B2B Review & Verification Engine',
                'name' => 'TrustPatrick — B2B Review & Verification Engine',
                'slug' => 'trustpatrick',
                'category' => 'SaaS & Identity Verification',
                'client' => 'TrustPatrick',
                'description' => 'A robust multi-tenant platform engineered with automated fraud prevention, real-time audit logging, and custom verification workflows for business reviews.',
                'image' => 'images/landing/projects/trustpatrick.png',
                'logo' => '/images/landing/projects/trustpatrick.png',
                'link' => 'https://trustpatrick.com',
                'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS', 'MySQL', 'Redis'],
                'technology' => [
                    ['value' => 'Laravel'],
                    ['value' => 'Vue.js'],
                    ['value' => 'Tailwind CSS'],
                    ['value' => 'MySQL'],
                    ['value' => 'Redis'],
                ],
                'review' => 'Pushing forwards an internal project with exceptional code quality, architectural precision, and speed.',
                'rating' => 5,
                'video_link' => null,
                'is_published' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'ThriveCoach — Interactive Coaching & Client Portal',
                'name' => 'ThriveCoach — Interactive Coaching & Client Portal',
                'slug' => 'thrivecoach',
                'category' => 'Health & Wellness Platform',
                'client' => 'ThriveCoach',
                'description' => 'An end-to-end coaching platform featuring automated appointment scheduling, private real-time messaging, client progress tracking, and Stripe billing.',
                'image' => 'images/landing/projects/thrivecoach.png',
                'logo' => '/images/landing/projects/thrivecoach.png',
                'link' => 'https://thrivecoach.app',
                'technologies' => ['Laravel', 'React', 'Tailwind CSS', 'Stripe', 'AWS'],
                'technology' => [
                    ['value' => 'Laravel'],
                    ['value' => 'React'],
                    ['value' => 'Tailwind CSS'],
                    ['value' => 'Stripe'],
                    ['value' => 'AWS'],
                ],
                'review' => 'Reliable, communicative, and delivers high-performance code across complex user flows and payment integrations.',
                'rating' => 5,
                'video_link' => null,
                'is_published' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Qurater — AI Content & Knowledge Curation Engine',
                'name' => 'Qurater — AI Content & Knowledge Curation Engine',
                'slug' => 'qurater',
                'category' => 'AI & Knowledge Management',
                'client' => 'Qurater',
                'description' => 'An intelligent semantic research and content curation engine powered by LLMs, automated document extraction, multi-source ingestion, and automated categorization.',
                'image' => 'images/landing/projects/qurater.png',
                'logo' => '/images/landing/projects/qurater.png',
                'link' => 'https://qurater.io',
                'technologies' => ['Python', 'Laravel', 'OpenAI', 'PostgreSQL', 'Docker'],
                'technology' => [
                    ['value' => 'Python'],
                    ['value' => 'Laravel'],
                    ['value' => 'OpenAI'],
                    ['value' => 'PostgreSQL'],
                    ['value' => 'Docker'],
                ],
                'review' => 'An excellent job on a complex project with rapid execution, great technical communication, and robust infrastructure.',
                'rating' => 5,
                'video_link' => null,
                'is_published' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Prescribery — Telemedicine & Digital Prescriptions',
                'name' => 'Prescribery — Telemedicine & Digital Prescriptions',
                'slug' => 'prescribery',
                'category' => 'Healthcare & Telemedicine',
                'client' => 'Prescribery',
                'description' => 'A HIPAA-aligned digital prescription and telemedicine workflow application connecting licensed healthcare practitioners with local pharmacy networks seamlessly.',
                'image' => 'images/landing/projects/prescribery.png',
                'logo' => '/images/landing/projects/prescribery.png',
                'link' => 'https://prescribery.com',
                'technologies' => ['Laravel', 'Vue.js', 'REST APIs', 'MySQL', 'Docker'],
                'technology' => [
                    ['value' => 'Laravel'],
                    ['value' => 'Vue.js'],
                    ['value' => 'REST APIs'],
                    ['value' => 'MySQL'],
                    ['value' => 'Docker'],
                ],
                'review' => 'Solved challenging technical obstacles with elegant architecture, rapid turnaround, and production-grade reliability.',
                'rating' => 5,
                'video_link' => null,
                'is_published' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($casesData as $data) {
            Project::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );
        }
    }
}
