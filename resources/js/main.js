jQuery(function($) {
    if ($(window).width() > 769) {
      $('.navbar .dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
  
      }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
  
      });
  
      $('.navbar .dropdown > a').click(function() {
        location.href = this.href;
      });
  
    }
  });
/*====================================
			Home Page Slider Section
====================================*/
$('.owl-partner-slider').owlCarousel({
    items:5,
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    nav:false,
    dots:false
});
$('#main-slider').owlCarousel({
    loop: true,
    nav: true,
    items: 1,
    autoplay: true,
    autoplayTimeout:8000,
    navText: ['<i class=\'fa fa-angle-left\'></i>', '<i class=\'fa fa-angle-right\'></i>'],
    dots: false
})

    $('#main-slider').on('translate.owl.carousel', function () {
        $('.slider-text').removeClass('fadeInUp animated').hide();
    });
    $('#main-slider').on('translated.owl.carousel', function () {
        $('.slider-text').addClass('fadeInUp animated').show();
    });

    $('#main-slider').on('translate.owl.carousel', function () {
        $('.slider-img').removeClass('fadeInDown animated').hide();
    });
    $('#main-slider').on('translated.owl.carousel', function () {
        $('.slider-img').addClass('fadeInDown animated').show();
    });

    $('#main-slider').on('translate.owl.carousel', function () {
        $('.slider-img-two').removeClass('fadeInDown animated').hide();
    });
    $('#main-slider').on('translated.owl.carousel', function () {
        $('.slider-img-two').addClass('fadeInDown animated').show();
    });
    
    $('#main-slider').on('translate.owl.carousel', function () {
        $('.slider-countdown').removeClass('fadeInUp animated').hide();
    });
    $('#main-slider').on('translated.owl.carousel', function () {
        $('.slider-countdown').addClass('fadeInUp animated').show();
    });
    
    $('#main-slider').on('translate.owl.carousel', function () {
        $('.cou-slider-img').removeClass('fadeInDown animated').hide();
    });
    $('#main-slider').on('translated.owl.carousel', function () {
        $('.cou-slider-img').addClass('fadeInDown animated').show();
    });

    
    
    
    $('#th-main-slider').owlCarousel({
        loop: true,
        margin: 0,
        items: 1
    })
    
    
    $('.holiday-carousel').owlCarousel({
        loop: true,
        autoplay:true,
        nav: false,
        navText: ['<i class=\'fa fa-angle-left\'></i>', '<i class=\'fa fa-angle-right\'></i>'],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 2
            },
            1550: {
                items: 4
            }
        }
    })
    
    $('.fullwidth-carousel').owlCarousel({
        loop: true,
        autoplay:true,
        nav: false,
        navText: ['<i class=\'fa fa-angle-left\'></i>', '<i class=\'fa fa-angle-right\'></i>'],
        dots: false,
        margin:30,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            },
            1500: {
                items: 5
            }
        }
    })
    
    
     $('.pro-carousel-start').owlCarousel({
        loop: true,
        autoplay:true,
        nav: false,
        navText: ['<i class=\'fa fa-angle-left\'></i>', '<i class=\'fa fa-angle-right\'></i>'],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 4
            },
            992: {
                items: 5
            },
            1200: {
                items: 8
            },
            1500: {
                items: 11
            }
        }
    })
/* ==== MOBILE ==== */
$(document).ready(function(){
        $('.navbar-toggler').on('click', function(){
        $('.mobile-menu').toggleClass('open-slide');
        });
});