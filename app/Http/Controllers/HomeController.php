<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home.portfolio');
    }

    public function services()
    {
        return view('home.services');
    }

    public function cases()
    {
        return view('home.cases');
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
