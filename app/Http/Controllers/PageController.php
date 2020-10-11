<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }   

    public function about()
    {
        return view('about');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function contactus()
    {
        return view('contact');
    }
}
