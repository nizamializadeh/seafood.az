<?php

namespace App\Http\Controllers\Backend;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $services = Service::OrderBy('id', 'DESC')->get();
        return view('admin.pages.service.services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->serv_title_az = $request->title_az;
        $service->serv_title_en = $request->title_en;
        $service->serv_title_ru = $request->title_ru;
        $service->serv_desc_az = $request->desc_az;
        $service->serv_desc_en = $request->desc_en;
        $service->serv_desc_ru = $request->desc_ru;
        $service->serv_icon = $request->icon;
        if ($request->hasFile('img')){
            $name = time().".".$request->file("img")->extension();
            $service->serv_image = $name;
            $request->file("img")->move(public_path().'/images', $name);
        }
        $service->save();
        return redirect('/admin/services-admin');
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
    public function edit(Service $service)
    {
        $data = Service::find($service);
        return view('admin.pages.service.edit', compact('data', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $service)
    {
        $service = Service::find($service);
        $service->serv_title_az = $request->title_az;
        $service->serv_title_en = $request->title_en;
        $service->serv_title_ru = $request->title_ru;
        $service->serv_desc_az = $request->desc_az;
        $service->serv_desc_en = $request->desc_en;
        $service->serv_desc_ru = $request->desc_ru;
        $service->serv_icon = $request->icon;
        if ($request->hasFile('img')){
            $name = time().".".$request->file("img")->extension();
            $service->serv_image = $name;
            $request->file("img")->move(public_path().'/images', $name);
        }
        $service->save();
        return redirect('/admin/services-admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/admin/services-admin');
    }
}
