@extends('frontend.index')
@section('breadcamb')
    <!-- START BREADCAMB AREA -->
    <div class="breadcamb">
        <div class="breadcamb__name ptb--150 bg--1" data-black-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcamb__inner text-center">
                            <h2>Visit our shop</h2>
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
                                <li><a href="single-product.html#">Home</a></li>
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

        <!-- START SHOP PRODUCTS -->
        <section class="sp-products-area ptb--150 bg--white">
            <div class="product-right-sidebar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="single-product">
                                <!-- START SINGLE PRODUCT INFORMATION -->
                                <div class="single-product__info">

                                    <!-- START SINGLE PRODUCT LEFT INFO -->
                                    <div class="spi__images tab-content" id="single-pdoduct--images">
                                        <a class="spi-image-popup tab-pane fade show active" href="{{ '/images/'.$product->product_image }}" target="_blank" id="product-image-1">
                                            <img src="{{ '/images/'.$product->product_image }}" alt="single product thumb">
                                        </a>
                                        <a class="spi-image-popup tab-pane fade" id="product-image-2" href="images/single-product/large/2.jpg">
                                            <img src="images/single-product/medium/2.jpg" alt="single product thumb">
                                        </a>
                                        <a class="spi-image-popup tab-pane fade" id="product-image-3" href="images/single-product/large/3.jpg">
                                            <img src="images/single-product/medium/3.jpg" alt="single product thumb">
                                        </a>
                                    </div><!-- END SINGLE PRODUCT LEFT INFO -->

                                    <!-- START SINGLE PRODUCT RIGHT INFO -->
                                    <div class="spi__contents">
                                        <div class="spi-info__top">
                                            <div class="title-ratings">
                                                <h2>{{ $product->product_name_az }}</h2>
                                                <ul class="ratings">
                                                    <li class="rated"><i class="fa fa-star"></i></li>
                                                    <li class="rated"><i class="fa fa-star"></i></li>
                                                    <li class="rated"><i class="fa fa-star"></i></li>
                                                    <li class="rated"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="old-new-price">
                                                <span class="new-price">{{ $product->price }} AZN</span>
                                            </div>
                                        </div>
                                        <p>{{ $product->product_details_az }}</p>
                                        <div class="spi-units">

                                            <div class="spi-units__single unit-quantity">
                                                <h5 class="spi-title">Quantity :</h5>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <ul>
                                                <li>
                                                    <form action="{{ url('/cart-post') }}" method="POST">
                                                        {{ csrf_field() }}

                                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                                        <input type="hidden" name="name" value="{{ $product->product_name_az }}">
                                                        <input type="hidden" name="price" value="{{ $product->precent }}">
                                                        <button type="submit" class="btn"><span class="text">add to cart</span> <span class="icon"><i class="fa fa-shopping-basket"></i></span></button>
                                                    </form>
                                                </li>
                                                <li><a href="single-product.html#"><span class="icon"><i class="fa fa-heart-o"></i></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="spi__tab-trigger nav" role="tablist">
                                            <a data-toggle="tab" href="single-product.html#product-image-1">
                                                <img src="{{ url('images/single-product/small/2.jpg') }}" alt="single image">
                                            </a>
                                            <a data-toggle="tab" href="single-product.html#product-image-2">
                                                <img src="{{ url('images/single-product/small/3.jpg') }}" alt="single image">
                                            </a>
                                            <a data-toggle="tab" href="single-product.html#product-image-3">
                                                <img src="{{ url('images/single-product/small/1.jpg') }}" alt="single image">
                                            </a>
                                        </div>
                                    </div><!-- END SINGLE PRODUCT RIGHT INFO -->
                                </div><!-- END SINGLE PRODUCT INFORMATION -->

                                <!-- START SINGLE PRODUCT DETAILS -->
                                <div class="single-product__details pt--100">
                                    <h4 class="small-title">Details</h4>
                                    <p>{!!  $product->product_desc_az !!}</p>
                                </div><!-- END SINGLE PRODUCT DETAILS -->

                                <!-- START SIGNLE PRODUCT COMMENT FORM -->
                                <div class="single-product__comment">
                                    <h4 class="small-title">Leave your comments</h4>
                                    <p>Lets do better design was born and I will give you a mplete of the tem, and pund  actual teachings of the great explorer ecial contet to make it beautiful know how to pursu obis est eligend</p>
                                    <div class="comment-box">
                                        <form action="#">
                                            <div class="single-input">
                                                <input type="text" placeholder="Enter your name">
                                            </div>
                                            <div class="single-input">
                                                <input type="text" placeholder="Your email">
                                            </div>
                                            <div class="single-input">
                                                <input type="text" placeholder="Phone">
                                            </div>
                                            <div class="single-input">
                                                <input type="text" placeholder="Subject">
                                            </div>
                                            <div class="single-input textarea">
                                                <textarea cols="3" rows="3" placeholder="Write your comment here"></textarea>
                                            </div>
                                            <div class="single-input">
                                                <button type="submit" class="cr-btn cr-round cr-round--lg cr-btn--transparent cr-btn--xs cr-btn--icon"><span>send</span><span class="btn-icon"><i class="icofont icofont-long-arrow-right"></i></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- END SIGNLE PRODUCT COMMENT FORM -->
                            </div>
                        </div>
                        <div class="col-lg-3 mt-md-50 mt-sm-50 mt-xs-50">
                            <!-- START SIDEBAR WIDGETS -->
                            <div class="sidebar widgets">
                                <!-- START SINGLE WIDGET -->
                                <div class="single-widget sb-categories">
                                    <h4 class="widget-title">Categories</h4>
                                    <ul>
                                        @foreach($categories as $category)
                                        <li><a href="">{{ $category->product_cat_az }}</a></li>
                                        @endforeach
                                    </ul>
                                </div><!-- END SINGLE WIDGET -->
                            </div><!-- END SIDEBAR WIDGETS -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END SHOP PRODUCTS -->

        <!-- START RELATED PRODUCT -->
        <section class="cr-section product-section bg--white pb--140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-title text-center">
                            <h2>Related Products...</h2>
                            <p>Lets do better design was born and I will give you a complete account of the tem, and pund  actual teachings of the great explorer use sme special contet to make it beautiful</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products products--no-margin">
                <div class="container">
                    <div class="row">
                        <!-- START SINGLE PRODUCT -->
                        <div class="col-lg-3 cl-12 col-md-4 col-sm-6 col-12">
                            <div class="product">
                                <div class="product__thumb">
                                    <img src="images/products/2.png" alt="single product">
                                </div>
                                <a href="single-product.html" class="product-buy"><i class="fa fa-opencart"></i></a>
                                <div class="product__content">
                                    <div class="product__content__inner">
                                        <h5><a href="single-product.html">Fishing Reel</a></h5>
                                        <span class="price">$135.00</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END SINGLE PRODUCT -->
                        <!-- START SINGLE PRODUCT -->
                        <div class="col-lg-3 cl-12 col-md-4 col-sm-6 col-12">
                            <div class="product">
                                <div class="product__thumb">
                                    <img src="images/products/3.png" alt="single product">
                                </div>
                                <a href="single-product.html" class="product-buy"><i class="fa fa-opencart"></i></a>
                                <div class="product__content">
                                    <div class="product__content__inner">
                                        <h5><a href="single-product.html">Fishing Combo</a></h5>
                                        <span class="price">$444.00</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END SINGLE PRODUCT -->
                        <!-- START SINGLE PRODUCT -->
                        <div class="col-lg-3 cl-12 col-md-4 col-sm-6 col-12">
                            <div class="product">
                                <div class="product__thumb">
                                    <img src="images/products/4.png" alt="single product">
                                </div>
                                <a href="single-product.html" class="product-buy"><i class="fa fa-opencart"></i></a>
                                <div class="product__content">
                                    <div class="product__content__inner">
                                        <h5><a href="single-product.html">Fishing Baits</a></h5>
                                        <span class="price">$105.00</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END SINGLE PRODUCT -->
                        <!-- START SINGLE PRODUCT -->
                        <div class="col-lg-3 cl-12 col-md-4 col-sm-6 col-12 hidden-md">
                            <div class="product">
                                <div class="product__thumb">
                                    <img src="images/products/5.png" alt="single product">
                                </div>
                                <a href="single-product.html" class="product-buy"><i class="fa fa-opencart"></i></a>
                                <div class="product__content">
                                    <div class="product__content__inner">
                                        <h5><a href="single-product.html">Fishing Backpack</a></h5>
                                        <span class="price">$$225.00</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END SINGLE PRODUCT -->
                    </div>
                </div>
            </div>
        </section><!-- END RELATED PRODUCT -->

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