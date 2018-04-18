<?php

namespace App\Http\Controllers\Frontend;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){
        return view('frontend.pages.cart');
    }

    public function store(Request $request){
        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
        return redirect('/cart')->with('success_message', 'Item was add to your cart');
    }

//    public function empty(){
//        Cart::destroy();
//    }

    public function destroy($id){
        Cart::remove($id);
        return back()->with('success_message', 'Item has been removed');
    }
}
