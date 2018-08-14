<!doctype html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ MetaTag::get('title') }}</title>
    {!! MetaTag::tag('description') !!}

    {!! MetaTag::tag('image') !!}

    {!! MetaTag::openGraph() !!}

    {!! MetaTag::twitterCard() !!}

    {{--Set default share picture after custom section pictures--}}
    {!! MetaTag::tag('image', asset('images/default-logo.png')) !!}

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icon.png') }}">

    <!-- Google font (font-family: 'Hind', sans-serif;) -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Hind:300,400,500,600') }}" rel="stylesheet">
    <!-- Google font (font-family: 'Arizonia', cursive;) -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Arizonia') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link href="{{ url('https://use.fontawesome.com/releases/v5.0.6/css/all.css') }}" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?ver=1.0.3">

    <!-- include the style -->
    <link rel="stylesheet" href="{{ asset('assets/css/alertify.min.css') }}" />
    <!-- include a theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/default.min.css') }}" />

    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Modernizer js -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

    {{--Stripe--}}
    <script src="{{ url('https://js.stripe.com/v3/') }}"></script>
</head>
<body>
<div class="fakeloader"></div>


<!-- START WRAPPER -->
<div class="wrapper">

    <!-- START HEADER AREA -->
    <header id="header-area" class="header header--style-2 fixed--header bg--white sticky-header">
        <div class="header__large__menu">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ url('/images/fishlogo.png') }}" style="width: 250px;" alt="logo">
                </a>
            </div>
            <nav class="header__menu">
                <ul>
                    <li><a href="{{ url('/') }}">{{ Lang::get('navbar.home') }}</a></li>
                    <li><a href="{{ url('/aboutus') }}">ABOUT</a></li>
                    <li><a href="{{ url('/shop') }}">SHOP</a></li>
                    <li><a href="{{ url('/camps') }}">Camps</a></li>
                    <li><a href="{{ url('/blogs') }}">Blog</a></li>
                    <li><a href="{{ url('/contact') }}">CONTACT</a></li>
                    {{--<li><a href=""><i class="fas fa-sign-in-alt"></i></a></li>--}}
                </ul>
            </nav>
            <div class="header__side__icons">
                <ul class="nav">
                    <li><a href="{{ url('/cart') }}"><i class="fa fa-shopping-cart"></i> @if(Cart::instance('default')->count() > 0) <span class="shop-items">{{ Cart::instance('default')->count() }}</span> @endif</a>
                        <div class="minicart">
                            <div class="minicart__products">
                                @if(Cart::count() > 0)
                                    @foreach(Cart::content() as $item)
                                        @php
                                            $link_product = str_slug($item->model->product_name_en, '_')
                                        @endphp
                                        @php
                                            $number = $item->model->price;
                                            $subprice = number_format($number, 2);
                                        @endphp
                                            <div class="single-product">
                                                <div class="single-product__thumb">
                                                    <a href="{{ url('/product/'.$item->id.'/'.$link_product) }}">
                                                        <img src="{{ '/images/'.$item->model->product_image }}" alt="single product">
                                                    </a>
                                                </div>
                                                <div class="single-product__content">
                                                    <a href="{{ url('/product/'.$item->id.'/'.$link_product) }}">{{ $item->model->product_name_az }}</a>
                                                    <p><span>X</span>{{ $item->qty }}  {{ $item->total() }} AZN</p>
                                                </div>
                                                <div class="single-product__close">
                                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="minicart-product-close"><i class="fa fa-trash-o"></i></button>
                                                    </form>
                                                </div>

                                            </div>
                                    @endforeach
                            </div>
                            <div class="minicart__bottom">
                                <div class="total-price d-flex justify-content-between">
                                    <span>Subtotal:</span>
                                    <span>{{ Cart::subtotal() }} AZN</span>
                                </div>
                                <div class="minicart__buttons d-flex justify-content-between">
                                    <a href="{{ url('/cart') }}" class="cr-btn cr-btn--xs">View Cart</a>
                                    <a href="{{ url('/checkout') }}" class="cr-btn cr-btn--xs">Checkout</a>
                                </div>
                            </div>
                            @else
                            No items in cart
                            @endif
                        </div>
                    </li>

                    @if (Auth::guest())
                    <li><a class="" href="{{ url('/login') }}"><i class="fa fa-user-o"></i></a></li>
                    @else
                        <li><a href=""><i class="fa fa-user-o"></i></a>
                            <div class="minicart">
                                <div class="minicart__products">
                                    <div class="single-product">

                                        <div class="single-product__content">
                                            <a href="{{ url('/user/profile') }}"><i class="fa fa-chevron-right"></i>&nbsp Profile</a>
                                        </div>

                                    </div>

                                </div>

                                    <div class="minicart__buttons d-flex justify-content-between">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="cr-btn">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                            </div>
                        </li>
                        @endif

                    <li><a href=""><i class="fa fa-globe"></i></a>
                        <div class="minicart">
                            <div class="minicart__products">
                                <div class="single-product">
                                    <div class="single-product__thumb">
                                        <a href="{{url('lang/az')}}">AZE</a>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="single-product__thumb">
                                        <a href="{{url('lang/en')}}">ENG</a>
                                    </div>
                                </div><div class="single-product">
                                    <div class="single-product__thumb">
                                        <a href="{{url('lang/ru')}}">RUS</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="mobile-menu hidden-lg hidden-xlg hidden-xx hidden-sp">
            </div>
        </div>
    </header><!-- END HEADER AREA -->

    @yield('banner')

    @yield('breadcamb')

    @yield('content')

    <!-- START FOOTER AREA -->
    <footer id="footer" class="footer fixed--footer">
        <!-- START FOOTER TOPSIDE -->
        <div class="footer__topside bg--grey ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ft-widget">
                            <div class="ft-widget__single useful-links">
                                <h5 class="ft-widget__title">Useful Links</h5>
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About us</a></li>
                                    <li><a href="{{ url('/shop') }}">Products</a></li>
                                    <li><a href="{{ url('/camps') }}">Camps</a></li>
                                    <li><a href="{{ url('/blogs') }}">Blog</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </div>
                            <div class="ft-widget__single twitter-feed">
                                <h5 class="ft-widget__title"></h5>


                            </div>
                            <div class="ft-widget__single flicker-feed">
                                <h5 class="ft-widget__title"></h5>

                            </div>
                            {{--<div class="ft-widget__single contact-info">--}}
                                {{--<h5 class="ft-widget__title">Contact Info</h5>--}}
                                {{--<div class="contact-info__inner">--}}
                                    {{--<div class="address">--}}
                                        {{--<p>{{ $contact->address }}</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="numbers">--}}
                                        {{--<p><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></p>--}}
                                    {{--</div>--}}
                                    {{--<div class="mails">--}}
                                        {{--<p><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END FOOTER TOPSIDE -->
        <!-- START FOOTER BOTTOMSIDE -->
        <div class="footer__bottomside bg--dark ptb--20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright text-center">
                            <p>&copy;Copyrihgt <a href="https://hastech.company">Fish Market</a>, All rights Reverved, 2018</p> <p>Site by
                                <a href="http://moorget.com/" target="_blank">Moorget Group</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END FOOTER BOTTOMSIDE -->
    </footer><!-- END FOOTER AREA -->

<!-- JS Files -->

<script src="{{ asset('assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/alertify.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/active.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
@yield('extra-js')
{{--<script src="{{ asset('assets/js/slick-slider.min.js') }}"></script>--}}
</body>
</html>
