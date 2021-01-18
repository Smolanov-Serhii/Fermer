$( document ).ready(function() {

    $('.family__play-btn').click(function() {
        $videoContainer = $('video'),
            $videoControls = $('.family__play-btn'),
            $video = $('video')[0];

        src = $('video').data('src');
        $('.family__cover').fadeOut(300);
        $('.family__fresco').addClass('active');
        $('video').fadeIn(300);
        $('video').attr('src', src);
        $video.play();
    });

    $('.treners__list').on('afterChange', function(event, slick, currentSlide, nextSlide){
        console.log('change');
    });

    $("a.custom-logo-link").on("click", function(e){
        e.preventDefault();
        var anchor = $(this).attr('href');
        $('html, body').stop().animate({
            scrollTop: $(anchor).offset().top - 60
        }, 800);
    });

        $('.header__burger').click(function () {
            $(this).toggleClass('activate');
            $('.mobile__menu').toggleClass('active');
            $('.mobile__fade').fadeToggle(300);
            $('body').toggleClass('locked');
        });
    $('.mobile__menu-list .menu-item a').click(function () {
        $('.mobile__menu').removeClass('active');
        $('.mobile__fade').fadeOut('300');
        $('body').removeClass('locked');
    });


    document.addEventListener( 'wpcf7mailsent', function( event ) {

        setTimeout(function () {
            $('.wpcf7-form .wpcf7-response-output').fadeOut(300);
            $('.popup').fadeOut(300);
        }, 2000)
    }, false );



    $('.faq__item').each(function() {
        $(this).click(function () {
            $(this).find('.faq__ansf').slideToggle(300);
            // $(this).toggleClass('active');
        });
    });
    $('.js-message').click(function () {
        $('.popup').fadeIn(300);
        $('body').addClass('locked');
    });
    $('.popup__close').click(function () {
        $('.popup').fadeOut(300);
        $('body').removeClass('locked');
    });

    var $page = $('html, body');
    $('a[href*="#"]').click(function() {
        $page.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 400);
        return false;
    });

    // $(window).scroll(function(e){
    //     parallax();
    // });
    // function parallax(){
    //     var scrolled = $(window).scrollTop();
    //     $('.landing__header').css('background-position', '0 '+(scrolled*0.2)+'px');
    // }




    jQuery(function($) {

        const section = $('.section'),
            nav = $('.menu'),
            navHeight = nav.outerHeight(); // получаем высоту навигации

        // поворот экрана
        window.addEventListener('orientationchange', function () {
            navHeight = nav.outerHeight();
        }, false);

        $(window).on('scroll', function () {
            const position = $(this).scrollTop();

            section.each(function () {
                const top = $(this).offset().top - navHeight - 5,
                    bottom = top + $(this).outerHeight();

                if (position >= top && position <= bottom) {
                    nav.find('a').removeClass('active');
                    section.removeClass('active');

                    $(this).addClass('active');
                    nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
                }
            });
        });

        nav.find('a').on('click', function () {
            const id = $(this).attr('href');

            $('html, body').animate({
                scrollTop: $(id).offset().top - navHeight
            }, 487);

            return false;
        });

    });

});






