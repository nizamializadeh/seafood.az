<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\OrderRequest;
use App\Order;
use App\Product;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
//use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stripe\Charge;
//use Stripe\Stripe;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $contents = Cart::content()->map(function($item){
            return $item->model->product_name_az.', '.$item->qty;
        })->values()->toJson();
       $order = new Order();
       $order->first_name = $request->first_name;
       $order->last_name = $request->last_name;
       $order->email = $request->email;
       $order->phone = $request->phone;
       $order->city = $request->city;
       $order->street = $request->street_address;
       $order->product = $contents;
       $order->total_price =  number_format(Cart::total());
       $order->status = '1';
       $order->save();
       Cart::instance('default')->destroy();
       return redirect('/thankyou')->with('success_message', 'Your payment has been successfully accepted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
