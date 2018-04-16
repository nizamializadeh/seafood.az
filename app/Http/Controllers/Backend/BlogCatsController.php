<?php

namespace App\Http\Controllers\Backend;

use App\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCatsController extends Controller
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
        $data = BlogCategory::OrderBy('id', 'DESC')->get();
        return view('admin.pages.blogcat.categories', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blogcat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new BlogCategory();
        $category->blog_cat_name_az = $request->name_az;
        $category->blog_cat_name_en = $request->name_en;
        $category->blog_cat_name_ru = $request->name_ru;
        $category->save();
        return redirect('/admin/blogcats');
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
    public function edit(BlogCategory $category)
    {
        $data = BlogCategory::find($category);
        return view('admin.pages.blogcat.edit', compact('data', 'category'));
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
        $category = BlogCategory::find($category);
        $category->blog_cat_name_az = $request->name_az;
        $category->blog_cat_name_en = $request->name_en;
        $category->blog_cat_name_ru = $request->name_ru;
        $category->save();
        return redirect('/admin/blogcats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = BlogCategory::find($id);
        $category->delete();
        return redirect('/admin/blogcats');
    }
}
