ApplicationLoad = {
    init: function() {
        this.load_page();
        this.load_plugins();
    },

    load_page: function() {
        $(window).load(function() {
            $("#load").fadeOut(500).delay(500);
        });

        $('.button-jogar').on({
            mouseenter: function(event) {
                var caixa = $(event.target).parents('.container-materia');
                setScale(caixa, 1.2);
            },
            mouseleave: function(event) {
                var caixa = $(event.target).parents('.container-materia');
                setScale(caixa, 1.0);
            }
        });

        $('.button-entrar').on({
            mouseenter: function(event) {
                var caixa = $(event.target).parents('.container-dados');
                setScale(caixa, 1.2);
            },
            mouseleave: function(event) {
                var caixa = $(event.target).parents('.container-dados');
                setScale(caixa, 1.0);
            }
        });

        $('.ctn-sld').on({
            mouseenter: function(event) {
                setScale($(this), 1.2);
                console.log($(this));
            },
            mouseleave: function(event) {
                setScale($(this), 1.0);
            }
        });

        function setScale(element, value) {
            $(element).css({
                '-webkit-transform': 'scale(' + value + ')',
                '-moz-transform': 'scale(' + value + ')',
                '-ms-transform': 'scale(' + value + ')',
                '-o-transform': 'scale(' + value + ')',
                'transform': 'scale(' + value + ')'
            });
        }

    },
    load_plugins: function() {
        console.log("Plugins loaded");

        $('.maiores-pontuadores').bxSlider({
            mode: 'vertical',
            minSlides: 6,
            controls: false,
            pager: false,
            auto: true,
            autoDelay: 1,
            moveSlides: 1
        });

        $('.slide-letreiro').slick({
            dots: false,
            infinite: true,
            speed: 3000,
            autoplay: true,
            autoplaySpeed: 0,
            slidesToShow: 10,
            slidesToScroll: 1,
            cssEase: 'linear',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 10,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });


        //OWL-carrocel
        $("#owl-letreiro").owlCarousel({
            pagination: false,
            loop: true,
            autoplay: true,
            autoplaySpeed: 1000,
            autoplayTimeout: 500,
            autoplayHoverPause: false,
            navSpeed: 1000,
            smartSpeed: 1000,
            responsive: {
                480: {
                    items: 2
                },
                768: {
                    items: 4
                },
                1024: {
                    items: 8
                },
                1200: {
                    items: 12
                }
            }
        });

        var owl = $('#owl-top-5');



        owl.owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: false,
            loop: true,
            smartSpeed: 1050,
            pagination: true
        });

        $('.owl-prev').click(function() {
            owl.trigger('next.owl.carousel');
        });
        $('.owl-next').click(function() {
            owl.trigger('prev.owl.carousel');
        });



        $('.clock').each(function() {
            var $this = $(this),
                finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime('%I:%M:%S'));
            });
        });


    }

}

$(document).ready(function() {
    ApplicationLoad.init();
});