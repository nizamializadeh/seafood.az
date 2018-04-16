<?php

namespace App\Http\Controllers\Backend;

use App\Blog;
use App\BlogCategory;
use DOMDocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
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
        $blogs = Blog::all();
        return view('admin.pages.blogs.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::OrderBy('id', 'DESC')->get();
        return view('admin.pages.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->blog_title_az = $request->title_az;
        $blog->blog_title_en = $request->title_en;
        $blog->blog_title_ru = $request->title_ru;

        $dom = new DomDocument();
        $dom->loadHtml($blog, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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

        $blog->blog_text_az = $dom->saveHTML();
        $blog->blog_text_az = $request->text_az;

        $blog->blog_text_en = $dom->saveHTML();
        $blog->blog_text_en = $request->text_en;

        $blog->blog_text_ru = $dom->saveHTML();
        $blog->blog_text_ru = $request->text_ru;

        $blog->keywords = $request->keywords;
        $blog->blog_cat_id = $request->category_id;
        $blog->count = 3;
        if ($request->hasFile('img')){
            $name = time().".".$request->file("img")->extension();
            $blog->blog_image = $name;
            $request->file("img")->move(public_path().'/images', $name);
        }
        $blog->save();
        return redirect('/admin/blogs-admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.pages.blogs.show', compact('id', 'blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = BlogCategory::OrderBy('id', 'DESC')->get();
        $data = Blog::find($blog);
        return view('admin.pages.blogs.edit', compact('data', 'blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog)
    {
        $blog = Blog::find($blog);
        $blog->blog_title_az = $request->title_az;
        $blog->blog_title_en = $request->title_en;
        $blog->blog_title_ru = $request->title_ru;

        $dom = new DomDocument();
        $dom->loadHtml($blog, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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

        $blog->blog_text_az = $dom->saveHTML();
        $blog->blog_text_az = $request->text_az;

        $blog->blog_text_en = $dom->saveHTML();
        $blog->blog_text_en = $request->text_en;

        $blog->blog_text_ru = $dom->saveHTML();
        $blog->blog_text_ru = $request->text_ru;

        $blog->keywords = $request->keywords;
        $blog->blog_cat_id = $request->category_id;
        $blog->count = 3;
        if ($request->hasFile('img')){
            $name = time().".".$request->file("img")->extension();
            $blog->blog_image = $name;
            $request->file("img")->move(public_path().'/images', $name);
        }
        $blog->save();
        return redirect('/admin/blogs-admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/admin/blogs-admin');
    }
}
