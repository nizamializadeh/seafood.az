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
        <div class="breadcamb__tree bg--pattern ptb--20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="breadcamb__tree__inner">
                            <ul>
                                <li><a href="blog-grid.html#">Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="breadcamb__tree__social social-icons social-icons--rounded text-right">
                            <ul>
                                <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                <li class="google-plus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
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
                                                <img src="{{ url('/images/'.$blog->blog_image) }}" alt="blog {{ $blog->blog_title_en }}">
                                            </div>
                                            <div class="blog__sidecontent">
                                                <ul>
                                                    <li>25<span>Sep</span></li>
                                                    <li>Views<span>75</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="blog__content">
                                            <div class="blog__content__details">
                                                <h5><a href="{{ url('/blog/'.$blog->id.'/'.$link_blog) }}">{{ $blog->$blog_title }}</a></h5>
                                                <p>Lets do better design was born and I will lete account of the tem, and pund  actual achings of the great explorer use sme special</p>
                                            </div>
                                        </div>
                                    </article>
                                </div><!-- END SINGLE BLOG -->
                                    @endforeach
                            </div>
                            <!-- START PAGINATION -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="cr-pagination text-center">
                                        <ul>
                                            <li><a href="blog-grid.html">01</a></li>
                                            <li><a href="blog-grid.html">02</a></li>
                                            <li class="active"><a href="blog-grid.html">03</a></li>
                                            <li><a href="blog-grid.html">04</a></li>
                                            <li><a href="blog-grid.html">05</a></li>
                                            <li><a href="blog-grid.html">06</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- END PAGINATION -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END BLOG GRID AREA -->

        <!-- START NEWSLETTER AREA -->
        <section class="cr-section newsletter-area bg--pattern ptb--120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="newsletter text-center">
                            <div class="newsletter__content">
                                <h2>You can updated with us by Subscribing our newsletter</h2>
                                <h5>So! why you’r late? let’s start subscription...</h5>
                            </div>
                            <div class="newsletter__form">
                                <form action="#">
                                    <input type="text" placeholder="Enter yur email here...">
                                    <button type="submit"><img src="images/icons/fish-send-icon.png" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END NEWSLETTER AREA -->

    </main><!-- END MAIN CONTENT -->
    @endsection