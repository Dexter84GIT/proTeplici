// core version + navigation, pagination modules:
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
// import Swiper and modules styles
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const bannerSlider = () => {


    // init Swiper:
    const swiper = new Swiper('.swiper', {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        spaceBetween: 10,
        direction: 'vertical',
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 50,
            },
        },
    })
}

export default bannerSlider