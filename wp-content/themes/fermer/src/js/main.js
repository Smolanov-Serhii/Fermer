$(document ).ready(function() {
    // if ($('.add_to_wishlist.single_add_to_wishlist').length){
    //     $( ".add_to_wishlist.single_add_to_wishlist" ).click(function() {
    //         $(this).removeClass('add_to_wishlist');
    //         $(this).removeClass('single_add_to_wishlist');
    //         $(this).addClass('delete_item');
    //     });
    // }
    // if ($('.yith-wcwl-add-button a.delete_item').length){
    //     $( ".yith-wcwl-add-button a.delete_item" ).click(function() {
    //         $(this).removeClass('delete_item');
    //         $(this).addClass('add_to_wishlist');
    //         $(this).addClass('single_add_to_wishlist');
    //     });
    // }

    $( ".mobile-menu__burger" ).click(function() {
        $('.mobile-menu__nav').addClass('show-menu');
    });

    $( ".close-nav-mobile" ).click(function() {
        $('.mobile-menu__nav').removeClass('show-menu');
    });

    if ($('.product-quantity').length){
        $( ".product-quantity" ).each(function( index ) {
            let elem = $(this).find('input').closest('.quantity');
            $(elem).append('<div class="number"></div>')
            $(elem).find('.number').append('<button class="number-minus" type="button">-</button>')
            $(this).find('.number').append($(this).find('.input-text'));
            $(elem).find('.number').append('<button class="number-plus" type="button">+</button>')
        });

        $( ".number-plus, .number-minus" ).click(function() {
            $('td.actions .button').removeAttr('disabled');
        });
    }

    if ($('.single-product').length){

        $('.summary.entry-summary .cart').append($('div.yith-wcwl-add-button'));

        $( ".single-product .cart" ).each(function( index ) {
            let elem = $(this).find('input').closest('.quantity');
            $(elem).append('<div class="number"></div>')
            $(elem).find('.number').append('<button class="number-minus" type="button">-</button>')
            $(this).find('.number').append($(this).find('.input-text'));
            $(elem).find('.number').append('<button class="number-plus" type="button">+</button>')
        });


        $( ".number-plus, .number-minus" ).click(function() {
            $('td.actions .button').removeAttr('disabled');
        });
    }
    if ($('.pets').length){
        var PetSlider = new Swiper('.pets .swiper-container', {
            // Optional parameters
            slidesPerView: 3,
            spaceBetween: 120,
            // Navigation arrows
            navigation: {
                nextEl: '.pets .swiper-button-next',
                prevEl: '.pets .swiper-button-prev',
            },
            breakpoints: {
                1100: {
                    slidesPerView: 3,
                    spaceBetween: 80,
                },
                900: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },

            },
        })
    }

    if ($('.awards').length){
        var AwardsSlider = new Swiper('.awards .swiper-container', {
            // Optional parameters
            slidesPerView: 3,
            spaceBetween: 80,
            centeredSlides: true,
            initialSlide: 1,
            // Navigation arrows
            navigation: {
                nextEl: '.awards .swiper-button-next',
                prevEl: '.awards .swiper-button-prev',
            },
            breakpoints: {
                1100: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                    centeredSlides: true,
                },
                600: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    centeredSlides: false,
                },
                500: {
                    slidesPerView: 1,
                    spaceBetween: 60,
                },
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },

            },
        })
    }

    if ($('input.tnp-email').length){
        $("input.tnp-email").attr("placeholder", "Введите Ваш E-mail");
    }

    if ($('.viewed .products.columns-4').length){
        $('.viewed .products.columns-4').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            // autoplay: true,
            arrows:true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1350,
                    settings: {
                        slidesToShow: 3,
                        rows: 1,
                        slidesToScroll: 1,
                        fade: false,
                        infinite: true
                    }
                },
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                        rows: 1,
                        slidesToScroll: 1,
                        fade: false,
                        infinite: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        rows: 1,
                        slidesToScroll: 1,
                        fade: false,
                        infinite: true
                    }
                }
            ]
        });
    }

    if ($('.featured .products.columns-4').length){
        $('.featured .products.columns-4').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            // autoplay: true,
            arrows:true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1350,
                    settings: {
                        slidesToShow: 3,
                        rows: 1,
                        slidesToScroll: 1,
                        fade: false,
                        infinite: true
                    }
                },
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                        rows: 1,
                        slidesToScroll: 1,
                        fade: false,
                        infinite: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        rows: 1,
                        slidesToScroll: 1,
                        fade: false,
                        infinite: true
                    }
                }
            ]
        });
    }

    if ($('.reviews').length){
        $('.reviews .strong-content').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            rows: 2,
            fade: true,
            infinite: true,
            // autoplay: true,
            arrows:true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        rows: 1,
                        slidesToScroll: 1,
                        fade: false,
                        infinite: true
                    }
                }
            ]
        });
    }

    if ($('.quantity div.number').length){
        $( '.quantity div.number' ).each(function( index ) {
            let col = $(this).find('input');
            let plus = $(this).find('.number-plus');
            let minus = $(this).find('.number-minus');
            plus.click(function() {
                col.val(parseInt(col.val())+1);
                var check = col.val();
                if (check > 1){
                    minus.removeClass('disable');
                }
            });
            minus.click(function() {
                var check = col.val();
                if (check > 1){
                    col.val(parseInt(col.val())-1);
                    minus.removeClass('disable');
                } else {
                    minus.addClass('disable');
                }

            });
        });
    }
    if ($('.custom-product-midle .number').length){
        $( '.custom-product-midle .number' ).each(function( index ) {
            let col = $(this).find('input');
            let plus = $(this).find('.number-plus');
            let minus = $(this).find('.number-minus');
            let clone = $('.quantity').find('input');
            plus.click(function() {
                clone.val(parseInt(col.val())+1);
                col.val(parseInt(col.val())+1);
                var check = col.val();
                if (check > 1){
                    minus.removeClass('disable');
                }
            });
            minus.click(function() {
                var check = col.val();
                if (check > 1){
                    clone.val(parseInt(col.val())-1);
                    col.val(parseInt(col.val())-1);
                    minus.removeClass('disable');
                } else {
                    minus.addClass('disable');
                }

            });
        });
    }

});






