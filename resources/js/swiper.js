import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation'
import 'swiper/css/pagination'

if(document.querySelector('.mySwiper')){
    const opciones = {
        //Asigna cuantos slider habran, tiene que llevar la coma al final
        slidesPerView: 1,
        autoplay: {
            delay: 5000, // Tiempo en milisegundos entre cada diapositiva
            disableOnInteraction: false, // Deshabilita la pausa al interactuar con el slider
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
          },
        loop: true
    }
    Swiper.use([Navigation])
    Swiper.use([Autoplay])
    Swiper.use([Pagination])
    new Swiper(".mySwiper", opciones);
}

document.addEventListener('DOMContentLoaded', function() {
    if(document.querySelector('.swiper2')) {
        const opciones = {
            //Asigna cuantos slider habran, tiene que llevar la coma al final
            slidesPerView: 1,
            //Como el gap
            spaceBetween: 15,
            //Por si no funciona
            FreeMode: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            autoplay: {
                delay: 4000, // Tiempo en milisegundos entre cada diapositiva
                disableOnInteraction: true, // Deshabilita la pausa al interactuar con el slider
            },
            loop: true,
            //Como utilizar mq para ajustar segun la pantalla, breakpoints para indicar el mq, luego va a partir de que tamaño se ejecuta y entre llaves las propiedades a modificar
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 4
                }
            }
        }
        Swiper.use([Autoplay])
        Swiper.use([Navigation])
        new Swiper('.slider2', opciones)
    }
});
