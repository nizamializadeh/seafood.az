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
                            @if($product->activity == '1')
                            @php
                                $link_product = str_slug($product->product_name_en, '-')
                            @endphp
                            @php
                                $number = $product->price;
                                $subprice = number_format($number, 2);
                            @endphp
                        <!-- START SINGLE PRODUCT -->
                        <div class="col-lg-3 cl-12 col-md-4 col-sm-6 col-12">
                            <div class="product">
                                <div class="product__thumb">
                                    <img src="{{ url('/images/'.$product->product_image) }}" alt="{{ $product->product_name_en }}">
                                </div>
                                <form action="{{ url('/cart-post') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->product_name_az }}">
                                    <input type="hidden" name="price" value="{{ $subprice }}">
                                    <input type="hidden" value="1" name="quantity">
                                    <button type="submit" class="product-buy"><i class="fa fa-shopping-cart"></i></button>
                                </form>
                                <div class="product__content">
                                    <div class="product__content__inner">
                                        <h5><a href="{{ url('/product/'.$product->id.'/'.$link_product) }}">{{ $product->$product_name }}</a></h5>
                                        <span class="price">{{ $subprice }} AZN</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END SINGLE PRODUCT -->
                            @endif
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
                                    <img src="{{ url('/images/'.$blog->blog_image) }}" class="img-responsive" style="width: 100%;height: 265px;" alt="blog thumb">
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
    </main><!-- END MAIN CONTENT -->
    @endsection