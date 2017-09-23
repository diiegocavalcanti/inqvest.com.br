ApplicationLoad = {
    init: function() {
        this.load_page();
        this.load_plugins();
    },

    load_page: function() {
        $(window).load(function() {
            $("#load").fadeOut(500).delay(500);
        });

        function openModal(html, titulo) {
            $('.modal-title').html(titulo);
            $('.ajax-html').load(html);
            $('#modal').modal('show');
        }

        function loadIn() {
            $("#load").fadeIn(500).delay(500);
        }

        function loadOut() {
            $("#load").fadeOut(500).delay(500);
        }

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

        $('.openModal').on('click', function(event){
            openModal($(event.target).attr('data-url'), $(event.target).attr('data-title'));
        });



        $('.ctn-sld').on({
            mouseenter: function(event) {
                setScale($(this), 1.4);
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

        var login = false;

        $('.open-login').on('click', function() {

            if (login == false) {
                $('.box-login').fadeIn(200);
                login = true;
            } else {
                $('.box-login').fadeOut(200);
                login = false;
            }

        });

        $('.maiores-pontuadores').bxSlider({
            mode: 'vertical',
            minSlides: 6,
            controls: false,
            pager: false,
            auto: true,
            autoDelay: 1,
            moveSlides: 1
        });

        $('.slider-home').slick({
            arrows: true,
            autoplay: true,
            autoplaySpeed: 4000,
            fade: true,
            mobileFirst: true,
            controls: true,
            speed: 600
        });

        $('.slide-letreiro').slick({
            dots: false,
            infinite: true,
            speed: 3000,
            autoplay: true,
            autoplaySpeed: 0,
            slidesToShow: 10,
            adaptiveHeight: true,
            pauseOnHover: true,
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
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        var owl = $('#owl-top-5');
        var owl_trofeu = $('#owl-trofeu');
        var owl_trofeu_evolucao = $('#owl-trofeu-evolucao');

        owl_trofeu_evolucao.owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: false,
            loop: true,
            smartSpeed: 1050,
            pagination: true
        });

        owl_trofeu.owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: false,
            loop: true,
            smartSpeed: 1050,
            pagination: true
        });



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
            owl_trofeu.trigger('next.owl.carousel');
            owl_trofeu_evolucao.trigger('next.owl.carousel');
            owl.trigger('next.owl.carousel');
        });
        $('.owl-next').click(function() {
            owl_trofeu.trigger('prev.owl.carousel');
            owl_trofeu_evolucao.trigger('prev.owl.carousel');
            owl.trigger('prev.owl.carousel');
        });

        $('.clock').each(function() {
            var $this = $(this),
                finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime('%I:%M:%S'));
            });
        });

        $('.sub-links').on('click', function(event) {
            var div = $(event.target).attr('href');
            $('.sub-sections').hide();
            $(div).show(400);
        });

        $('.seletor-simulado').on('click', function(event) {
            $('.seletor-simulado').removeClass('current');
            var div = $(event.target).attr('target');
            $(event.target).addClass('current');
            $('.sections-simulado').hide();
            $(div).show(400);
        });

        $('.bar-result').each(function(index, el) {
            var percent = $(el).attr('percent');
            $(this).css('height', percent);
        });

        $('.bt-alterar-senha').on('click', function(event) {
            event.preventDefault();
            console.log('ui');
            $('.campo-senha').attr('readonly', false);
        });

        $('.pre-determinado').on('change', function(event) {
            event.preventDefault();
            $('#duracao').attr('readonly', false);
        });

        $('.livre').on('change', function(event) {
            event.preventDefault();
            $('#duracao').attr('readonly', true);
        });



    }
}


$(document).ready(function() {
    ApplicationLoad.init();
});