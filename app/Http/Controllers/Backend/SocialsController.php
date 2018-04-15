<?php

namespace App\Http\Controllers\Backend;

use App\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialsController extends Controller
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
        $data = Social::orderBy('id', 'DESC')->get();

        return view('admin.pages.social.socials', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.social.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $social = new Social();
        $social->link = $request->link;
        $social->icon = $request->icon;
        $social->save();
        return redirect('/admin/socials');
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
    public function edit(Social $social){
        $data = Social::find($social);
        return view('admin.pages.social.edit', compact('data', 'social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $social)
    {
        $social = Social::find($social);
        $social->link = $request->link;
        $social->icon = $request->icon;
        $social->save();
        return redirect('/admin/socials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social = Social::find($id);
        $social->delete();
        return redirect('/admin/socials');
    }
}
