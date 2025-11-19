// Import Swiper and modules
import Swiper from 'swiper';

import { Navigation, Pagination, Autoplay } from 'swiper/modules';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Import existing scripts
import './slick.carousel.js';
import './jquery.matchHeight.js';
import './jquery-scrolltofixed.js';
import './blazy.js';
import './accordion.js';
import './tabs.js';
import './doubletaptogo.js';
import './scripts.js';

// Initialize Swiper
document.addEventListener('DOMContentLoaded', function () {
    const swiperElement = document.querySelector('.swiper');

    if (swiperElement) {
        const swiper = new Swiper('.swiper', {
            modules: [Navigation, Pagination, Autoplay],

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
    }
});
