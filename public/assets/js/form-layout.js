(function () {
  "use strict";
  
  //To choose date
  flatpickr("#date", {});

  /* Start::Choices JS */
  document.addEventListener('DOMContentLoaded', function () {
    var genericExamples = document.querySelectorAll('[data-trigger]');
    for (let i = 0; i < genericExamples.length; ++i) {
      var element = genericExamples[i];
      new Choices(element, {
        allowHTML: true,
        allowSearch: false,
      });
    }
  });

})();