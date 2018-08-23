jQuery(function ($) {
    $('.portfolioFilter ul li:first-child a').addClass('current');


    jQuery('.post-categories li a').attr('href', '');
    jQuery('.post-categories li a').css('cursor', 'auto');


    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 6
            },
            1000: {
                items: 5
            }
        }
    });


    $(window).load(function(){
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '.Ambient',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    });

    // $(document).ready(function(){
        $('.press').trigger('click');
    // });
});