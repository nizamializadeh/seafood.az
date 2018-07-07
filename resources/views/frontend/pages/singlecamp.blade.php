@extends('frontend.index')
@php
    $camp_title = 'camp_title_'.app()->getLocale();
    $camp_desc = 'camp_desc_'.app()->getLocale();
@endphp
@section('breadcamb')

@endsection

@section('content')
    <!-- START MAIN CONTENT -->
    <main class="main-content">

        <!-- START BLOG GRID AREA -->
        <section class="single-blog-page-area ptb--150 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="single-blog">
                            <div class="single-blog__thumb">
                                <div class="single-blog__thumb__inner">
                                    <img src="{{ url('/images/'.$camp->camp_image) }}" style="" class="img-responsive" alt="camp thumb">
                                </div>
                                <div class="single-blog__sidecontent">
                                    <ul>
                                        <li>{{ date('j', strtotime($camp->date)) }}<span>{{ date('M', strtotime($camp->date)) }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-blog__content">
                                <h3 class="single-blog__title">{{ $camp->$camp_title }}</h3>
                                <p>{!! $camp->$camp_desc !!}</p>
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mt-md-50 mt-sm-50 mt-xs-50">
                        <!-- START SIDEBAR WIDGETS -->
                        <div class="sidebar widgets blog-sidebar blog-sidebar--right">
                            <!-- START SINGLE WIDGET -->
                            <div class="single-widget sb-categories">
                                <h4 class="widget-title">Rezerv now</h4>
                                @if (Auth::guest())
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Rezerv
                                    </button>
                                    <div class="collapse" id="collapseExample">
                                        <div class="well">
                                            <a href="{{ url('/login') }}">Please login your account</a>
                                        </div>
                                    </div>
                                @else
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Rezerv</button>
                                @endif
                                <!-- Modal -->
                                <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <form action="/reservation" method="POST" class="">
                                            {{csrf_field()}}

                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputName">Name</label>
                                                                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name">
                                                                <input type="hidden" name="user_id" value="
                                                                @if (Auth::guest())
                                                                @else
                                                                {{ Auth::user()->id }}
                                                                @endif
                                                                        ">
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputName">Surname</label>
                                                            <input type="text" name="surname" class="form-control" id="exampleInputName" placeholder="Surname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail">Email</label>
                                                            <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputPhone">Phone</label>
                                                            <input type="text" name="phone" class="form-control" id="exampleInputEmail" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="camp_id" value="{{ $camp->id }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                            </div><!-- END SINGLE WIDGET -->

                        </div><!-- END SIDEBAR WIDGETS -->
                    </div>
                </div>
            </div>
        </section><!-- END BLOG GRID AREA -->

    </main><!-- END MAIN CONTENT -->
@endsection