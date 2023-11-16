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
  //To choose date
  flatpickr(".date", {});

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

  let ProfileChange = document.querySelector('#profile-change');
  let ProfileChange2 = document.querySelector('#profile-change2');

  ProfileChange.addEventListener('change', loadFile);
  ProfileChange2.addEventListener('change', loadFile2);

    /* Start::Choices JS */
    document.addEventListener('DOMContentLoaded', function () {
      var genericExamples = document.querySelectorAll('.skills');
      for (let i = 0; i < genericExamples.length; ++i) {
          var element = genericExamples[i];
          new Choices(element, {
              allowHTML: true,
              paste: false,
              duplicateItemsAllowed: false,
              editItems: true, 
              removeItemButton: true,
          });
      }
  }); 

})();