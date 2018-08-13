@extends('frontend.index')
@section('content')
    <!-- START MAIN CONTENT -->
    <main class="main-content">
        @if(session()->has('success_message'))
            <script type="javascript">
                $(function () {
                    alertify.success('Success notification message.');
                })
            </script>
        @endif
        <!-- START SHOP PRODUCTS -->
        <section class="sp-products-area ptb--150 bg--white">
            <div class="product-right-sidebar">
                <div class="container">
                    @if($product->activity == '1')
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
                                    </div><!-- END SINGLE PRODUCT LEFT INFO -->
                                    @php
                                        $number = $product->price;
                                        $subprice = number_format($number, 2);
                                    @endphp
                                    <!-- START SINGLE PRODUCT RIGHT INFO -->
                                    <div class="spi__contents">
                                        <div class="spi-info__top">
                                            <div class="title-ratings">
                                                <h2>{{ $product->product_name_az }}</h2>
                                            </div>
                                            <div class="old-new-price">
                                                <span class="new-price">{{ $subprice }} AZN</span>
                                            </div>
                                        </div>
                                        <form action="{{ url('/cart-post') }}" method="POST">
                                            {{ csrf_field() }}
                                        <div class="spi-units">
                                            <div class="spi-units__single unit-quantity">
                                                <h5 class="spi-title">Quantity (@if($product->quantity_style == '0') Kg  @else eded @endif ) :</h5>
                                                <div class="cart-plus-minus">
                                                    @if($product->quantity_style == '0')
                                                        <input type="text" value="5" min="5"  name="quantity">
                                                    @else
                                                        <input type="text" value="1" name="quantity" class="cart-plus-minus-box">
                                                    @endif
                                                </div>
                                            </div>
                                            {{--<div class="spi-units__single unit-review">--}}
                                                {{--<h5 class="spi-title">Reviews : </h5>--}}
                                                {{--<span>25 review</span>--}}
                                            {{--</div>--}}
                                        </div>
                                        <div class="product-action">
                                            <ul>
                                                <li>
                                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                                        <input type="hidden" name="name" value="{{ $product->product_name_az }}">
                                                        <input type="hidden" name="price" value="{{ $subprice }}">
                                                        <button type="submit" class="btn"><span class="text">ADD TO CART</span> <span class="icon"><i class="fa fa-shopping-cart"></i></span></button>
                                                </li>
                                            </ul>
                                        </div>
                                        </form>
                                        <p>{{ $product->product_details_az }}</p>
                                    </div><!-- END SINGLE PRODUCT RIGHT INFO -->
                                </div><!-- END SINGLE PRODUCT INFORMATION -->

                                <!-- START SINGLE PRODUCT DETAILS -->
                                <div class="single-product__details pt--100">
                                    <h4 class="small-title">Details</h4>
                                    <p>{!!  $product->product_desc_az !!}</p>
                                </div><!-- END SINGLE PRODUCT DETAILS -->
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
                                            @php
                                                $link_category = str_slug($category->product_cat_en);
                                            @endphp
                                            <li><a href="{{ url('/category/'.$category->id.'/'.$link_category) }}">{{ $category->product_cat_az }}</a></li>
                                        @endforeach
                                    </ul>
                                </div><!-- END SINGLE WIDGET -->
                            </div><!-- END SIDEBAR WIDGETS -->
                        </div>
                    </div>
                        @else
                        <h1>No item</h1>
                    @endif
                </div>
            </div>
        </section><!-- END SHOP PRODUCTS -->

    </main><!-- END MAIN CONTENT -->
    @endsection