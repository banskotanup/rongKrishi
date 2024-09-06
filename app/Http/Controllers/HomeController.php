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

    public function vegie()
    {
        return view('home.service_pages.vegie');
    }

    public function agri_pro()
    {
        return view('home.service_pages.agri_pro');
    }

    public function org_pro()
    {
        return view('home.service_pages.org_pro');
    }
}