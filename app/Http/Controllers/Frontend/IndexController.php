<?php

namespace App\Http\Controllers\Frontend;

use App\Blog;
use App\BlogCategory;
use App\Brand;
use App\Camp;
use App\Product;
use App\Product_Category;
use App\Service;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class IndexController extends Controller
{

    public function index(){
        $sliders = Slider::all();
        $services = Service::OrderBy('id', 'DESC')->get();
        $products = Product::OrderBy('id', 'DESC')->take(12)->get();
        $brands = Brand::OrderBy('id', 'DESC')->get();
        $blogs = Blog::OrderBy('id', 'DESC')->take(3)->get();
        return view('frontend.pages.home', compact('sliders', 'services', 'products', 'brands', 'blogs'));
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
        $product = Product::findOrFail($id);
        $categories = Product_Category::OrderBy('id', 'DESC')->get();
        return view('frontend.pages.product', compact('product', 'id', 'categories'));
    }

    public function blogs(){
        $blogs = Blog::OrderBy('id', 'DESC')->get();
        return view('frontend.pages.blogs', compact('blogs'));
    }

    public function singleblog($id){
        $blog = Blog::findOrFail($id);
        $blogs = Blog::OrderBy('id', 'DESC')->take(4)->get();
        $blog_categories = BlogCategory::OrderBy('id', 'DESC')->get();
        return view('frontend.pages.singleblog', compact('blog', 'blog_categories', 'blogs'));
    }

    public function camps(){
        $camps = Camp::OrderBy('id', 'DESC')->get();
        return view('frontend.pages.camps', compact('camps'));
    }

    public function singlecamp($id){
        $camp = Camp::findOrFail($id);
        return view('frontend.pages.singlecamp', compact('camp'));
    }

    public function contact(){
        return view('frontend.pages.contact');
    }


    public function profile(){
        return view('frontend.pages.user-dashboard');
    }
}
