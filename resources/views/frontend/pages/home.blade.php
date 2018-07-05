@extends('frontend.index')
@php
    $level_name = 'name_'.app()->getLocale();
    $level_desc = 'desc_'.app()->getLocale();
    $cat_name = 'name_'.app()->getLocale();
    $img_name = 'name_'.app()->getLocale();
    $feed_desc = 'desc_'.app()->getLocale();
    $feed_name = 'name_'.app()->getLocale();
    $feed_position = 'position_'.app()->getLocale();
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
@endphp
@section('banner')
    <!-- START BANNER AREA -->
    <div class="banner-area">
        <div class="banner banner-carousel-active owl-carousel owl-navigation--1">
            @foreach($sliders as $slider)
            <!-- START BANNER SINGLE -->
            <div class="banner__single banner-bg--{{ $slider->id }}" style="background: url({{ url("/images/".$slider->slider_image) }})" data-black-overlay="{{ $slider->id }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner__single__content text-center">
                                <h3 class="">{{ $slider->$slider_title }}</h3>
                                <h1 class="heading--font">{!! $slider->$slider_desc !!}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END BANNER SINGLE -->
            @endforeach
        </div>
    </div><!-- END BANNER AREA -->
    @endsection


@section('content')
    <main class="main-content">

        {{--<!-- START FEATURES SECTION -->--}}
        {{--<section class="cr-section features-area bg--white">--}}
            {{--<!-- START FEATURE TOPSIDE -->--}}
            {{--<div class="feature-area__top">--}}
                {{--<div class="features features--style-2">--}}
                    {{--<!-- START SINGLE FEATURE -->--}}
                    {{--<div class="feature special">--}}
                        {{--<h2 class="color--white">35% Discount</h2>--}}
                        {{--<h3 class="color--white">For our all new member</h3>--}}
                        {{--<a href="index-2.html#" class="cr-btn cr-btn--theme cr-round cr-round--lg cr-border"><span>Join Now</span></a>--}}
                    {{--</div><!-- END SINGLE FEATURE -->--}}
                    {{--<!-- START SINGLE FEATURE -->--}}
                    {{--<div class="feature">--}}
                        {{--<h4>Available Fishing Stuff</h4>--}}
                        {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund the actual teachings of the great explorer</p>--}}
                    {{--</div><!-- END SINGLE FEATURE -->--}}
                    {{--<!-- START SINGLE FEATURE -->--}}
                    {{--<div class="feature">--}}
                        {{--<h4>Low Fishing Cost</h4>--}}
                        {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund the actual teachings of the great explorer</p>--}}
                    {{--</div><!-- END SINGLE FEATURE -->--}}
                    {{--<!-- START SINGLE FEATURE -->--}}
                    {{--<div class="feature">--}}
                        {{--<h4>Fishing Compitition</h4>--}}
                        {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund the actual teachings of the great explorer</p>--}}
                    {{--</div><!-- END SINGLE FEATURE -->--}}
                {{--</div>--}}
            {{--</div><!-- END FEATURE TOPSIDE -->--}}
        {{--</section><!-- END FEATURES SECTION -->--}}

        <!-- START SERVICE AREA -->
        <section class="cr-section service-area ptb--150 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-title text-center">
                            <h2>What you’r get here...</h2>
                            <p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use sme special contet to make it beautiful</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="hex-services text-center">
                            <div class="row">
                            @foreach($services as $service)
                                <!-- START  SINGLE SERVICE -->
                                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6">
                                        <div class="hex-service">
                                            <div class="hexagon">
                                                <div class="hexagon__inner1">
                                                    <div class="hexagon__inner2">
                                                        <div class="hexagon__content" data-black-overlay="5">
                                                            <img src="{{ url('/images/'.$service->serv_image) }}" alt="service image">
                                                            <h4><a class="text-center" href="">{{ $service->$serv_title }}</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hex-service__icon">
                                                <a href="" style="color: white;"><i class="fa fa-{{ $service->serv_icon }} fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END  SINGLE SERVICE -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END SERVICE AREA -->

        <!-- START VIDEO AREA -->
        <div class="cr-section video-area bg--2 ptb--150" data-black-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video homepage-video text-center">
                            <a href="https://www.youtube.com/watch?v=D0XX57oVYgU" class="video-play-button"><img src="images/icons/icon-play.png" alt="play icon"></a>
                            <h2>Freshwater Fishing</h2>
                            <h4>Tricks  & Tips let’s join...</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END VIDEO AREA -->

        <!-- START TEAM AREA -->
        {{--<section class="cr-section team-area bg--white ptb--150">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-lg-8 offset-lg-2">--}}
                        {{--<div class="section-title text-center">--}}
                            {{--<h2>Meet our team...</h2>--}}
                            {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use sme special contet to make it beautiful</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-lg-12 col-md-12 col-12">--}}
                        {{--<div class="slideteam">--}}
                            {{--<!-- START SLIDETEAM CONTENT -->--}}
                            {{--<div class="slideteam__content--wrapper">--}}
                                {{--<div class="slideteam__content">--}}
                                    {{--<!-- START SINGLE SLIDE -->--}}
                                    {{--<div class="slideteam__content__single">--}}
                                        {{--<h3>Akcent Chester, <small>Fisher</small></h3>--}}
                                        {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings olorer use </p>--}}
                                        {{--<div class="social-icons social-icons--rounded social-icons--medium">--}}
                                            {{--<ul>--}}
                                                {{--<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>--}}
                                                {{--<li class="google-plus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- //SINGLE SLIDE -->--}}
                                    {{--<!-- START SINGLE SLIDE -->--}}
                                    {{--<div class="slideteam__content__single">--}}
                                        {{--<h3>Chester Bennington, <small>Fisher</small></h3>--}}
                                        {{--<p>Lets do as born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use </p>--}}
                                        {{--<div class="social-icons social-icons--rounded social-icons--medium">--}}
                                            {{--<ul>--}}
                                                {{--<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- END SINGLE SLIDE -->--}}
                                    {{--<!-- START SINGLE SLIDE -->--}}
                                    {{--<div class="slideteam__content__single">--}}
                                        {{--<h3>Joshef Stefen, <small>Fisher</small></h3>--}}
                                        {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use </p>--}}
                                        {{--<div class="social-icons social-icons--rounded social-icons--medium">--}}
                                            {{--<ul>--}}
                                                {{--<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>--}}
                                                {{--<li class="google-plus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- END SINGLE SLIDE -->--}}
                                    {{--<!-- START SINGLE SLIDE -->--}}
                                    {{--<div class="slideteam__content__single">--}}
                                        {{--<h3>Mike Sinodha, <small>Fisher</small></h3>--}}
                                        {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use </p>--}}
                                        {{--<div class="social-icons social-icons--rounded social-icons--medium">--}}
                                            {{--<ul>--}}
                                                {{--<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>--}}
                                                {{--<li class="google-plus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- END SINGLE SLIDE -->--}}
                                    {{--<!-- START SINGLE SLIDE -->--}}
                                    {{--<div class="slideteam__content__single">--}}
                                        {{--<h3>Julia Ann, <small>Fisher</small></h3>--}}
                                        {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use </p>--}}
                                        {{--<div class="social-icons social-icons--rounded social-icons--medium">--}}
                                            {{--<ul>--}}
                                                {{--<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>--}}
                                                {{--<li class="google-plus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- END SINGLE SLIDE -->--}}
                                    {{--<!-- START SINGLE SLIDE -->--}}
                                    {{--<div class="slideteam__content__single">--}}
                                        {{--<h3>Stefen Hawakin, <small>Fisher</small></h3>--}}
                                        {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use </p>--}}
                                        {{--<div class="social-icons social-icons--rounded social-icons--medium">--}}
                                            {{--<ul>--}}
                                                {{--<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>--}}
                                                {{--<li class="google-plus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- END SINGLE SLIDE -->--}}
                                    {{--<!-- START SINGLE SLIDE -->--}}
                                    {{--<div class="slideteam__content__single">--}}
                                        {{--<h3>Christian Stefen, <small>Fisher</small></h3>--}}
                                        {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use </p>--}}
                                        {{--<div class="social-icons social-icons--rounded social-icons--medium">--}}
                                            {{--<ul>--}}
                                                {{--<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>--}}
                                                {{--<li class="google-plus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- END SINGLE SLIDE -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- //START SLIDETEAM CONTENT -->--}}

                            {{--<!-- START TEAM FILTERS -->--}}
                            {{--<div class="slideteam__filters--wrapper">--}}
                                {{--<div class="slideteam__filters">--}}
                                    {{--<div class="slideteam-filters__single">--}}
                                        {{--<div class="filters__single__inner">--}}
                                            {{--<img src="images/team/slideteam/1.jpg" alt="team member">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="slideteam-filters__single">--}}
                                        {{--<div class="filters__single__inner">--}}
                                            {{--<img src="images/team/slideteam/2.jpg" alt="team member">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="slideteam-filters__single">--}}
                                        {{--<div class="filters__single__inner">--}}
                                            {{--<img src="images/team/slideteam/3.jpg" alt="team member">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="slideteam-filters__single">--}}
                                        {{--<div class="filters__single__inner">--}}
                                            {{--<img src="images/team/slideteam/4.jpg" alt="team member">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="slideteam-filters__single">--}}
                                        {{--<div class="filters__single__inner">--}}
                                            {{--<img src="images/team/slideteam/5.jpg" alt="team member">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="slideteam-filters__single">--}}
                                        {{--<div class="filters__single__inner">--}}
                                            {{--<img src="images/team/slideteam/6.jpg" alt="team member">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="slideteam-filters__single">--}}
                                        {{--<div class="filters__single__inner">--}}
                                            {{--<img src="images/team/slideteam/7.jpg" alt="team member">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div><!-- END TEAM FILTERS -->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section><!-- END TEAM AREA -->--}}

        {{--<!-- START TESTIMONIAL AREA -->--}}
        {{--<section class="cr-section testimonial-area bg--pattern">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-lg-8 offset-lg-2 ">--}}
                        {{--<div class="testimonial-slider owl-carousel testimonial--style-2 owl-navigation--2">--}}
                            {{--<!-- START SINGLE TESTIMONIAL -->--}}
                            {{--<div class="testimonial__single text-center">--}}
                                {{--<div class="testimonial__single__thumb">--}}
                                    {{--<img src="images/testimonial/1.png" alt="testimonial author">--}}
                                {{--</div>--}}
                                {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use sme special eautiful similiqu cia deserunt mollitia </p>--}}
                                {{--<div class="tesimonial__single__author">--}}
                                    {{--<h5>Stephen Williams</h5>--}}
                                    {{--<span>Creative Person</span>--}}
                                {{--</div>--}}
                            {{--</div><!-- END SINGLE TESTIMONIAL -->--}}
                            {{--<!-- START SINGLE TESTIMONIAL -->--}}
                            {{--<div class="testimonial__single text-center">--}}
                                {{--<div class="testimonial__single__thumb">--}}
                                    {{--<img src="images/testimonial/2.png" alt="testimonial author">--}}
                                {{--</div>--}}
                                {{--<p>Lets do better designu a complete account of the tem, and pund  actual teachings of the great explorer use sme special eautiful similique sunt in culpa qui officia deserunt mollitia </p>--}}
                                {{--<div class="tesimonial__single__author">--}}
                                    {{--<h5>Jhon Stephen</h5>--}}
                                    {{--<span>Creative Person</span>--}}
                                {{--</div>--}}
                            {{--</div><!-- END SINGLE TESTIMONIAL -->--}}
                            {{--<!-- START SINGLE TESTIMONIAL -->--}}
                            {{--<div class="testimonial__single text-center">--}}
                                {{--<div class="testimonial__single__thumb">--}}
                                    {{--<img src="images/testimonial/1.png" alt="testimonial author">--}}
                                {{--</div>--}}
                                {{--<p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use sme special eautiful similique sunt in culpa qui officia deserunt mollitia </p>--}}
                                {{--<div class="tesimonial__single__author">--}}
                                    {{--<h5>Micky Bale</h5>--}}
                                    {{--<span>Creative Person</span>--}}
                                {{--</div>--}}
                            {{--</div><!-- END SINGLE TESTIMONIAL -->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section><!-- END TESTIMONIAL AREA -->--}}

        <!-- START PRODUCT SECTION -->
        <section class="cr-section product-section bg--white ptb--150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-title text-center">
                            <h2>Let’s visit our shop...</h2>
                            <p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use sme special contet to make it beautiful</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products products--no-margin">
                <div class="container">
                    <div class="row">
                        @foreach($products as $product)
                            @php
                                $link_product = str_slug($product->product_name_en, '-')
                            @endphp
                        <!-- START SINGLE PRODUCT -->
                        <div class="col-lg-3 cl-12 col-md-4 col-sm-6 col-12">
                            <div class="product">
                                <div class="product__thumb">
                                    <img src="{{ url('/images/'.$product->product_image) }}" alt="{{ $product->product_name_en }}">
                                </div>
                                {{--<a href="single-product.html" class="product-buy"><i class="fa fa-opencart"></i></a>--}}
                                <div class="product__content">
                                    <div class="product__content__inner">
                                        <h5><a href="{{ url('/product/'.$product->id.'/'.$link_product) }}">{{ $product->$product_name }}</a></h5>
                                        <span class="price">{{ $product->price }} AZN</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END SINGLE PRODUCT -->
                        @endforeach
                    </div>
                </div>
            </div>
        </section><!-- END PRODUCT SECTION -->

        <!-- START BLOG AREA -->
        <section class="cr-section blog-area ptb--130 bg--pattern">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-title text-center">
                            <h2>Latest from blog...</h2>
                            <p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use sme special contet to make it beautiful</p>
                        </div>
                    </div>
                </div>
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
                                    <img src="{{ url('/images/'.$blog->blog_image) }}" alt="blog thumb">
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
                                    <p>{!! substr(($blog->$blog_text),0,200) !!}</p>
                                </div>
                            </div>
                        </article>
                    </div><!-- END SINGLE BLOG -->
                        @endforeach
                </div>
            </div>
        </section><!-- END BLOG AREA -->

        <!-- START BRAND LOGOS -->
        <div class="ce-section brand-logos-area ptb--150 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand-logo owl-carousel">
                            @foreach($brands as $brand)
                            <div class="brand-logo__single">
                                <a href="">
                                    <img src="{{ url('/images/'.$brand->brand_logo) }}" alt="brand logo">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END BRAND LOGOS -->

        {{--<!-- START NEWSLETTER AREA -->--}}
        {{--<section class="cr-section newsletter-area bg--pattern ptb--120">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-lg-10 offset-lg-1">--}}
                        {{--<div class="newsletter text-center">--}}
                            {{--<div class="newsletter__content">--}}
                                {{--<h2>You can updated with us by Subscribing our newsletter</h2>--}}
                                {{--<h5>So! why you’r late? let’s start subscription...</h5>--}}
                            {{--</div>--}}
                            {{--<div class="newsletter__form">--}}
                                {{--<form action="#">--}}
                                    {{--<input type="text" placeholder="Enter yur email here...">--}}
                                    {{--<button type="submit"><img src="images/icons/fish-send-icon.png" alt=""></button>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section><!-- END NEWSLETTER AREA -->--}}

    </main><!-- END MAIN CONTENT -->
    @endsection