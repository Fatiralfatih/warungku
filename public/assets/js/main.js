if (localStorage.Syntodarktheme) {
  document.querySelector("html").setAttribute("class", "dark");
  document.querySelector("html").setAttribute("data-header-styles", "dark");
}
if (localStorage.Syntortl) {
  document.querySelector("html").setAttribute("dir", "rtl");
}
if (localStorage.Syntolayout == "horizontal") {
  document.querySelector("html").setAttribute("data-nav-layout", "horizontal");

}

if(localStorage.Syntolighttheme && localStorage.Syntolayout == 'horizontal'){
  document.querySelector("html").setAttribute("data-menu-styles","light")
}
if (localStorage.Syntoboxed) {
  document.querySelector("html").setAttribute("data-width", "boxed");
}
if (localStorage.Syntoclassic) {
  document.querySelector("html").setAttribute("data-page-style", "classic");
}
if (localStorage.SyntoMenu == "color") {
  document.querySelector("html").setAttribute("data-menu-styles", "color");
}
if (localStorage.SyntoHeader == "color") {
  document.querySelector("html").setAttribute("data-header-styles", "color");
}
if (localStorage.SyntoMenu == "gradient") {
  document.querySelector("html").setAttribute("data-menu-styles", "gradient");
}
if (localStorage.SyntoHeader == "gradient") {
  document.querySelector("html").setAttribute("data-header-styles", "gradient");
}
if (localStorage.SyntoMenu == "dark") {
  document.querySelector("html").setAttribute("data-menu-styles", "dark");
}
if (localStorage.SyntoHeader == "dark") {
  document.querySelector("html").setAttribute("data-header-styles", "dark");
}
if (localStorage.SyntoMenu == "light") {
  document.querySelector("html").setAttribute("data-menu-styles", "light");
}
if (localStorage.SyntoHeader == "light") {
  document.querySelector("html").setAttribute("data-header-styles", "light");
}
if (localStorage.SyntoMenu == "transparent") {
  document
    .querySelector("html")
    .setAttribute("data-menu-styles", "transparent");
}
if (localStorage.SyntoHeader == "transparent") {
  document
    .querySelector("html")
    .setAttribute("data-header-styles", "transparent");
}
if (localStorage.primaryRGB) {
  document
    .querySelector("html")
    .style.setProperty("--color-primary", localStorage.primaryRGB1);
  document
    .querySelector("html")
    .style.setProperty("--color-primary-rgb", localStorage.primaryRGB);
}
if (localStorage.bodyBgRGB) {
  document
    .querySelector("html")
    .style.setProperty("--body-bg", localStorage.bodyBgRGB);
  document
    .querySelector("html")
    .style.setProperty("--dark-bg", localStorage.darkBgRGB);
  let html = document.querySelector("html");
  html.classList.add("dark");
  html.classList.remove("light");
  html.setAttribute("data-menu-styles", "dark");
  html.setAttribute("data-header-styles", "dark");
}
if (localStorage.bgimg == "bgimg1") {
  document.querySelector("html").setAttribute("bg-img", "bgimg1");
}
if (localStorage.bgimg == "bgimg2") {
  document.querySelector("html").setAttribute("bg-img", "bgimg2");
}
if (localStorage.bgimg == "bgimg3") {
  document.querySelector("html").setAttribute("bg-img", "bgimg3");
}
if (localStorage.bgimg == "bgimg4") {
  document.querySelector("html").setAttribute("bg-img", "bgimg4");
}
if (localStorage.bgimg == "bgimg5") {
  document.querySelector("html").setAttribute("bg-img", "bgimg5");
}
if (localStorage.Syntoverticalstyles == "closed") {
  document.querySelector("html").setAttribute("data-vertical-style", "closed");
}
if (localStorage.Syntoverticalstyles == "icontext") {
  document
    .querySelector("html")
    .setAttribute("data-vertical-style", "icontext");
}
if (localStorage.Syntoverticalstyles == "overlay") {
  document.querySelector("html").setAttribute("data-vertical-style", "overlay");
}
if (localStorage.Syntoverticalstyles == "detached") {
  document
    .querySelector("html")
    .setAttribute("data-vertical-style", "detached");
}
if (localStorage.Syntoverticalstyles == "doublemenu") {
  document
    .querySelector("html")
    .setAttribute("data-vertical-style", "doublemenu");
}

