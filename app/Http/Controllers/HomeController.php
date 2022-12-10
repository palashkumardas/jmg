<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\About;
use App\Models\PrivacyPolicy;
use App\Models\TermsCondition;
use App\Models\CookiesPolicy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $about = About::first();
        return view('frontend.home', compact('contact','about'));
    }
    public function about(){
        $about = About::first();
        return view('frontend.about',compact('about'));
    }
    public function service(){
        return view('frontend.service');
    }
    public function contact(){
        $contact = Contact::first();
        return view('frontend.contact',compact('contact'));
    }
    public function terms(){
        $terms = TermsCondition::first(); 
        return view('frontend.terms',compact('terms'));
    }
    public function policy(){
        $policy = PrivacyPolicy::first();
        return view('frontend.policy',compact('policy'));
    }
    public function cookie(){
        $cookies = CookiesPolicy::first();
        return view('frontend.cookies',compact('cookies'));
    }
    
}
