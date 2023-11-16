(function () {
    "use strict";
    let wishlistbtn = document.querySelectorAll(".wishlist");

    wishlistbtn.forEach((eleBtn) => {
        eleBtn.onclick = () => {
            let wishlist = eleBtn.closest(".wishlist-box");
            wishlist.remove();
            if(!document.querySelectorAll(".wishlist").length){
                document.querySelector(".whishlist-empty").classList.remove("hidden")
                document.querySelector(".whishlist-full").classList.add("hidden")
            }
        }
    })

    
})();

