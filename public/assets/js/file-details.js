(function () {
  "use strict";
  /*Basic Gallery */
  var lightbox1 = GLightbox({
    selector: ".gallery",
    openEffect: "zoom",
    cssEfects: {
      zoom: { in: "zoomIn", out: "zoomOut" },
    },
  });

  /* Swiper  */
  var swiper = new Swiper(".mySwiper", {
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    slidesPerView: 1,
    loop: true,
    spaceBetween: 20,
    breakpoints: {
      400: {
        slidesPerView: 2,
      },
      500: {
        slidesPerView: 3,
      },
      700: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 3,
      },
      1400: {
        slidesPerView: 4,
      },
      1500: {
        slidesPerView: 5,
      },
    },
  });
})();
