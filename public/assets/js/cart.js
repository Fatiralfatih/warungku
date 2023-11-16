(function () {
    "use strict";
    let cartbtn = document.querySelectorAll(".cart-btn");

    cartbtn.forEach((eleBtn) => {
        eleBtn.onclick = () => {
            let cart = eleBtn.closest(".cart-box")
            cart.remove();
            if (!document.querySelectorAll(".cart-btn").length) {
                document.querySelector(".cart-empty").classList.remove("hidden")
                document.querySelector(".cart-full").classList.add("hidden")
            }
        }
    })

    var productMinusBtn = document.querySelectorAll(".product-quantity-minus"),
        productPlusBtn = document.querySelectorAll(".product-quantity-plus"),
        
       
        minValue = 0,
        maxValue = 30;


    productMinusBtn.forEach((eleBtn1) => {
        eleBtn1.onclick = function (e) {
            let value =  e.currentTarget.nextElementSibling.value
            if (value > minValue) {
                value = value - 1;
                e.currentTarget.nextElementSibling.value=value;
            }
        }
    })
    productPlusBtn.forEach((eleBtn2) => {
        eleBtn2.onclick = function (e) {
            let value =  e.currentTarget.previousElementSibling.value
            if (value < maxValue) {
                value = Number(value) + 1;
                e.currentTarget.previousElementSibling.value=value;
            }
        }
    })


})();

