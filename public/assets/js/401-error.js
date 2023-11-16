(function () {
    "use strict";

    window.onload = function () {
        Particles.init({
            selector: '.error-basic-background',
            // color: 'rgba(24, 46 ,118,0.5)',
            color: 'rgba(90, 102 ,241,0.8)',
            number: {
                value: 80,
                density: {
                    enable: true,
                    value_area: 200
                }
            },
        });
    };

})();