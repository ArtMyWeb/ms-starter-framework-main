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
        const swiperElement = document.querySelector('.why-hire-swiper');
        console.log(swiperElement);
        if (swiperElement && typeof Swiper !== 'undefined') {
            const swiper = new Swiper('.why-hire-swiper', {
                // Optional parameters
                loop: true,
                spaceBetween: 30,
                slidesPerView: 1,



                // Pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },



                // Responsive breakpoints
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                },
            });
            console.log(swiper);
        }
    }
})();
