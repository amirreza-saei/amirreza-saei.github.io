/*======== Window Load Function ========*/
$(window).on('load', function() {
    "use strict";

    /*======== Preloader ========*/
    $(".loader").fadeOut();
    $(".preloader").delay(1000).fadeOut();


    /*======== Isotope Portfolio Setup ========*/
    if( $('.portfolio-items').length ) {
        var $elements = $(".portfolio-items"),
            $filters = $('.portfolio-filter ul li');
        $elements.isotope();

        $filters.on('click', function(){
            $filters.removeClass('active');
            $(this).addClass('active');
            var selector = $(this).data('filter');
            $(".portfolio-items").isotope({
                filter: selector,
                hiddenStyle: {
                    transform: 'scale(.2) skew(30deg)',
                    opacity: 0
                },
                visibleStyle: {
                    transform: 'scale(1) skew(0deg)',
                    opacity: 1,
                },
                transitionDuration: '.5s'
            });
        });
    }

    /*======== Blogs Masonry Setup ========*/
    if ($('.blogs-masonry').length) {
        var macy = Macy({
            container: '.blogs-masonry',
            trueOrder: true,
            waitForImages: false,
            margin: 0,
            columns: 3,
            breakAt: {
                980: 2,
                575: 1,
            }
        });

        setTimeout(function () {
            macy.reInit();
        }, 10);
    }
    $('#primary-menu').css('height', $('#primary-menu ul:first-child').height() + 'px');

});


/*======== Document Ready Function ========*/
$(document).ready(function() {

    "use strict";

    //Blog Sidebar slide animation
    $('#sidebar .sidebar-button').on('click', function() {
        $('#sidebar').toggleClass('open');

        if( $('#sidebar').hasClass('open') ) {

            setTimeout( function() {
                $('#sidebar .sidebar-button i').addClass('icon-rotate');
            }, 400);

        } else {
            setTimeout( function() {
                $('#sidebar .sidebar-button i').removeClass('icon-rotate');
            }, 400);
        }

    });

    $(document).mouseup(function (e) {
        var headerContainer = $('.header-main'),
            sidebarContainer = $('#sidebar')

        if (!headerContainer.is(e.target) && headerContainer.has(e.target).length === 0) {
            $('.header-content').removeClass('on');
        }

        if (!sidebarContainer.is(e.target) && sidebarContainer.has(e.target).length === 0) {
            sidebarContainer.removeClass('open');

            setTimeout( function() {
                $('#sidebar .sidebar-button i').removeClass('icon-rotate');
            }, 400);
        }

    });

    /*======== Slide Menu Setup ========*/
    $('#primary-menu').slideMenu({
        submenuLinkAfter: '<span class="link-after"></span>',
        backLinkBefore: '<span class="link-before"></span> ',
        keycodeClose: null,
    });
    $('#primary-menu .menu-item-has-children > a').on('click', function() {
        var $navHeight = $(this).closest('.menu-item-has-children').children('.sub-menu.active').height();
        $('#primary-menu').css('height', $navHeight + 'px');
    });
    $('#primary-menu .slide-menu-control[data-action="back"]').on('click', function() {
        var $navHeight = $(this).closest('ul').parent('li').closest('ul').height();

        $('#primary-menu').css('height', $navHeight + 'px');
    });

    /*======== SimpleBar Setup ========*/
    $('.pt-page').each(function() {
        var $id = '#' + $(this).attr('id');
        new SimpleBar($($id)[0]);
    });

    /*======== Fitty Setup ========*/
    fitty('.header-name', {
        multiLine: false,
        maxSize: 20,
        minSize: 10
    });

    /*======== Active Current Link ========*/
    $('.nav-menu a:not([data-action])').on('click',function() {

        if( $(this).parent().hasClass('menu-item-has-children') ) {
            return;
        }

        if($('.header-content.on').length) {
            $('.header-content').removeClass('on');
        }
    });

    /*======== Mobile Toggle Click Setup ========*/
    $('.header-toggle').on('click', function() {
        $('header .header-content').toggleClass('on');
    });

    /*========Clients OwlCarousel Setup========*/
    $('.clients .owl-carousel').each( function() {
        var $this = $(this);

        $this.owlCarousel({
            loop: $this.data('owl-loop'),
            margin: 30,
            autoplay: $this.data('owl-autoplay'),
            smartSpeed: 500,
            responsiveClass: true,
            autoplayHoverPause: true,
            autoplayTimeout: $this.data('owl-speed'),
            dots: $this.data('owl-dots'),
            responsive: {
                0: {
                    items: 2,
                },
                500: {
                    items: 3,
                },
                700: {
                    items: 4,
                },
                1000: {
                    items: 6,
                },
            },

        });
    });

    /*========Testimonials OwlCarousel Setup========*/
    $('.testimonials .owl-carousel').each(function () {
        var $this = $(this);

        $this.owlCarousel({
            loop: $this.data('owl-loop'),
            margin: 30,
            autoplay: $this.data('owl-autoplay'),
            smartSpeed: 500,
            responsiveClass: true,
            autoplayHoverPause: true,
            autoplayTimeout: $this.data('owl-speed'),
            dots: $this.data('owl-dots'),
            responsive: {
                0: {
                    items: 1,
                },
                800: {
                    items: 1,
                },
                1000: {
                    items: 2,
                },
            },
        });
    });

    /*======== Portfolio Image Link Setup ========*/
    $('.portfolio-items .image-link').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*======== Portfolio Video Link Setup ========*/
    $('.portfolio-items .video-link').magnificPopup({
        type: 'iframe',
        gallery: {
            enabled: true
        }
    });

    /*======== Portfolio Music Link Setup ========*/
    $('.portfolio-items .music-link').magnificPopup({
        type: 'iframe',
        gallery: {
            enabled: true
        }
    });

    /*======== Portfolio Ajax Link Setup ========*/
    ajaxPortfolioSetup($('.portfolio-items .ajax-link'), $('.ajax-portfolio-popup'));

    /*======== Portfolio Tilt Setup ========*/
    $('.portfolio .portfolio-item figure').tilt({
        maxTilt: 3,
        glare: true,
        maxGlare: .6,
        reverse: true
    });

    /*======== Contact Form Setup ========*/
    contactFormSetup();
});


