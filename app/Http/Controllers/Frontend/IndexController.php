<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class IndexController extends Controller
{

    public function index(){
        return view('frontend.pages.home');
    }

    public function about(){
        return view('frontend.pages.aboutus');
    }

    public function services(){
        return view('frontend.pages.services');
    }

    public function shop(){
        return view('frontend.pages.shop');
    }

    public function product(){
        return view('frontend.pages.product');
    }

    public function blogs(){
        return view('frontend.pages.blogs');
    }

    public function singleblog(){
        return view('frontend.pages.singleblog');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }


    public function profile(){
        return view('frontend.pages.user-dashboard');
    }
}
