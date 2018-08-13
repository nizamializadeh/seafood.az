
(function($) {
	'use strict';


	/*============= Carousel Activation==============*/

	// Main banner slider
	 $('.banner-carousel-active').owlCarousel({
		items: 1,
		dots: false,
		nav: true,
		navText: ['<span><i class="fa fa-angle-left"></i></span>', '<span><i class="fa fa-angle-right"></i></span>'],
		loop: true,
		fade: true,
		animateOut: 'fadeOut',
		autoHeight: false,
		responsive :{
			0 : {
				autoHeight: true
			},
			992 : {
				autoHeight: false
			}
		}
	 });

	// Product banner slider
	 $('.product-slide-banner').owlCarousel({
		items: 1,
		dots: true,
		nav: false,
		loop: true,
		fade: true,
		animateOut: 'fadeOut',
		autoHeight: true
	 });


	// Testimonial Slider
	 $('.testimonial-slider').owlCarousel({
		items: 1,
		dots: false,
		nav: true,
		loop: true,
		navText: ['<span><i class="fa fa-angle-left"></i></span>', '<span><i class="fa fa-angle-right"></i></span>'],
		autoHeight: true
	 });

	// Brand Logos
	 $('.brand-logo').owlCarousel({
		items: 5,
		dots: false,
		loop: true,
		nav: false,
		responsive : {
            0 : {
                items:1,
            },
            576 : {
                items:2,
            },
            768 : {
                items:3,
            },
            992 : {
                items:4,
            },
            1200 : {
                items:5,
            }
        }
    });




	/*============= Youtub Popup ==============*/
	$('a.video-play-button').yu2fvl();




	/*============= Mobilemenu ==============*/
	$('.header.header--style-1 .header__small__menu nav.header__menu').meanmenu({
		meanMenuClose: 'X',
		meanMenuCloseSize: '18px',
		meanScreenWidth: '991',
		meanExpandableChildren: true,
		meanMenuContainer: '.mobile-menu',
		onePage: true
	});


	$('.header.header--style-2 .header__large__menu nav.header__menu').meanmenu({
		meanMenuClose: 'X',
		meanMenuCloseSize: '18px',
		meanScreenWidth: '991',
		meanExpandableChildren: true,
		meanMenuContainer: '.mobile-menu',
		onePage: true
	});





	/*============= Preloader ==============*/
	$('.fakeloader').fakeLoader({
	    timeToHide:1200,
	    bgColor:'#000000',
	    spinner:'spinner7'
	});




	/*====== ScrollUp ======*/
	$.scrollUp({
	    scrollText: '<i class="fa fa-angle-up"></i>',
	    easingType: 'linear',
	    scrollSpeed: 900,
	    animation: 'slideInRight'
	});

	

})(jQuery);