/*********** Function Ajax Portfolio Setup **********/
function ajaxPortfolioSetup($ajaxLink, $ajaxContainer) {
    $ajaxLink.on('click', function(e) {
        var link = $(this).attr('href');

        if(link === "#") {
            e.preventDefault();
            return;
        }

        $ajaxContainer.find('.content-wrap .popup-content').empty();

        $ajaxContainer.addClass('on');
        $.ajax({
            url: link,
            beforeSend: function() {
                $ajaxContainer.find('.ajax-loader').show();
            },
            success: function(result) {

                var heading = $(result).find('.portfolio-title'),
                    content = $(result).find('.portfolio-content');

                $ajaxContainer.find('.content-wrap .popup-heading').html(heading);
                $ajaxContainer.find('.content-wrap .popup-content').html(content);
            },
            complete: function() {
                $ajaxContainer.find('.ajax-loader').hide();
            },
            error: function(e) {
                $ajaxContainer.find('.ajax-loader').hide();
                $ajaxContainer.find('.content-wrap .popup-content').html('<h1 class="text-center">Something went wrong! Retry or refresh the page.</h1>')
            }
        });
        e.preventDefault();
    });

    $ajaxContainer.find('.popup-close').on('click', function() {
        $ajaxContainer.removeClass('on');
    });


}

/********** Function Contact Form Setup **********/
function contactFormSetup() {

    /*======== Check Field Have Value When Page Load ========*/
    $('.input__field').each(function() {
        if($(this).val()) {
            $(this).parents('.input').addClass('input--filled');
        } else {
            $(this).parents('.input').removeClass('input--filled');
        }
    });

    /*======== Check Field Have Value When Keyup ========*/
    $('.input__field').on('keyup focusout', function() {
        if($(this).val()) {
            $(this).closest('.input').addClass('input--filled');
        } else {
            $(this).closest('.input').removeClass('input--filled');
        }
    });

    $('.input__field').on('focusin', function() {
        $(this).parent('span').parent('.input').addClass('input--filled');
    })

}