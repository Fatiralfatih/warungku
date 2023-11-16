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
    let ProfileChange = document.querySelector('#profile-change');
    let ProfileChange2 = document.querySelector('#profile-change2');

    ProfileChange.addEventListener('change', loadFile);
    ProfileChange2.addEventListener('change', loadFile2);
})();