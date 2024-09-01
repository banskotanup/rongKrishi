<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.pages.about');
    }

    public function product()
    {
        return view('home.pages.product');
    }

    public function testimonial()
    {
        return view('home.pages.testimonial');
    }

    public function faq()
    {
        return view('home.pages.faq');
    }

    public function contact()
    {
        return view('home.pages.contact');
    }
}