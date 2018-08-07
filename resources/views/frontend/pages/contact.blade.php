@extends('frontend.index')
@section('breadcamb')
    <!-- START BREADCAMB AREA -->
    <div class="breadcamb">
        <div class="breadcamb__name ptb--150 bg--1" data-black-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcamb__inner text-center">
                            <h2>Contact with us</h2>
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
        <section class="cr-section contact-page-area ptb--150 bg--white">
            <div class="container">
                <div class="contact">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact__sidebar">
                                <div class="contact__title">
                                    <h4 class="small-title">Get in touch</h4>
                                </div>
                                <div class="contact__sidebar__body">
                                    <div class="contact__address">
                                        <p>{{ $contact->address }}</p>
                                    </div>
                                    <div class="contact__phone">
                                        <p><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></p>
                                    </div>
                                    <div class="contact__mail">
                                        <p><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                                    </div>
                                </div>
                                <div class="contact__social">
                                    <h5>You can also connect us here...</h5>
                                    <div class="breadcamb__tree__social social-icons social-icons--rounded social-icons--medium">
                                        <ul>
                                            @foreach($socials as $social)
                                                <li><a href="{{ $social->link }}">link</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <ul>
                                        @foreach($socials as $social)
                                            <li><a href="{{ $social->link }}"><i class="fab fa-{{ $social->icon }}"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- START CONTACT FORM -->
                            <div class="contact__form">
                                <div class="contact__title">
                                    <h4 class="small-title">Send us a message</h4>
                                </div>
                                <div class="comment-box">
                                    <form id="contact-form" action="mail.php" method="POST">
                                        <div class="single-input">
                                            <input type="text" name="name" id="comment-name" placeholder="Enter your name">
                                        </div>
                                        <div class="single-input">
                                            <input type="email" placeholder="Your email">
                                        </div>
                                        <div class="single-input">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                        <div class="single-input">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                        <div class="single-input textarea">
                                            <textarea cols="3" name="message" rows="3" placeholder="Write your comment here"></textarea>
                                        </div>
                                        <div class="single-input">
                                            <button type="submit" class="cr-btn cr-round cr-round--lg cr-btn--transparent cr-btn--xs cr-btn--icon"><span>send</span><span class="btn-icon"><i class="icofont icofont-long-arrow-right"></i></span></button>
                                        </div>
                                    </form>
                                    <p class="form-message"></p>
                                </div><!-- END CONTACT FORM -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END BLOG GRID AREA -->



    </main><!-- END MAIN CONTENT -->
    @endsection