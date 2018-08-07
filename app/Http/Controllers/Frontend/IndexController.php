<?php

namespace App\Http\Controllers\Frontend;

use App\About;
use App\Blog;
use App\BlogCategory;
use App\Brand;
use App\Camp;
use App\Contact;
use App\Product;
use App\Product_Category;
use App\Reservation;
use App\Service;
use App\Slider;
use App\Social;
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
        $contact = Contact::first();
        return view('frontend.pages.home', compact('sliders', 'services', 'products', 'brands', 'blogs', 'contact'));
    }

    public function about(){
        $about = About::first();
        $contact = Contact::first();
        return view('frontend.pages.aboutus', compact('contact', 'about'));
    }

    public function services(){
        return view('frontend.pages.services');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function shop(){
        $products = Product::OrderBy('id', 'DESC')->paginate(12);
        $contact = Contact::first();
        return view('frontend.pages.shop',  compact('products', 'contact'));
    }

    public function product($id){
        $product = Product::findOrFail($id);
        $categories = Product_Category::OrderBy('id', 'DESC')->get();
        $contact = Contact::first();

//        $number = $product->price;
//        $price = number_format($number);
//        dd($price);
        return view('frontend.pages.product', compact('product', 'id', 'categories', 'contact'));
    }

    public function blogs(){
        $blogs = Blog::OrderBy('id', 'DESC')->get();
        $contact = Contact::first();
        return view('frontend.pages.blogs', compact('blogs', 'contact'));
    }

    public function singleblog($id){
        $blog = Blog::findOrFail($id);
        $blogs = Blog::OrderBy('id', 'DESC')->take(4)->get();
        $blog_categories = BlogCategory::OrderBy('id', 'DESC')->get();
        return view('frontend.pages.singleblog', compact('blog', 'blog_categories', 'blogs'));
    }

    public function camps(){
        $camps = Camp::OrderBy('id', 'DESC')->get();
        $contact = Contact::first();
        return view('frontend.pages.camps', compact('camps', 'contact'));
    }

    public function singlecamp($id){
        $camp = Camp::findOrFail($id);
        $contact = Contact::first();
        return view('frontend.pages.singlecamp', compact('camp', 'contact'));
    }

    public function reservation(Request $request){
        $rezerv = new Reservation();
        $rezerv->name = $request->name;
        $rezerv->user_id = $request->user_id;
        $rezerv->surname = $request->surname;
        $rezerv->email = $request->email;
        $rezerv->phone = $request->phone;
        $rezerv->camp_id = $request->camp_id;
        $rezerv->save();
        return back();
    }

    public function contact(){
        $socials = Social::orderBy('id', 'DESC')->get();
        $contact = Contact::first();
        return view('frontend.pages.contact', compact('contact', 'socials'));
    }


    public function profile(){
        $contact = Contact::first();

        return view('frontend.pages.user-dashboard', compact('contact'));
    }
}
