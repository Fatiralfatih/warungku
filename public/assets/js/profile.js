"use strict";

let loadFile = function (event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('profile-img');
        if (event.target.files[0].type.match('image.*')) {
            output.src = reader.result;
        } else {
            event.target.value = '';
            alert('please select a valid image');
        }
    };
    reader.readAsDataURL(event.target.files[0]);
};
let loadFile2 = function (event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('profile-img2');
        if (event.target.files[0].type.match('image.*')) {
            output.src = reader.result;
        } else {
            event.target.value = '';
            alert('please select a valid image');
        }
    };
    reader.readAsDataURL(event.target.files[0]);
};

(function () {

    // let coverImg = document.querySelectorAll(".cover-image");

    // coverImg.forEach(function (e) {
    //     var attr = e.getAttribute('data-image');
    //     if (typeof attr !== typeof undefined && attr !== false) {
    //         e.style.background = `url(${attr}) center center`
    //     }
    // });

    let ProfileChange = document.querySelector('#profile-change');
    let ProfileChange2 = document.querySelector('#profile-change2');

    ProfileChange.addEventListener('change', loadFile);
    ProfileChange2.addEventListener('change', loadFile2);

    /*Basic Gallery */
    var lightbox = GLightbox();
    lightbox.on('open', (target) => {
    });
    var lightbox1 = GLightbox({
        selector: ".gallery"
    });

    /* Start::Choices JS */
    document.addEventListener('DOMContentLoaded', function () {
        var genericExamples = document.querySelectorAll('[data-trigger]');
        for (let i = 0; i < genericExamples.length; ++i) {
            var element = genericExamples[i];
            new Choices(element, {
                allowHTML: true,
                searchEnabled: false,
            });
        }
    });
})();
