(function () {
  "use strict";

  /* Basic Swiper  */
  var swiper = new Swiper(".Swiperslide-1", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    spaceBetween: 2,
  });

  /* Swiper 1 */
  var swiper1 = new Swiper(".mySwiper1", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    spaceBetween: 2,
  });

  /* Swiper 2 */
  var swiper2 = new Swiper(".mySwiper-page", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
      clickable: true,
    },
    spaceBetween: 2,
  });

  /* Swiper 3 */
  var swiper3 = new Swiper(".mySwiper3", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    spaceBetween: 2,
  });

  /* Swiper 4 */
  var swiper4 = new Swiper(".mySwiper4", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: true,
    },
    spaceBetween: 2,
  });

  /* Swiper 5 */
  var swiper5 = new Swiper(".mySwiper5", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    direction: "vertical",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    spaceBetween: 2,
  });

  /* Swiper 6 */
  var swiper6 = new Swiper(".mySwiper6", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    slidesPerView: 2,
    spaceBetween: 30,
    breakpoints: {
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
        1400: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
    },
  });
  
  /* Swiper 7 */
  var swiper7 = new Swiper(".mySwiper7", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    slidesPerView: 2,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
        1400: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
    },
  });

  /* Swiper 8 */
  var swiper8 = new Swiper(".mySwiper8", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    spaceBetween: 30,
    effect: "fade",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  /* Swiper 9 */
  var swiper9 = new Swiper(".mySwiper9", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    effect: "cube",
    grabCursor: true,
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 0.94,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  /* Swiper 10 */
  var swiper10 = new Swiper(".mySwiper10", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  /* Swiper 11 */
  var swiper11 = new Swiper(".mySwiper11", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    effect: "flip",
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  /* Swiper 12 */
  var swiper12 = new Swiper(".mySwiper12", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    effect: "cards",
    grabCursor: true,
  });
  /* Swiper 13 */
  var swiper13 = new Swiper(".mySwiper13", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    zoom: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
})();
