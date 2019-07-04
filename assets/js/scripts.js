﻿jQuery(function ($) {

    'use strict';

    // ----------------------------------------------
    // Preloader
    // ----------------------------------------------
    (function () {
        $(window).load(function () {
            $('#pre-status').fadeOut();
            $('#st-preloader').delay(350).fadeOut('slow');
        });
    }());

    // ---------------------------------------------- 
    //  magnific-popup
    // ----------------------------------------------
    (function () {

        $('.portfolio-items').magnificPopup({
            delegate: 'a',
            type: 'image',
            // other options
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            gallery: {
                enabled: false
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function (element) {
                    return element.find('i');
                }
            }

        });

    }());


    // ---------------------------------------------- 
    // Fun facts
    // ---------------------------------------------- 
    (function () {
        $('.st-counter').counterUp({
            delay: 10,
            time: 1500
        });
    }());


    // ---------------------------------------------- 
    //  Isotope Filter 
    // ---------------------------------------------- 
    (function () {
        var winDow = $(window);
        var $container = $('.portfolio-items');
        var $filter = $('.filter');

        try {
            $container.imagesLoaded(function () {
                $container.show();
                $container.isotope({
                    filter: '*',
                    layoutMode: 'masonry',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });
            });
        } catch (err) {
        }

        winDow.bind('resize', function () {
            var selector = $filter.find('a.active').attr('data-filter');

            try {
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
            } catch (err) {
            }
            return false;
        });

        $filter.find('a').click(function () {
            var selector = $(this).attr('data-filter');

            try {
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
            } catch (err) {

            }
            return false;
        });
        var filterItemA = $('.filter a');

        filterItemA.on('click', function () {
            var $this = $(this);
            if (!$this.hasClass('active')) {
                filterItemA.removeClass('active');
                $this.addClass('active');
            }
        });
    }());

    // jQuery smooth scroll
    (function () {
        $("a.smooth-scroll").on("click", function (e) {
            var $anchor = $(this);
            var headerH = "74";
            $("html, body")
                .stop()
                .animate({
                    scrollTop: $($anchor.attr("href"))
                        .offset()
                        .top - headerH + "px"
                }, 1200, "easeOutCirc");

            e.preventDefault();
        });
    }());
    (function () {
        $('#testimonial-carousel').carousel({
            interval: 3500
        })
    }());
    // -------------------------------------------------------------
    // Back To Top
    // -------------------------------------------------------------

    (function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });
    }());


    // ----------------------------------------------
    // Parallax Scrolling
    // ----------------------------------------------
    (function () {
        $(window).bind('load', function () {
            parallaxInit();
        });

        function parallaxInit() {
            $("#testimonial").parallax("50%", 0.3);
        }

        parallaxInit();
    }());


    // ----------------------------------------------
    // fitvids js
    // ----------------------------------------------
    (function () {
        $(".post-video").fitVids();
    }());


});