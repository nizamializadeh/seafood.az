@extends('frontend.index')
@section('content')
    <!-- START MAIN CONTENT -->
    <main class="main-content">
        <!-- START BLOG GRID AREA -->
        <section class="single-blog-page-area ptb--150 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="single-blog">
                            <div class="single-blog__content">
                                @if (Auth::guest())
                                    Please login your account
                                    @else
                                    <h3 class="single-blog__title">Hello {{ Auth::user()->name }}</h3> <br>

                                    {{--<div class="row">--}}
                                        {{--Your Camps--}}
                                        {{--<table class="table table-striped">--}}
                                            {{--<thead>--}}
                                            {{--<tr>--}}
                                                {{--<th>Camp</th>--}}
                                                {{--<th>Date</th>--}}
                                                {{--<th>Location</th>--}}
                                            {{--</tr>--}}
                                            {{--</thead>--}}
                                            {{--<tbody>--}}
                                            {{--<tr>--}}
                                                {{--<td>{{ Auth::user()->camp()->camp_title_az }}</td>--}}
                                                {{--<td>Doe</td>--}}
                                                {{--<td>john@example.com</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>Mary</td>--}}
                                                {{--<td>Moe</td>--}}
                                                {{--<td>mary@example.com</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>July</td>--}}
                                                {{--<td>Dooley</td>--}}
                                                {{--<td>july@example.com</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</div>--}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END BLOG GRID AREA -->
    </main><!-- END MAIN CONTENT -->
@endsection
