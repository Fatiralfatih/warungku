
(function () {
    "use strict";

    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
        // direction: "vertical",
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
    /* Start::Choices JS */
    document.addEventListener('DOMContentLoaded', function () {
        var genericExamples = document.querySelectorAll('.product-des-select');
        for (let i = 0; i < genericExamples.length; ++i) {
            var element = genericExamples[i];
            new Choices(element, {
                allowHTML: false,
            });
        }
    });

    var productMinusBtn = document.getElementById("product-quantity-minus"),
        productPlusBtn = document.getElementById("product-quantity-plus"),
        productInput = document.getElementById("product-quantity"),
        value = 0,
        minValue = 0,
        maxValue = 30;


    productMinusBtn.onclick = function () {
        if (value > minValue) {
            value = value - 1;
            productInput.value = value;

        }

    }
    productPlusBtn.onclick = function () {
        if (value < maxValue) {
            value = value + 1;
            productInput.value = value;
        }

    }

    /* Swiper 7 */
    var swiper7 = new Swiper(".related-product-slide", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        slidesPerView: 4,
        spaceBetween: 30,
        freeMode: true,
    });

    
})();