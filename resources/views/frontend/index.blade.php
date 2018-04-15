<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nails Boat - Fishing and Hunting Club HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icon.png') }}">

    <!-- Google font (font-family: 'Hind', sans-serif;) -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Hind:300,400,500,600') }}" rel="stylesheet">
    <!-- Google font (font-family: 'Arizonia', cursive;) -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Arizonia') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Cusom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Modernizer js -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>
<body>
{{--<div class="fakeloader"></div>--}}


<!-- START WRAPPER -->
<div class="wrapper">

    <!-- START HEADER AREA -->
    <header id="header-area" class="header header--style-2 fixed--header bg--white sticky-header">
        <div class="header__large__menu">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ url('assets/images/logo/2.png') }}" alt="logo">
                </a>
            </div>
            <nav class="header__menu">
                <ul>
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li><a href="{{ url('/aboutus') }}">ABOUT</a></li>
                    <li><a href="{{ url('/services') }}">Service</a></li>
                    <li><a href="{{ url('/shop') }}">SHOP</a></li>
                    <li><a href="{{ url('/camps') }}">Camps</a></li>
                    <li><a href="{{ url('/blogs') }}">Blog</a></li>
                    <li><a href="{{ url('/contact') }}">CONTACT</a></li>
                </ul>
            </nav>
            <div class="header__side__icons">
                <ul class="nav">
                    <li><a href="shop-right-sidebar.html"><i class="fa fa-opencart"></i><span class="shop-items">2</span></a>
                        <div class="minicart">
                            <div class="minicart__products">
                                <div class="single-product">
                                    <div class="single-product__thumb">
                                        <a href="single-product.html">
                                            <img src="images/cart/1.png" alt="single product">
                                        </a>
                                    </div>
                                    <div class="single-product__content">
                                        <a href="single-product.html">Fishing Reels</a>
                                        <p>$250 <span>X</span> 1</p>
                                    </div>
                                    <div class="single-product__close">
                                        <button class="minicart-product-close"><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="single-product__thumb">
                                        <a href="single-product.html">
                                            <img src="images/cart/2.png" alt="single product">
                                        </a>
                                    </div>
                                    <div class="single-product__content">
                                        <a href="single-product.html">Fishing Reels</a>
                                        <p>$150 <span>X</span> 1</p>
                                    </div>
                                    <div class="single-product__close">
                                        <button class="minicart-product-close"><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="single-product__thumb">
                                        <a href="single-product.html">
                                            <img src="images/cart/3.png" alt="single product">
                                        </a>
                                    </div>
                                    <div class="single-product__content">
                                        <a href="single-product.html">Fishing Reels</a>
                                        <p>$200 <span>X</span> 1</p>
                                    </div>
                                    <div class="single-product__close">
                                        <button class="minicart-product-close"><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="minicart__bottom">
                                <div class="total-price d-flex justify-content-between">
                                    <span>Subtotal:</span>
                                    <span>$600</span>
                                </div>
                                <div class="minicart__buttons d-flex justify-content-between">
                                    <a href="https://devitems.com/preview/nailsboat/nailsboat/cart.html" class="cr-btn cr-btn--xs">View Cart</a>
                                    <a href="checkout.html" class="cr-btn cr-btn--xs">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @if (Auth::guest())
                    <li><a class="login-from-trigger" href=""><i class="fa fa-user-o"></i></a></li>
                    @else
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-o"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="">Profile</a>
                                </li>
                                <li>

                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                        @endif
                    <li class="hidden-md"><a class="cr-btn cr-btn--theme cr-btn--sm cr-round cr-round--lg" href="index-2.html#"><span>Buy now</span></a></li>
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
    {{--<footer id="footer" class="footer fixed--footer">--}}
        {{--<!-- START FOOTER TOPSIDE -->--}}
        {{--<div class="footer__topside bg--grey ptb--100">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="ft-widget">--}}
                            {{--<div class="ft-widget__single useful-links">--}}
                                {{--<h5 class="ft-widget__title">Useful Links</h5>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="about.html">About Nail’s Boat</a></li>--}}
                                    {{--<li><a href="index-2.html#">Our Team</a></li>--}}
                                    {{--<li><a href="index-2.html#">Testimonials</a></li>--}}
                                    {{--<li><a href="index-2.html#">Features</a></li>--}}
                                    {{--<li><a href="index-2.html#">Term’s & Condition’s</a></li>--}}
                                    {{--<li><a href="contact.html">Contact</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="ft-widget__single twitter-feed">--}}
                                {{--<h5 class="ft-widget__title">Twitter Feed</h5>--}}
                                {{--<div class="twitter-feed__single">--}}
                                    {{--<span class="twitter-feed__icon"><i class="fa fa-twitter"></i></span>--}}
                                    {{--<div class="twitter-feed__content">--}}
                                        {{--<p><a href="https://twitter.com/">@Joshef Marting,</a> Fishing is very enjoyable and mind refresh</p>--}}
                                        {{--<span class="time"><a href="https://twitter.com/">09 Min Ago</a></span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="twitter-feed__single">--}}
                                    {{--<span class="twitter-feed__icon"><i class="fa fa-twitter"></i></span>--}}
                                    {{--<div class="twitter-feed__content">--}}
                                        {{--<p><a href="https://twitter.com/">@Stuart Miler,</a> Fishing is very enjoyable and mind refresh</p>--}}
                                        {{--<span class="time"><a href="https://twitter.com/">25 Min Ago</a></span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="ft-widget__single flicker-feed">--}}
                                {{--<h5 class="ft-widget__title">Flickr Stream</h5>--}}
                                {{--<ul class="flicker-feed__images">--}}
                                    {{--<li><a href="https://www.flickr.com/"><img src="images/flicker/1.png" alt="flicker feed"></a></li>--}}
                                    {{--<li><a href="https://www.flickr.com/"><img src="images/flicker/2.png" alt="flicker feed"></a></li>--}}
                                    {{--<li><a href="https://www.flickr.com/"><img src="images/flicker/3.png" alt="flicker feed"></a></li>--}}
                                    {{--<li><a href="https://www.flickr.com/"><img src="images/flicker/4.png" alt="flicker feed"></a></li>--}}
                                    {{--<li><a href="https://www.flickr.com/"><img src="images/flicker/5.png" alt="flicker feed"></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="ft-widget__single contact-info">--}}
                                {{--<h5 class="ft-widget__title">Contact Info</h5>--}}
                                {{--<div class="contact-info__inner">--}}
                                    {{--<div class="address">--}}
                                        {{--<p>125 New Yourk, Straight Road <br> River Side Lane, USA</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="numbers">--}}
                                        {{--<p><a href="callto://+00812458356987">+008 12458 356 987 (toll free)</a></p>--}}
                                        {{--<p><a href="callto://+00825647987546">+008 25647 987 546</a></p>--}}
                                    {{--</div>--}}
                                    {{--<div class="mails">--}}
                                        {{--<p><a href="mailto://info@nail’sboat.com">info@nail’sboat.com</a></p>--}}
                                        {{--<p><a href="mailto://www.nail’sboat.com">www.nail’sboat.com</a></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!-- END FOOTER TOPSIDE -->--}}
        {{--<!-- START FOOTER BOTTOMSIDE -->--}}
        {{--<div class="footer__bottomside bg--dark ptb--20">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="copyright text-center">--}}
                            {{--<p>&copy;Copyrihgt <a href="https://hastech.company">Hastech</a>, All rights Reverved, 2017</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!-- END FOOTER BOTTOMSIDE -->--}}
    {{--</footer><!-- END FOOTER AREA -->--}}


    <!-- START SINGN IN FORM -->
    @if (Auth::guest())
    <div class="sif-wrapper">
        <div class="sif text-left">
            <div class="sif__login">
                <h3 class="sif-title">Login</h3>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="single-input form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" id="email" placeholder="User name or email" name="email" value="{{ old('email') }}" required autofocus class="cr-round cr-round--lg">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="single-input form-group{{ $errors->has('password') ? ' has-error' : '' }}"">
                        <input id="password" type="password"  name="password" required placeholder="Password" class="cr-round cr-round--lg">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                @endif
                    </div>
                    <div class="single-input">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </div>
                    <div class="single-input">
                        <button type="submit" class="cr-btn cr-btn--sm cr-btn--theme cr-round cr-round--lg"><span>Go</span></button>
                    </div>
                    <div class="sif-login__others">
                        <h6>Or login with</h6>
                        <div class="social-icons social-icons--rounded">
                            <ul>
                                <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="index-2.html#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="sif__register">
                <h3 class="sif-title">Create new account</h3>
                <form action="#">
                    <div class="single-input">
                        <input type="text" placeholder="User name" class="cr-round cr-round--lg">
                    </div>
                    <div class="single-input">
                        <input type="email" placeholder="Email address" class="cr-round cr-round--lg">
                    </div>
                    <div class="single-input">
                        <input type="password" placeholder="Password" class="cr-round cr-round--lg">
                    </div>
                    <div class="single-input">
                        <input type="password" placeholder="Confirm password" class="cr-round cr-round--lg">
                    </div>
                    <div class="single-input">
                        <button type="submit" class="cr-btn cr-btn--sm cr-btn--theme cr-round cr-round--lg"><span>Sign Up</span></button>
                    </div>
                </form>
            </div>
            <span class="sif-close-button"><i class="fa fa-close"></i></span>
        </div>

    @else

    @endif



    </div><!-- END SINGN IN FORM -->




<!-- JS Files -->
<script src="{{ asset('assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/active.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/slick-slider.min.js') }}"></script>
</body>
</html>
