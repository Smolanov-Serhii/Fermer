$( document ).ready(function() {
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
});






