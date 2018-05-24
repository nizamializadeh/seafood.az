@extends('frontend.index')
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
    {{--<div class="breadcamb">--}}
        {{--<div class="breadcamb__name ptb--150 bg--1" data-black-overlay="5">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-lg-12">--}}
                        {{--<div class="breadcamb__inner text-center">--}}
                            {{--<h2>Latest from blog</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="breadcamb__tree bg--pattern ptb--20">--}}
            {{--<div class="container">--}}
                {{--<div class="row align-items-center">--}}
                    {{--<div class="col-lg-6 col-md-6 col-sm-6 col-12">--}}
                        {{--<div class="breadcamb__tree__inner">--}}
                            {{--<ul>--}}
                                {{--<li><a href="single-blog.html#">Home</a></li>--}}
                                {{--<li>Shop</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-6 col-md-6 col-sm-6 col-12">--}}
                        {{--<div class="breadcamb__tree__social social-icons social-icons--rounded text-right">--}}
                            {{--<ul>--}}
                                {{--<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
                                {{--<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
                                {{--<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>--}}
                                {{--<li class="google-plus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div><!-- END BREADCAMB AREA -->--}}
    @endsection

@section('content')
    <!-- START MAIN CONTENT -->
    <main class="main-content">

        <!-- START BLOG GRID AREA -->
        <section class="single-blog-page-area ptb--150 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="single-blog">
                            <div class="single-blog__thumb">
                                <div class="single-blog__thumb__inner">
                                    <img src="{{ url('/images/'.$blog->blog_image) }}" style="" class="img-responsive" alt="blog thumb">
                                </div>
                                <div class="single-blog__sidecontent">
                                    <ul>
                                        <li>25<span>Sep</span></li>
                                        <li>Views<span>75</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-blog__content">
                                <h3 class="single-blog__title">{{ $blog->$blog_title }}</h3>
                                <p>{!! $blog->$blog_text !!}</p>
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mt-md-50 mt-sm-50 mt-xs-50">
                        <!-- START SIDEBAR WIDGETS -->
                        <div class="sidebar widgets blog-sidebar blog-sidebar--right">
                            <!-- START SINGLE WIDGET -->
                            <div class="single-widget sb-categories">
                                <h4 class="widget-title">Categories</h4>
                                <ul>
                                    @foreach($blog_categories as $category)
                                        @php
                                            $link_blog_cat = str_slug($category->blog_cat_name_en, '-')
                                        @endphp
                                        <li><a href="{{ url('/blog/category/'.$category->id.'/'.$link_blog_cat) }}">{{ $category->$cat_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div><!-- END SINGLE WIDGET -->
                            <!-- START SINGLE WIDGET -->
                            <div class="single-widget sb-morepost">
                                <h4 class="widget-title">Compititions</h4>
                                <ul>
                                    @foreach($blogs as $blog)
                                        @php
                                            $link_blog = str_slug($blog->blog_title_en, '-')
                                        @endphp
                                    <li>
                                        <a href="{{ url('/blog/'.$blog->id.'/'.$link_blog) }}">{{ $blog->$blog_title }}</a>
                                        <p>28 Setember, </p>
                                    </li>
                                    @endforeach
                                </ul>
                            </div><!-- END SINGLE WIDGET -->
                        </div><!-- END SIDEBAR WIDGETS -->
                    </div>
                </div>
            </div>
        </section><!-- END BLOG GRID AREA -->

    </main><!-- END MAIN CONTENT -->
    @endsection