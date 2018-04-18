<?php

namespace App\Http\Controllers\Frontend;

use App\Product;
use App\Product_Category;
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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function shop(){
        $products = Product::OrderBy('id', 'DESC')->get();
        return view('frontend.pages.shop',  compact('products'));
    }

    public function product($id){
        $product = Product::find($id);
        $categories = Product_Category::OrderBy('id', 'DESC')->get();
        return view('frontend.pages.product', compact('product', 'id', 'categories'));
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
