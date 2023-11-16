(function () {
  "use strict";

  /* Start::Choices JS */
  document.addEventListener('DOMContentLoaded', function () {
    var genericExamples = document.querySelectorAll('.billing-search');
    for (let i = 0; i < genericExamples.length; ++i) {
      var element = genericExamples[i];
      new Choices(element, {
        allowHTML: true,
        searchEnabled: false,
        removeItemButton: true,
      });
    }
  });
})();