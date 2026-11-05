<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ClientReview;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = ClientReview::orderBy('rating', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        $projects = Project::latest()->take(6)->get();

        return view('home.index', compact('reviews', 'projects'));
    }

    public function productCapture()
    {
        return view('products.capture');
    }

    public function productOptimize()
    {
        return view('products.optimize');
    }

    public function platformIntelligence()
    {
        return view('platform.specialized-intelligence');
    }

    public function platformIntegrations()
    {
        return view('platform.integrations');
    }

    public function platformApi()
    {
        return view('platform.api');
    }

    public function solution($slug)
    {
        $solutions = config('landing.solutions', []);
        $solution = $solutions[$slug] ?? null;

        if (!$solution) {
            // Fallback for valid solutions
            $slugTitle = ucwords(str_replace('-', ' ', $slug));
            $solution = [
                'title' => $slugTitle,
                'category' => 'Enterprise Solution',
                'description' => "Empower your team with AI-driven documentation, structured workflow context, and seamless operations for {$slugTitle}.",
                'hero_badge' => 'Enterprise Solution',
                'problem_statement' => "Without documented operational processes, scaling {$slugTitle} leads to knowledge silos, repetitive questions, and costly operational delays.",
                'solution_statement' => "Our platform automatically captures, standardizes, and scales workflows across {$slugTitle}, turning institutional knowledge into structured guides.",
                'benefits' => [
                    ['title' => '60% Faster Execution', 'desc' => 'Employees execute standard operating procedures without friction or repetitive guidance.'],
                    ['title' => 'Zero Tribal Knowledge', 'desc' => 'Every single workflow is captured, updated, and easily searchable in real-time.'],
                    ['title' => 'AI-Ready Context', 'desc' => 'Workflows can be instantly exported or queried by enterprise AI copilots and agents.'],
                ],
                'faqs' => [
                    ['q' => "How does this solution integrate with our existing {$slugTitle} stack?", 'a' => 'Our system works natively across all web applications, desktop software, and cloud environments with zero complex setup.'],
                    ['q' => 'Is data kept private and secure?', 'a' => 'Yes. Enterprise-grade encryption, automated PII redaction, and SOC2-aligned access controls keep your operational data completely safe.'],
                ],
            ];
        }

        return view('solutions.show', compact('solution', 'slug'));
    }

    public function pricing()
    {
        return view('pricing.index');
    }

    public function resources()
    {
        return view('resources.index');
    }

    public function resourceDetail($slug)
    {
        return view('resources.show', compact('slug'));
    }

    public function caseStudies()
    {
        $allCases = ClientReview::orderBy('rating', 'desc')
                                ->orderBy('created_at', 'desc')
                                ->get();

        return view('case-studies.index', compact('allCases'));
    }

    public function caseStudyDetail($slug)
    {
        return view('case-studies.show', compact('slug'));
    }

    public function templates()
    {
        return view('templates.index');
    }

    public function security()
    {
        return view('security.index');
    }

    public function whatsNew()
    {
        return view('whats-new.index');
    }

    public function demo()
    {
        return view('home.demo');
    }

    public function talkToSales()
    {
        return view('home.demo');
    }

    public function legal($page)
    {
        return view('legal.show', compact('page'));
    }

    public function contactUs()
    {
        return view('home.contact-us');
    }

    public function aboutUs()
    {
        return view('home.about-us');
    }

    public function whyUs()
    {
        return view('home.why-us');
    }

    public function portfolio()
    {
        try {
            $projects = Project::latest()->take(9)->get();
        } catch (\Throwable $e) {
            $projects = collect();
        }

        try {
            $featuredReviews = ClientReview::orderBy('rating', 'desc')
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();
        } catch (\Throwable $e) {
            $featuredReviews = collect();
        }

        return view('home.portfolio', compact('projects', 'featuredReviews'));
    }

    public function services()
    {
        return view('home.services');
    }

    public function cases()
    {
        $projects = Project::where('is_published', true)->orderBy('sort_order')->orderByDesc('created_at')->get();
        $allReviews = ClientReview::orderBy('rating', 'desc')
                                ->orderBy('created_at', 'desc')
                                ->get();

        $topCases   = $allReviews->take(4);
        $otherCases = $allReviews->skip(4);

        return view('home.cases', compact('projects', 'topCases', 'otherCases', 'allReviews'));
    }

    public function review()
    {
        return view('home.review');
    }

    public function reviewThankYou()
    {
        return view('home.review-thankyou');
    }
}
