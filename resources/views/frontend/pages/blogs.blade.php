@extends('frontend.index');
@php
    $about_title = 'title_'.app()->getLocale();
    $about_text = 'text_'.app()->getLocale();
    $slider_title = 'slider_title_'.app()->getLocale();
    $slider_desc = 'slider_desc_'.app()->getLocale();
    $feature_name = 'name_'.app()->getLocale();
    $feature_desc = 'desc_'.app()->getLocale();
    $serv_title = 'serv_title_'.app()->getLocale();
    $product_name = 'product_name_'.app()->getLocale();
    $blog_title = 'blog_title_'.app()->getLocale();
    $blog_text = 'blog_text_'.app()->getLocale();
    $cat_name = 'blog_cat_name_'.app()->getLocale();
@endphp
@section('breadcamb')
    <!-- START BREADCAMB AREA -->
    <div class="breadcamb">
        <div class="breadcamb__name ptb--150 bg--1" data-black-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcamb__inner text-center">
                            <h2>Latest from blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END BREADCAMB AREA -->
    @endsection

@section('content')
    <!-- START MAIN CONTENT -->
    <main class="main-content">

        <!-- START BLOG GRID AREA -->
        <div class="blog-grid-area ptb--150 bg--white">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="blog-grid">
                            <div class="row">
                                @foreach($blogs as $blog)
                                    @php
                                        $link_blog = str_slug($blog->blog_title_en, '-')
                                    @endphp
                                <!-- START SINGLE BLOG -->
                                <div class="col-lg-4">
                                    <article class="blog blog--style-2">
                                        <div class="blog__thumb">
                                            <div class="blog__thumb__inner">
                                                <img src="{{ url('/images/'.$blog->blog_image) }}" style="width: 100%;height: 264px;" class="img-responsive" alt="blog {{ $blog->blog_title_en }}">
                                            </div>
                                            <div class="blog__sidecontent">
                                                <ul>
                                                    <li>{{ date('j', strtotime($blog->created_at)) }}<span>{{ date('M', strtotime($blog->created_at)) }}</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="blog__content">
                                                <div class="blog__content__details">
                                                    <h5><a href="{{ url('/blog/'.$blog->id.'/'.$link_blog) }}">{{ $blog->$blog_title }}</a></h5>
                                                    <p>{!! substr(($blog->$blog_text),0,200) !!}</p>
                                                </div>
                                        </div>
                                    </article>
                                </div><!-- END SINGLE BLOG -->
                                    @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END BLOG GRID AREA -->

    </main><!-- END MAIN CONTENT -->
    @endsection