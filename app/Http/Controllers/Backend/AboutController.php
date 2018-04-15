<?php

namespace App\Http\Controllers\Backend;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $data = About::first();
        return view('admin.pages.about.about', compact('data'));
    }

    public function edit(About $about){
        $data = About::find($about);
        return view('admin.pages.about.edit', compact('data', 'about'));
    }

        public function update(Request $request, $about)
        {
            $about = About::find($about);
            $about->about_title_az = $request->title_az;
            $about->about_title_en = $request->title_en;
            $about->about_title_ru = $request->title_ru;
            $about->about_text_az = $request->text_az;
            $about->about_text_en = $request->text_en;
            $about->about_text_ru = $request->text_ru;
            if ($request->hasFile('img')){
                $name = time().".".$request->file("img")->extension();
                $about->about_image = $name;
                $request->file("img")->move(public_path().'/images', $name);
            }
            $about->save();
            return redirect('/admin/about-admin');
        }
}
