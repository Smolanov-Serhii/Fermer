$(document ).ready(function() {
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
        });
    }
});






