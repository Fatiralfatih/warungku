"use strict";
(() => {
  var navbar = document.querySelector(".header");
  var navbar1 = document.querySelector(".app-sidebar");
  var sticky = navbar.clientHeight;
  var sticky1 = navbar1.clientHeight;
  function stickyFn() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky-pin")
      navbar1.classList.add("sticky-pin")
    } else {
      navbar.classList.remove("sticky-pin");
      navbar1.classList.remove("sticky-pin");
    }
  }
  window.addEventListener('scroll', stickyFn);
  window.addEventListener('DOMContentLoaded', stickyFn);


})();