<?php

namespace App\Http\Controllers\Backend;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $brands = Brand::OrderBy('id', 'DESC')->get();
        return view('admin.pages.brands.brands', compact('brands'));
    }

    public function store(Request $request){
        $brand = new Brand();
        if ($request->hasFile('img')){
            $name = time().".".$request->file("img")->extension();
            $brand->brand_logo = $name;
            $request->file("img")->move(public_path().'/images', $name);
        }
        $brand->save();
        return redirect('/admin/brands');
    }

    public function destroy($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/admin/brands');
    }
}
