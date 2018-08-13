

(function($) {
	'use strict';


    /*============= Team Area Margin ==============*/
    function teamMargin(){
        $('.team__single').each(function(){
            var defMargin = $(this).children('.team__single__content').innerHeight();
            $(this).css('margin-top', defMargin)
            .on('mouseover', function(){
                $(this).css('margin-top', '0');
            })
            .on('mouseout', function(){
                $(this).css('margin-top', defMargin);
            });
        });
    };
    var winWidth = $(window).width();
    if(winWidth > 991){
        teamMargin();
    }




    /*============= Login Register Form ==============*/
    function loginRegisterForm(){
        var trigger = $('.login-from-trigger'),
            container = $('.sif-wrapper');
            $('<div class="body-overlay"></div>').prependTo(container);

        trigger.on('click', function(e){
            e.preventDefault();
            container.addClass('is-visible');
            winWidth();
        });

        $('.body-overlay').on('click', function(){
            container.removeClass('is-visible');
            $('body').css('overflow-y', 'scroll');
        });

        $('span.sif-close-button').on('click', function(){
            container.removeClass('is-visible');
            $('body').css('overflow-y', 'scroll');
        });


        function winWidth(){
            var winWidth = $(window).width();
            if(winWidth > 991){
                $('body').css('overflow-y', 'hidden');
            }
            else{
                $('body').css('overflow-y', 'scroll');
            }
        }

    }
    loginRegisterForm();
    



    /*============= Banner Content Padding ==============*/
    function bannerPadding(){
        var headerHeight = $('.header.fixed--header').height();
        $('.banner__single__content').css('padding-top', headerHeight);
        $('.breadcamb__inner').css('padding-top', headerHeight);
    }
    bannerPadding();
    


    /*============= Scroll to section ==============*/
    $('a.scroll-to-section').on('click', function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 0
        }, 1000);
        e.preventDefault();
    });

    

    /*============= Sticky Header ==============*/
    function stickyHeader(){
        var sticky_menu = $('.sticky-header');
        var pos = sticky_menu.position();
        if (sticky_menu.length) {
            var windowpos = sticky_menu.top;
            $(window).on('scroll', function() {
               var windowpos = $(window).scrollTop();
               if (windowpos > pos.top + 1) {
                   sticky_menu.addClass('sticky');
               } else {
                   sticky_menu.removeClass('sticky');
               }
            });
        }
    };
    stickyHeader();
    



    /*============= Fixed Footer ==============*/
    function fixedFooter(){
        var winWidth = $(window).width() > 991,
            checkFooter = $('.footer').hasClass('fixed--footer'),
            footerHeight = $('.footer').height();
        if(winWidth && checkFooter){
            $('.footer').css({
                'position' : 'fixed',
                'left' : 0,
                'bottom' : 0,
                'right' : 0,
                'width' : 100 + '%',
                'z-index' : -30
            });
            $('.wrapper').css('margin-bottom', footerHeight);
        }
    };
    fixedFooter();




    /*============= Cart Plus Minus Button ==============*/
    $('.cart-plus-minus').append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');

    $('.qtybutton').on('click', function () {
       var $button = $(this);
       var oldValue = $button.parent().find('input').val();
       if ($button.text() == "+") {
           var newVal = parseFloat(oldValue) + 1;
       } else {
           // Don't allow decrementing below zero
           if (oldValue > 1) {
               var newVal = parseFloat(oldValue) - 1;
           } else {
               newVal = 1;
           }
       }
       $button.parent().find('input').val(newVal);
    });


    /*============= Banner Content Parallax ==============*/
    function bannerParallax(){
        $(window).on('scroll', function(){
            var winScroll = $(window).scrollTop();
            var winWidth = $(window).width();

            if(winWidth > 991){

                $('.banner__single__content').css({
                    'transform': 'translateY(' + winScroll / 10 + '%)',
                    'opacity' : 80 / winScroll
                })

                $('.banner-area a.next-section-indicator').css({
                    'opacity' : 50 / winScroll
                })
                
                $('.banner--style-2.slider-numbered-dots .owl-dots').css({
                    'opacity' : 50 / winScroll
                })
            
            }

            $('.breadcamb__inner').css({
                'transform': 'translateY(' + winScroll / 5 + '%)',
                'opacity' : 80 / winScroll
            })

        });

    }
    bannerParallax();




    /*============= Checkout Login/Register Toggle ==============*/
    function checkoutLoginToggle(){
        var checkoutMethodList = $('.checkout-method-list li');
        checkoutMethodList.on('click', function(){
            var form = $(this).data('form');
            if( !$(this).hasClass('active') ) {
                $('.checkout-method-list li').removeClass('active');
                $(this).addClass('active');
                $('.checkout-method form').slideUp(500);
                $('.' + form).delay(500).slideDown();
            }
        });
    }
    checkoutLoginToggle();
   




    /*============= Checkout Shipping Form Toggle ==============*/
    function checkoutShippingToggle(){
        var shipingFormToggle = $('.shipping-form-toggle');
        var shipingForm = $('.shipping-form');
        shipingFormToggle.on('click', function(){
            if( $(this).hasClass('active') ) {
                $(this).removeClass('active');
                shipingForm.slideUp();
            } else {
                $(this).addClass('active');
                shipingForm.slideDown();
            }
        });
    }
    checkoutShippingToggle();
    




    /*============= Payment Method Toggle ==============*/
    function paymentMethodToggle(){
        var paymentMethodList = $('.payment-method-list li');
        var paymentFormToggle = $('.payment-form-toggle');
        var paymentForm = $('.payment-form');
        paymentMethodList.on('click', function(){
            paymentMethodList.removeClass('active');
            $(this).addClass('active');
            if( $(this).hasClass('payment-form-toggle') ) {
                paymentForm.slideDown()
            } else {
                paymentForm.slideUp()
            }
        });
    }
    paymentMethodToggle()
   




})(jQuery);
