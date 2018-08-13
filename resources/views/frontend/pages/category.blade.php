@extends('frontend.index')

@section('breadcumb')
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
                                <li><a href="shop.html#">Home</a></li>
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
            <div class="products sp-products">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mt-md-50 mt-sm-50 mt-xs-50">
                            <!-- START SIDEBAR WIDGETS -->
                            <div class="sidebar widgets">
                                <div class="fixed-box1">
                                    <!-- START SINGLE WIDGET -->
                                    <div class="single-widget sb-categories">
                                        <h4 class="widget-title">Categories</h4>
                                        <ul>
                                            @foreach($categories as $category)
                                                @php
                                                    $link_category = str_slug($category->product_cat_en);
                                                @endphp
                                                <li><a href="{{ url('/category/'.$category->id.'/'.$link_category) }}">{{ $category->product_cat_az }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div><!-- END SINGLE WIDGET -->
                                </div>
                            </div><!-- END SIDEBAR WIDGETS -->
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="row">
                            @foreach($products as $product)
                                @if($product->activity == '1')
                                    @php
                                        $number = $product->price;
                                        $subprice = number_format($number, 2);
                                    @endphp
                                    <!-- START SINGLE PRODUCT -->
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                            <div class="product">
                                                <div class="product__thumb">
                                                    <img src="{{ '/images/'.$product->product_image }}" alt="single product">
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
                                                        @php
                                                            $link_product = str_slug($product->product_name_en, '_')
                                                        @endphp
                                                        <h5><a href="{{ url('/product/'.$product->id.'/'.$link_product) }}">{{ $product->product_name_az }}</a></h5>
                                                        <span class="price">{{ $subprice }} AZN</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- END SINGLE PRODUCT -->
                                    @else
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END SHOP PRODUCTS -->

    </main><!-- END MAIN CONTENT -->
@endsection