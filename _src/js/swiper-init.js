// Initialize Swiper (Note: Swiper bundle must be loaded via CDN in header.php)
(function () {
    'use strict';

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSwiper);
    } else {
        initSwiper();
    }

    function initSwiper() {
        const swiperElement = document.querySelector('.swiper');
        console.log(swiperElement);
        if (swiperElement && typeof Swiper !== 'undefined') {
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                loop: true,
                spaceBetween: 30,
                slidesPerView: 1,

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // Pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                // Autoplay
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },

                // Responsive breakpoints
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                },
            });
            console.log(swiper);
        }
    }
})();
