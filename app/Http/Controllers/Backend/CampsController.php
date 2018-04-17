<?php

namespace App\Http\Controllers\Backend;

use App\Camp;
use DOMDocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampsController extends Controller
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
        $camps = Camp::OrderBy('id', 'DESC')->get();
        return view('admin.pages.camps.camps', compact('camps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.camps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $camp = new Camp();
        $camp->camp_title_az = $request->title_az;
        $camp->camp_title_en = $request->title_en;
        $camp->camp_title_ru = $request->title_ru;

        $dom = new DomDocument();
        $dom->loadHtml($camp, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        // foreach <img> in the submited message
        foreach($images as $img){
            $src = $img->getAttribute('src');
            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                // Generating a random filename
                $filename = uniqid();
                $filepath = "/images/$filename.$mimetype";
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                    // resize if required
                    /* ->resize(300, 200) */
                    ->encode($mimetype, 100)  // encode file to the specified mimetype
                    ->save(public_path($filepath));
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            } // <!--endif
        } // <!--endforeach

        $camp->camp_desc_az = $dom->saveHTML();
        $camp->camp_desc_az = $request->desc_az;

        $camp->camp_desc_en = $dom->saveHTML();
        $camp->camp_desc_en = $request->desc_en;

        $camp->camp_desc_ru = $dom->saveHTML();
        $camp->camp_desc_ru = $request->desc_ru;

        $camp->date = $request->date;
        $camp->time = $request->time;
        $camp->location = $request->location;
        if ($request->hasFile('img')){
            $name = time().".".$request->file("img")->extension();
            $camp->camp_image = $name;
            $request->file("img")->move(public_path().'/images', $name);
        }
        $camp->save();
        return redirect('/admin/camps-admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $camp = Camp::findOrFail($id);
        return view('admin.pages.camps.show', compact('id', 'camp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Camp $camp)
    {
        $data = Camp::find($camp);
        return view('admin.pages.camps.edit', compact('camp', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $camp)
    {
        $camp = Camp::find($camp);
        $camp->camp_title_az = $request->title_az;
        $camp->camp_title_en = $request->title_en;
        $camp->camp_title_ru = $request->title_ru;
        $camp->camp_desc_az = $request->desc_az;
        $camp->camp_desc_en = $request->desc_en;
        $camp->camp_desc_ru = $request->desc_ru;
        $camp->date = $request->date;
        $camp->time = $request->time;
        $camp->location = $request->location;
        if ($request->hasFile('img')){
            $name = time().".".$request->file("img")->extension();
            $camp->camp_image = $name;
            $request->file("img")->move(public_path().'/images', $name);
        }
        $camp->save();
        return redirect('/admin/camps-admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $camp = Camp::find($id);
        $camp->delete();
        return redirect('/admin/camps-admin');
    }
}
