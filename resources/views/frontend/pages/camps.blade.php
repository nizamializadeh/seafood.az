@extends('frontend.index');
@php
    $camp_title = 'camp_title_'.app()->getLocale();
@endphp
@section('breadcamb')
    <!-- START BREADCAMB AREA -->
    <div class="breadcamb">
        <div class="breadcamb__name ptb--150 bg--1" data-black-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcamb__inner text-center">
                            <h2>Camps</h2>
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
                            @foreach($camps as $camp)
                                @php
                                    $link_camp = str_slug($camp->camp_title_en, '-')
                                @endphp
                                <!-- START SINGLE BLOG -->
                                    <div class="col-lg-4">
                                        <article class="blog blog--style-2">
                                            <div class="blog__thumb">
                                                <div class="blog__thumb__inner">
                                                    <img src="{{ url('/images/'.$camp->camp_image) }}" alt="camp {{ $camp->camp_title_en }}">
                                                </div>
                                                <div class="blog__sidecontent">
                                                    <ul>
                                                        <li>{{ date('j', strtotime($camp->date)) }}<span>{{ date('M', strtotime($camp->date)) }}</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="blog__content">
                                                <div class="blog__content__details">
                                                    <h5><a href="{{ url('/camp/'.$camp->id.'/'.$link_camp) }}">{{ $camp->$camp_title }}</a></h5>
                                                </div>
                                            </div>
                                        </article>
                                    </div><!-- END SINGLE BLOG -->
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END BLOG GRID AREA -->


    </main><!-- END MAIN CONTENT -->
@endsection