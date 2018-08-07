@extends('frontend.index')
@php
    $about_title = 'about_title_'.app()->getLocale();
    $about_text = 'about_text_'.app()->getLocale();
@endphp
@section('content')
    <!-- START BREADCAMB AREA -->
    <div class="breadcamb">
        <div class="breadcamb__name ptb--150 bg--1" data-black-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcamb__inner text-center">
                            <h2>About us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END BREADCAMB AREA -->

    <!-- START MAIN CONTENT -->
    <main class="main-content">

        <!-- START FEATURES SECTION -->
        <section class="cr-section about-page bg--white pt--70">

            <!-- START ABOUT TOP AREA -->
            <div class="about-top">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-12 col-lg-6 order-2 order-lg-1">
                            <div class="about-top__content">
                                <h3>{{ $about->$about_title }}</h3>
                                <p>{!! $about->$about_text !!}</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 order-1 order-lg-2">
                            <div class="about-top__thumb text-center">
                                <img src="{{ asset('/images/'.$about->about_image) }}" class="img-responsive" alt="fish market about">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ABOUT TOP AREA -->
        </section><!-- END FEATURES SECTION -->

    </main><!-- END MAIN CONTENT -->

    @endsection