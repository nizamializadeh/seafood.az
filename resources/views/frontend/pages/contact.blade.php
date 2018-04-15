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
        <div class="breadcamb__tree bg--pattern ptb--20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="breadcamb__tree__inner">
                            <ul>
                                <li><a href="contact.html#">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
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

        <!-- START BLOG GRID AREA -->
        <section class="cr-section contact-page-area ptb--150 bg--white">
            <div class="container">
                <div class="contact">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact__sidebar">
                                <div class="contact__title">
                                    <h4 class="small-title">Get in touch</h4>
                                    <p>Lets do better design was born and I will give you a mplete of the tem, and pund  actual </p>
                                </div>
                                <div class="contact__sidebar__body">
                                    <div class="contact__address">
                                        <p>125 New Yourk, Straight Road <br> River Side Lane, USA</p>
                                    </div>
                                    <div class="contact__phone">
                                        <p><a href="callto://+00812458356987">+008 12458 356 987 (toll free)</a></p>
                                        <p><a href="callto://++00825647987546">+008 25647 987 546</a></p>
                                    </div>
                                    <div class="contact__mail">
                                        <p><a href="mailto://info@nailsboat.com">info@nail’sboat.com</a></p>
                                        <p><a href="mailto://www.nailsboat.com">www.nail’sboat.com</a></p>
                                    </div>
                                </div>
                                <div class="contact__social">
                                    <h5>You can also connect us here...</h5>
                                    <div class="breadcamb__tree__social social-icons social-icons--rounded social-icons--medium">
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
                        <div class="col-lg-8">
                            <!-- START CONTACT FORM -->
                            <div class="contact__form">
                                <div class="contact__title">
                                    <h4 class="small-title">Send us a message</h4>
                                    <p>Lets do better design was born and I will give you a mplete of the tem, and pund  actual teachings of the great explorer ecial contet to make it beautiful know how to pursu obis est eligend</p>
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

        <!-- START NEWSLETTER AREA -->
        <section class="cr-section newsletter-area bg--pattern ptb--120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="newsletter text-center">
                            <div class="newsletter__content">
                                <h2>You can updated with us by Subscribing our newsletter</h2>
                                <h5>So! why you’r late? let’s start subscription...</h5>
                            </div>
                            <div class="newsletter__form">
                                <form action="#">
                                    <input type="text" placeholder="Enter yur email here...">
                                    <button type="submit"><img src="images/icons/fish-send-icon.png" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END NEWSLETTER AREA -->

    </main><!-- END MAIN CONTENT -->
    @endsection