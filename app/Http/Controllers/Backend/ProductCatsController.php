<?php

namespace App\Http\Controllers\Backend;

use App\Product_Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCatsController extends Controller
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
        $categories = Product_Category::OrderBy('id', 'DESC')->get();
        return view('admin.pages.productcat.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.productcat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Product_Category();
        $category->product_cat_az = $request->name_az;
        $category->product_cat_en = $request->name_en;
        $category->product_cat_ru = $request->name_ru;
        $category->save();
        return redirect('/admin/categories');
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
    public function edit(Product_Category $category)
    {
        $data = Product_Category::find($category);
        return view('admin.pages.productcat.edit', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {
        $category = Product_Category::find($category);
        $category->product_cat_az = $request->name_az;
        $category->product_cat_en = $request->name_en;
        $category->product_cat_ru = $request->name_ru;
        $category->save();
        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Product_Category::find($id);
        $category->delete();
        return redirect('/admin/categories');
    }
}
