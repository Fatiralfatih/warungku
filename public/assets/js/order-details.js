
(function () {
    "use strict";

    var starRating2 = raterJs({
        starSize: 20,
        max: 5,
        rating: 4,
        element: document.querySelector("#product-rater"),
        disableText: "Custom disable text!",
        ratingText: "My custom rating text {rating}",
        showToolTip: true,
        rateCallback: function rateCallback(rating, done) {
            starRating2.setRating(rating);
            starRating2.disable();
            done();
        }
    });
})();