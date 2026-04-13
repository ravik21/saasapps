<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ClientReview;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
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
        $projects = Project::latest()->take(9)->get();
        $featuredReviews = ClientReview::orderBy('rating', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('home.portfolio', compact('projects', 'featuredReviews'));
    }

    public function services()
    {
        return view('home.services');
    }

    public function cases()
    {
        $allCases = ClientReview::orderBy('rating', 'desc')
                                ->orderBy('created_at', 'desc')
                                ->get();

        $topCases   = $allCases->take(4);
        $remaining  = $allCases->skip(4);

        // Chunk other cases into equal groups for balanced columns
        $chunkSize = max(1, (int) ceil($remaining->count() / 2));
        $otherCases = $remaining->chunk($chunkSize);

        return view('home.cases', compact('topCases', 'otherCases'));
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
