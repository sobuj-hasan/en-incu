$(document).ready(function() {

    $(function() {
        $('.tabs-nav a').click(function() {
            // Check for active
            $('.tabs-nav li').removeClass('active');
            $(this).parent().addClass('active');

            // Display active tab
            let currentTab = $(this).attr('href');
            $('.tabs-content div').hide();
            $(currentTab).show();

            return false;
        });
    });

    // Sticky Header 
    $(window).scroll(function () {
        $('header').toggleClass('scrolled', $(this).fadeIn().scrollTop() > 65);
    });

    $('.product-autoplay-1').slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        rows: 2,
        rtl: false,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true,
        nextArrow: $('.shop-top-nxt'),
        prevArrow: $('.shop-top-prv'),
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]

    });

    $('.product-autoplay-2').slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        rows: 2,
        rtl: false,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true,
        nextArrow: $('.nxt'),
        prevArrow: $('.prv'),
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]

    });

    $('.autoplay').slick({
        slidesToShow: 4,
        slidesToScroll: 3,
        rows: 2,
        rtl: false,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true,
        nextArrow: $('.nxt'),
        prevArrow: $('.prv'),
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]

    });

    $('.autoplay-2').slick({
        slidesToShow: 4,
        slidesToScroll: 3,
        rows: 2,
        rtl: false,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true,
        nextArrow: $('.related-nxt'),
        prevArrow: $('.related-prv'),
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 350,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

        ]

    });

});

