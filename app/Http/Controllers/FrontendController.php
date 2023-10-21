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
    //our_portfolio
    function our_portfolio(){
        return view('frontend.protfolio');
    } 
    //our_blog
    function our_blog(){
        return view('frontend.blog');
    }
    //contect
    function contect(){
        return view('frontend.contect');
    }
}
