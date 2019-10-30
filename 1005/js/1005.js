 $( document ).ready(function() {
     var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 10,
      freeMode: true,
     
       navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
      	320: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
      	360: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
      	460: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
      }
    });
    })