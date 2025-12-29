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

    public function blog()
    {
        return view('home.blog');
    }

    public function helpSupports()
    {
        return view('home.help-supports');
    }

    public function features()
    {
        return view('home.features');
    }

    public function cases()
    {
        return view('home.cases');
    }
}
