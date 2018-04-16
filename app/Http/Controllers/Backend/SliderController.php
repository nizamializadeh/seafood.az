<?php

namespace App\Http\Controllers\Backend;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $data = Slider::OrderBy('id', 'DESC')->get();
        return view('admin.pages.slider.slider', compact('data'));
    }

    public function edit(Slider $slider){
        $data = Slider::find($slider);
        return view('admin.pages.slider.edit', compact('data', 'slider'));
    }

    public function update(Request $request, $slider){
        $slider = Slider::find($slider);
        $slider->slider_title_az = $request->title_az;
        $slider->slider_title_en = $request->title_en;
        $slider->slider_title_ru = $request->title_ru;
        $slider->slider_desc_az = $request->desc_az;
        $slider->slider_desc_en = $request->desc_en;
        $slider->slider_desc_ru = $request->desc_ru;
        if ($request->hasFile('img')){
            $name = time().".".$request->file("img")->extension();
            $slider->slider_image = $name;
            $request->file("img")->move(public_path().'/images', $name);
        }
        $slider->save();
        return redirect('/admin/slider');
    }
}
