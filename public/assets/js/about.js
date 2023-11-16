(function () {
    "use strict";


  /* Swiper 7 */
  var swiper7 = new Swiper(".about-swipe2", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    slidesPerView: 1,
    spaceBetween: 30,
    freeMode: true,
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 50,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
  });

})();