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
(function () {

  /* Start::Choices JS */
  document.addEventListener('DOMContentLoaded', function () {
    var genericExamples = document.querySelectorAll('[data-trigger]');
    for (let i = 0; i < genericExamples.length; ++i) {
      var element = genericExamples[i];
      new Choices(element, {
        allowHTML: true,
        placeholderValue: '',
        searchPlaceholderValue: '',
      });
    }
  });

  // javascript functionality to preview photo file upload

  let ProfileChange = document.querySelector('#profile-change');

  ProfileChange.addEventListener('change', loadFile);

})();
