window.addEventListener("load", () => {
  const themeBtn = document.querySelectorAll("[data-hs-theme-click-value]");
  let html = document.querySelector("html");

  themeBtn.forEach(($item) => {
    $item.addEventListener("click", () => {
      if (html.classList.contains("dark")) {
        html.classList.remove("dark");
        localStorage.removeItem("layout-theme");
        localStorage.removeItem("Syntodarktheme");
        localStorage.removeItem("SyntoMenu");
        localStorage.removeItem("SyntoHeader");
        localStorage.removeItem("darkBgRGB");
        localStorage.removeItem("bodyBgRGB");
        html.setAttribute("data-menu-styles", "dark");
        html.setAttribute("data-header-styles", "light");
        html.style.removeProperty("--body-bg");
        html.style.removeProperty("--dark-bg");
        if (document.querySelector("#hs-overlay-switcher")) {
          document.getElementById("switcher-light-theme").checked = true;
        }
      } else {
        if (document.querySelector("#hs-overlay-switcher")) {
          document.getElementById("switcher-dark-theme").checked = true;
        }
        html.setAttribute("class", "dark");
        localStorage.setItem("layout-theme", "dark");
        html.setAttribute("data-header-styles", "dark");
        html.setAttribute("data-menu-styles", "dark");
        localStorage.removeItem("SyntoMenu");
        localStorage.removeItem("SyntoHeader");
        localStorage.setItem("Syntodarktheme", true);
        localStorage.removeItem("Syntolighttheme");
        localStorage.setItem("SyntoMenu", "dark");
        localStorage.setItem("SyntoHeader", "dark");
      }
    });
  });
});
