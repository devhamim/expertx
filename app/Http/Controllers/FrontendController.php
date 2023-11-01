<?php

namespace App\Http\Controllers;

use App\Models\feature;
use App\Models\privacyPolicy;
use App\Models\setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //home
    function home(){
        $features = feature::where('status', 1)->get();
        return view('frontend.home', [
            'features'=>$features,
        ]);
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
        $settings = setting::all();
        return view('frontend.contect', [
            'settings'=>$settings,
        ]);
    }

     //our_privacy_policy
     function our_privacy_policy(){
        $privacyPolicy = privacyPolicy::all();
        return view('frontend.privacyPolicy', [
            'privacyPolicy'=>$privacyPolicy,
        ]);
    }
}
