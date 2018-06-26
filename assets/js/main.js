$(document).ready(function () {
    "use strict";

    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen = window_height - header_height;


    $(".fullscreen").css("height", window_height);
    $(".fitscreen").css("height", fitscreen);


    // -------   Active Mobile Menu-----//

    $('#characterLeft').text('255 kelime kaldı');
    $('#message').keydown(function () {
        var max = 255;
        var len = $(this).val().replace(' ', '').length;
        if (len >= max) {
            $('#characterLeft').text('Maksimum kelimeye ulaşıldı');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');
        }
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' kelime kaldı');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');
        }
    });

    $('#magazineContactForm').validate({ // initialize the plugin
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            }
        }
    });

    // $('select').niceSelect();
    // $('.img-pop-up').magnificPopup({
    //     type: 'image',
    //     gallery: {
    //         enabled: true
    //     }
    // });

    var owl = $('.achivement-slider-content');
    owl.owlCarousel({
        items: 1,
        loop: false,
        nav: true,
        navText: ['<i class="fa fa-chevron-right achivement-right"></i>', '<i class="fa fa-chevron-left achivement-left"></i>'],
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: true,
                loop: false
            },
            1000: {
                items: 1,
                nav: true,
                loop: false
            }
        }
    });
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY > 0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });

    // $('.active-bottle-carousel').owlCarousel({
    //     items: 1,
    //     loop: true,
    //     nav: false,
    //     autoplay: true,
    //     autoplayTimeout: 3000,
    //     autoplayHoverPause: true
    // });

    // $('.play-btn').magnificPopup({
    //     disableOn: 700,
    //     type: 'iframe',
    //     mainClass: 'mfp-fade',
    //     removalDelay: 160,
    //     preloader: false,
    //     fixedContentPos: false
    // });


    // $(document).ready(function () {
    //     $('#mc_embed_signup').find('form').ajaxChimp();
    // });
    // -------   Mail Send ajax

});
