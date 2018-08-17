@extends('frontend.index')
@section('content')
    <!-- START MAIN CONTENT -->
    <main class="main-content" style="padding-top: 100px;">
        <!-- START FEATURES SECTION -->
        <section class="sp-products-area ptb--150 bg--white">
            <!-- START ABOUT TOP AREA -->
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="text-center">
                                    <div class="col-lg-12">
                                        @if(session()->has('success_message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success_message') }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <div class="thankyou" style="margin: 0 auto;">
                                                <h3>Thank you for <br> your order</h3><br>
                                                <p>A confirmation email was sent!</p><br>
                                                <a href="{{ url('/shop') }}" class="cr-btn cr-btn--sm cr-round cr-round--lg">Continue Shopping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>
            <!-- END ABOUT TOP AREA -->
        </section><!-- END FEATURES SECTION -->
    </main><!-- END MAIN CONTENT -->

    @endsection