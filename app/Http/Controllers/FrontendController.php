<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //home
    function home(){
        return view('frontend.home');
    }
    
    //about_us
    function about_us(){
        return view('frontend.about');
    }
    //services
    function services(){
        return view('frontend.services');
    }
    //protfolio
    function protfolio(){
        return view('frontend.protfolio');
    } 
    //blog
    function blog(){
        return view('frontend.blog');
    }
    //contect
    function contect(){
        return view('frontend.contect');
    }
}
