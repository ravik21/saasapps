<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'client_name' => 'Joseph Edmonds',
                'company_name' => 'Owner at Edmonds Ecommerce',
                'review' => ' Ravi did some great work for us pushing forwards an internal project ',
                'job_title' => 'Customisations and Improvements to Bespoke In House Laravel Business Application',
                'rating' => 5
            ],
            [
                'client_name' => 'Vincenzo Lufino',
                'company_name' => 'Owner at BtoTree',
                'review' => 'Ravi is a great guy and developer! Hope to work together again! Thanks!!!',
                'job_title' => 'Laravel PHP developers for B2B Network - Long Term',
                'rating' => 5
            ],
            [
                'client_name' => 'Scott Yewell',
                'company_name' => 'Purpose Built Software, Inc',
                'review' => 'Ravi did an excellent job on a complex project. He has great communication, and works really hard. Highly recommended.',
                'job_title' => 'Awesome Backend Laravel Developer',
                'rating' => 5
            ],
            [
                'client_name' => 'Mikael Westöö',
                'company_name' => 'CEO & Founder at Svensk e-identitet AB',
                'review' => 'Ravi is a brilliant developer!',
                'job_title' => 'PHP Backend Developer',
                'rating' => 5
            ],
            [
                'client_name' => 'Anthony Bures',
                'company_name' => 'Owner at Atomar',
                'review' => 'Ravi is an excellent developer... He completed my project successfully and I will use him for some future projects ',
                'job_title' => 'Looking for a terrific Laravel Developer',
                'rating' => 5
            ],
            [
                'client_name' => 'Scott Reimeles',
                'company_name' => 'CEO, LWD',
                'review' => 'Ravi did a great job, always available for communication and turn things around quickly This was a very long project And he was great throughout it. I would definitely hire again and recomm ',
                'job_title' => 'WordPress and PHP developer for steady work',
                'rating' => 5
            ],
        ];

        foreach ($reviews as $review) {
            \App\Models\ClientReview::updateOrCreate(
                ['client_name' => $review['client_name'], 'company_name' => $review['company_name']],
                $review
            );
        }
    }
}
