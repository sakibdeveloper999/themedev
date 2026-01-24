document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.testimonials-slider', {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        spaceBetween: 24,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });
});