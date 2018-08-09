<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::OrderBy('id', 'DESC')->get();
        return view('admin.pages.products.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::OrderBy('id', 'DESC')->get();
        return view('admin.pages.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->product_name_az = $request->name_az;
        $product->product_name_en = $request->name_en;
        $product->product_name_ru = $request->name_ru;
        $product->product_details_az = $request->details_az;
        $product->product_details_en = $request->details_en;
        $product->product_details_ru = $request->details_ru;
        $product->product_desc_az = $request->desc_az;
        $product->product_desc_en = $request->desc_en;
        $product->product_desc_ru = $request->desc_ru;
        $product->activity = '1';
        $product->quantity_style = $request->quantity;
        $product->price = number_format($request->price, 2);
        if ($request->hasFile('img')){
            $name = time().".".$request->file("img")->extension();
            $product->product_image = $name;
            $request->file("img")->move(public_path().'/images', $name);
        }
        $product->save();
        $product->categories()->sync($request->categories, false);
        return redirect('/admin/products-admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.pages.products.show', compact('product', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data = Product::find($product);
        $categories = Category::OrderBy('id', 'DESC')->get();
        return view('admin.pages.products.edit', compact('data', 'product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        $product = Product::find($product);
        $product->product_name_az = $request->name_az;
        $product->product_name_en = $request->name_en;
        $product->product_name_ru = $request->name_ru;
        $product->product_details_az = $request->details_az;
        $product->product_details_en = $request->details_en;
        $product->product_details_ru = $request->details_ru;
        $product->product_desc_az = $request->desc_az;
        $product->product_desc_en = $request->desc_en;
        $product->product_desc_ru = $request->desc_ru;
        $product->price = number_format($request->price, 2);
        $product->quantity_style = $request->quantity;
        if ($request->hasFile('img')){
            $name = time().".".$request->file("img")->extension();
            $product->product_image = $name;
            $request->file("img")->move(public_path().'/images', $name);
        }
        $product->save();
        if (isset($request->categories)) {
            $product->categories()->sync($request->categories, false);
        }else{
            $product->categories()->sync(array());
        }
        return redirect('/admin/products-admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin/products-admin');
    }
}
