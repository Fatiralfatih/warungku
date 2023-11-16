/* footer year */
document.getElementById("year").innerHTML = new Date().getFullYear();
/* footer year */

/* back to top */
const scrollToTop = document.querySelector(".scrollToTop");
const $rootElement = document.documentElement;
const $body = document.body;
window.onscroll = () => {
  const scrollTop = window.scrollY || window.pageYOffset;
  const clientHt = $rootElement.scrollHeight - $rootElement.clientHeight;
  if (window.scrollY > 100) {
    scrollToTop.style.display = "flex";
  } else {
    scrollToTop.style.display = "none";
  }
};
scrollToTop.onclick = () => {
  window.scrollTo(0, 0);
};
/* back to top */

if(document.querySelector("#hs-overlay-switcher")){
  
//switcher color pickers
const pickrContainerPrimary = document.querySelector(
  ".pickr-container-primary"
);
const themeContainerPrimary = document.querySelector(
  ".theme-container-primary"
);
const pickrContainerBackground = document.querySelector(
  ".pickr-container-background"
);
const themeContainerBackground = document.querySelector(
  ".theme-container-background"
);

/* for theme primary */
const nanoThemes = [
  [
    "nano",
    {
      defaultRepresentation: "RGB",
      components: {
        preview: true,
        opacity: false,
        hue: true,

        interaction: {
          hex: false,
          rgba: true,
          hsva: false,
          input: true,
          clear: false,
          save: false,
        },
      },
    },
  ],
];
const nanoButtons = [];
let nanoPickr = null;
for (const [theme, config] of nanoThemes) {
  const button = document.createElement("button");
  button.innerHTML = theme;
  nanoButtons.push(button);

  button.addEventListener("click", () => {
    const el = document.createElement("p");
    pickrContainerPrimary.appendChild(el);

    /* Delete previous instance */
    if (nanoPickr) {
      nanoPickr.destroyAndRemove();
    }

    /* Apply active class */
    for (const btn of nanoButtons) {
      btn.classList[btn === button ? "add" : "remove"]("active");
    }

    /* Create fresh instance */
    nanoPickr = new Pickr(
      Object.assign(
        {
          el,
          theme,
          default: "#5e76a6",
        },
        config
      )
    );

    /* Set events */
    nanoPickr.on("changestop", (source, instance) => {
      let color = instance.getColor().toRGBA();
      let html = document.querySelector("html");
      html.style.setProperty(
        "--color-primary",
        `${Math.floor(color[0])} ${Math.floor(color[1])} ${Math.floor(
          color[2]
        )}`
      );
      html.style.setProperty(
        "--color-primary-rgb",
        `${Math.floor(color[0])} ,${Math.floor(color[1])}, ${Math.floor(
          color[2]
        )}`
      );
      /* theme color picker */
      localStorage.setItem(
        "primaryRGB",
        `${Math.floor(color[0])}, ${Math.floor(color[1])}, ${Math.floor(
          color[2]
        )}`
      );
      localStorage.setItem(
        "primaryRGB1",
        `${Math.floor(color[0])} ${Math.floor(color[1])} ${Math.floor(
          color[2]
        )}`
      );
      updateColors();
    });
  });

  themeContainerPrimary.appendChild(button);
}
nanoButtons[0].click();
/* for theme primary */

/* for theme background */
const nanoThemes1 = [
  [
    "nano",
    {
      defaultRepresentation: "RGB",
      components: {
        preview: true,
        opacity: false,
        hue: true,

        interaction: {
          hex: false,
          rgba: true,
          hsva: false,
          input: true,
          clear: false,
          save: false,
        },
      },
    },
  ],
];
const nanoButtons1 = [];
let nanoPickr1 = null;
for (const [theme, config] of nanoThemes) {
  const button = document.createElement("button");
  button.innerHTML = theme;
  nanoButtons1.push(button);

  button.addEventListener("click", () => {
    const el = document.createElement("p");
    pickrContainerBackground.appendChild(el);

    /* Delete previous instance */
    if (nanoPickr1) {
      nanoPickr1.destroyAndRemove();
    }

    /* Apply active class */
    for (const btn of nanoButtons) {
      btn.classList[btn === button ? "add" : "remove"]("active");
    }

    /* Create fresh instance */
    nanoPickr1 = new Pickr(
      Object.assign(
        {
          el,
          theme,
          default: "#5e76a6",
        },
        config
      )
    );

    /* Set events */
    nanoPickr1.on("changestop", (source, instance) => {
      let color = instance.getColor().toRGBA();
      let html = document.querySelector("html");
      html.style.setProperty(
        "--body-bg",
        `${Math.floor(color[0] + 14)}
           ${Math.floor(color[1] + 14)}
            ${Math.floor(color[2] + 14)}`
      );
      html.style.setProperty(
        "--dark-bg",
        `
          ${Math.floor(color[0])}
          ${Math.floor(color[1])}
          ${Math.floor(color[2])}

          `
      );
      localStorage.removeItem("bgtheme");
      updateColors();
      html.classList.add("dark");
      html.classList.remove("light");
      html.setAttribute("data-menu-styles", "dark");
      html.setAttribute("data-header-styles", "dark");
      document.querySelector("#switcher-dark-theme").checked = true;
      localStorage.setItem(
        "bodyBgRGB",
        `${Math.floor(color[0] + 14)}
           ${Math.floor(color[1] + 14)}
            ${Math.floor(color[2] + 14)}`
      );
      localStorage.setItem(
        "darkBgRGB",
        `${Math.floor(color[0])} ${Math.floor(color[1])} ${Math.floor(
          color[2]
        )}`
      );
    });
  });
  themeContainerBackground.appendChild(button);
}
nanoButtons1[0].click();
/* for theme background */
}

let mainContent;
(function () {
  let html = document.querySelector("html");
  mainContent = document.querySelector(".main-content");
  localStorageBackup();
  if(document.querySelector("#hs-overlay-switcher")){
    switcherClick();
    checkOptions();
  }
  /* LTR to RTL */
  // html.setAttribute("dir" , "rtl") // for rtl version
})();

function switcherClick() {
  let ltrBtn,
    rtlBtn,
    lightBtn,
    darkBtn,
    primaryDefaultColor1Btn,
    primaryDefaultColor2Btn,
    primaryDefaultColor3Btn,
    primaryDefaultColor4Btn,
    primaryDefaultColor5Btn,
    bgDefaultColor1Btn,
    bgDefaultColor2Btn,
    bgDefaultColor3Btn,
    bgDefaultColor4Btn,
    bgDefaultColor5Btn,
    ResetAll;
  let html = document.querySelector("html");
  lightBtn = document.querySelector("#switcher-light-theme");
  darkBtn = document.querySelector("#switcher-dark-theme");
  ltrBtn = document.querySelector("#switcher-ltr");
  rtlBtn = document.querySelector("#switcher-rtl");
  primaryDefaultColor1Btn = document.querySelector("#switcher-primary");
  primaryDefaultColor2Btn = document.querySelector("#switcher-primary1");
  primaryDefaultColor3Btn = document.querySelector("#switcher-primary2");
  primaryDefaultColor4Btn = document.querySelector("#switcher-primary3");
  primaryDefaultColor5Btn = document.querySelector("#switcher-primary4");
  bgDefaultColor1Btn = document.querySelector("#switcher-background");
  bgDefaultColor2Btn = document.querySelector("#switcher-background1");
  bgDefaultColor3Btn = document.querySelector("#switcher-background2");
  bgDefaultColor4Btn = document.querySelector("#switcher-background3");
  bgDefaultColor5Btn = document.querySelector("#switcher-background4");
  ResetAll = document.querySelector("#reset-all");

  /* Light Layout Start */
  let lightThemeVar = lightBtn.addEventListener("click", () => {
    lightFn();
    localStorage.setItem("SyntolandingHeader", "light");
    localStorage.setItem("SyntolandingMenu", "light");
  });
  /* Light Layout End */

  /* Dark Layout Start */
  let darkThemeVar = darkBtn.addEventListener("click", () => {
    darkFn();
    localStorage.setItem("SyntolandingMenu", "dark");
    localStorage.setItem("SyntolandingHeader", "dark");
  });
  /* Dark Layout End */

  // primary theme
  let primaryColor1Var = primaryDefaultColor1Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "58, 88, 146");
      localStorage.setItem("primaryRGB1", "58 88 146");
      html.style.setProperty("--color-primary-rgb", `58, 88, 146`);
      html.style.setProperty("--color-primary", `58 88 146`);
      updateColors();
    }
  );
  let primaryColor2Var = primaryDefaultColor2Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "92, 144, 163");
      localStorage.setItem("primaryRGB1", "92 144 163");
      html.style.setProperty("--color-primary-rgb", `92, 144, 163`);
      html.style.setProperty("--color-primary", `92 144 163`);
      updateColors();
    }
  );
  let primaryColor3Var = primaryDefaultColor3Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "172, 172, 80");
      localStorage.setItem("primaryRGB1", "172 172 80");
      html.style.setProperty("--color-primary-rgb", `172, 172, 80`);
      html.style.setProperty("--color-primary", `172 172 80`);
      updateColors();
    }
  );
  let primaryColor4Var = primaryDefaultColor4Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "165, 94, 131");
      localStorage.setItem("primaryRGB1", "165 94 131");
      html.style.setProperty("--color-primary-rgb", `165, 94, 131`);
      html.style.setProperty("--color-primary", `165 94 131`);
      updateColors();
    }
  );
  let primaryColor5Var = primaryDefaultColor5Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "87, 68, 117");
      localStorage.setItem("primaryRGB1", "87 68 117");
      html.style.setProperty("--color-primary-rgb", `87, 68, 117`);
      html.style.setProperty("--color-primary", `87 68 117`);
      updateColors();
    }
  );
  // Background theme
  let backgroundColor1Var = bgDefaultColor1Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", `${50 + 14} ${62 + 14} ${93 + 14}`);
    localStorage.setItem("darkBgRGB", "50 62 93");
    localStorage.removeItem("SyntoHeader");
    localStorage.removeItem("SyntoMenu");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document
      .querySelector("html")
      .style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document
      .querySelector("html")
      .style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor2Var = bgDefaultColor2Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", `${81 + 14} ${93 + 14} ${50 + 14}`);
    localStorage.setItem("darkBgRGB", "81 93 50");
    localStorage.removeItem("SyntoHeader");
    localStorage.removeItem("SyntoMenu");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document
      .querySelector("html")
      .style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document
      .querySelector("html")
      .style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor3Var = bgDefaultColor3Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", `${79 + 14} ${50 + 14} ${93 + 14}`);
    localStorage.setItem("darkBgRGB", "79 50 93");
    localStorage.removeItem("SyntoHeader");
    localStorage.removeItem("SyntoMenu");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document
      .querySelector("html")
      .style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document
      .querySelector("html")
      .style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor4Var = bgDefaultColor4Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", `${50 + 14} ${87 + 14} ${93 + 14}`);
    localStorage.setItem("darkBgRGB", "50 87 93");
    localStorage.removeItem("SyntoHeader");
    localStorage.removeItem("SyntoMenu");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document
      .querySelector("html")
      .style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document
      .querySelector("html")
      .style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor5Var = bgDefaultColor5Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", `${93 + 14} ${50 + 14} ${50 + 14}`);
    localStorage.setItem("darkBgRGB", "93 50 50");
    localStorage.removeItem("SyntoHeader");
    localStorage.removeItem("SyntoMenu");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document
      .querySelector("html")
      .style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document
      .querySelector("html")
      .style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });

  /* rtl start */
  let rtlVar = rtlBtn.addEventListener("click", () => {
    localStorage.setItem("Syntortl", true);
    localStorage.removeItem("Syntoltr");
    rtlFn();
  });
  /* rtl end */

  /* ltr start */
  let ltrVar = ltrBtn.addEventListener("click", () => {
    //    local storage
    localStorage.setItem("Syntoltr", true);
    localStorage.removeItem("Syntortl");
    ltrFn();
  });
  /* ltr end */

  // reset all start
  let resetVar = ResetAll.addEventListener("click", () => {
    let html = document.querySelector("html");
    checkOptions();

    // clearing localstorage
    localStorage.clear();

    // clear rtl
    html.removeAttribute("dir", "rtl");
    html.setAttribute("dir", "ltr");

    // clear primary & bg color
    html.style.removeProperty(`--color-primary`);
    html.style.removeProperty(`--color-primary-rgb`);
    html.style.removeProperty(`--body-bg`);
    html.style.removeProperty(`--dark-bg`);

    ResetAllFn();

    // reseting chart colors
    updateColors();
  });
  // reset all start
}

function ltrFn() {
  let html = document.querySelector("html");
  html.setAttribute("dir", "ltr");
  document.querySelector("#switcher-ltr").checked = true;
  checkOptions();
}

function rtlFn() {
  let html = document.querySelector("html");
  html.setAttribute("dir", "rtl");
  checkOptions();
}

function lightFn() {
  let html = document.querySelector("html");
  html.classList.remove("dark");
  html.classList.add("light");
  html.style.removeProperty("--color-primary");
  html.style.removeProperty("--color-primary-rgb");
  html.style.removeProperty("--body-bg");
  html.style.removeProperty("--dark-bg");
  html.setAttribute("data-menu-styles",'');
  html.setAttribute("data-header-styles",'');
  localStorage.removeItem("Syntodarktheme");
  localStorage.setItem("Syntolighttheme", true);
  localStorage.removeItem("bodyBgRGB");
  localStorage.removeItem("darkBgRGB");
  localStorage.removeItem("primaryRGB1");
  localStorage.removeItem("primaryRGB");
  document.querySelector("#switcher-light-theme").checked = true;
  checkOptions();
}

function darkFn() {
  let html = document.querySelector("html");
  html.classList.add("dark");
  html.classList.remove("light");
  document
    .querySelector("html")
    .style.removeProperty("--body-bg", localStorage.bodyBgRGB);
  document
    .querySelector("html")
    .style.removeProperty("--dark-bg", localStorage.darkBgRGB);
  updateColors();
  localStorage.setItem("Syntodarktheme", true);
  localStorage.removeItem("Syntolighttheme");
  checkOptions();
  html.style.removeProperty("--color-primary");
  html.style.removeProperty("--color-primary-rgb");
}

function ResetAllFn() {
  let html = document.querySelector("html");
  checkOptions();

  // clearing localstorage
  localStorage.clear();

  // reseting chart colors
  updateColors();

  // reseting rtl
  ltrFn();

  // reseting dark theme
  lightFn();
  html.setAttribute("data-menu-styles", "light");
}

function checkOptions() {
  // dark
  if (localStorage.getItem("Syntodarktheme")) {
    document.querySelector("#switcher-dark-theme").checked = true;
  }
  // light
  if (localStorage.getItem("Syntolighttheme")) {
    document.querySelector("#switcher-light-theme").checked = true;
  }

  //RTL
  if (localStorage.getItem("Syntortl")) {
    document.querySelector("#switcher-rtl").checked = true;
  }
  if (localStorage.getItem("Syntoltr")) {
    document.querySelector("#switcher-ltr").checked = true;
  }
}

// chart colors
let myVarVal, primaryRGB1;
function updateColors() {
  "use strict";
  primaryRGB1 = getComputedStyle(document.documentElement)
    .getPropertyValue("--color-primary-rgb")
    .trim();

  //get variable
  myVarVal = localStorage.getItem("primaryRGB") || primaryRGB1;
  if (document.querySelector("#salesOverview") !== null) {
    setTimeout(() => {
      salesOverview();
    }, 100);
  }
}
updateColors();

function localStorageBackup() {
  // if there is a value stored, update color picker and background color
  // Used to retrive the data from local storage
  if (localStorage.primaryRGB) {
    if (document.querySelector(".theme-container-primary")) {
      document.querySelector(".theme-container-primary").value =
        localStorage.primaryRGB;
    }
    document
      .querySelector("html")
      .style.setProperty("--color-primary", localStorage.primaryRGB1);
    document
      .querySelector("html")
      .style.setProperty("--color-primary-rgb", localStorage.primaryRGB);
  }
  if (localStorage.bodyBgRGB) {
    if (document.querySelector(".theme-container-background")) {
      document.querySelector(".theme-container-background").value =
        localStorage.bodyBgRGB;
    }
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
    document.querySelector("#switcher-dark-theme").checked = true;
  }
  if (localStorage.Syntodarktheme) {
    let html = document.querySelector("html");
    html.classList.add("dark");
    html.classList.remove("light");
  }
  if (localStorage.Syntortl) {
    let html = document.querySelector("html");
    setTimeout(() => {
      html.setAttribute("dir", "rtl");
    }, 100);
  }
}

// for menu target scroll on click
window.addEventListener("scroll", reveal);
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var cardTop = reveals[i].getBoundingClientRect().top;
    var cardRevealPoint = 150;


    if (cardTop < windowHeight - cardRevealPoint) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
reveal();
const pageLink = document.querySelectorAll(".side-menu__item");
pageLink.forEach((elem) => {
  if (elem != "javascript:void(0);" && elem !== "#") {
    elem.addEventListener("click", (e) => {
      e.preventDefault();
      document.querySelector(elem.getAttribute("href"))?.scrollIntoView({
        behavior: "smooth",
        offsetTop: 1 - 60,
      });
    });
  }
});
// section menu active
function onScroll(event) {
  const sections = document.querySelectorAll(".side-menu__item");
  const scrollPos =
    window.pageYOffset ||
    document.documentElement.scrollTop ||
    document.body.scrollTop;

  sections.forEach((elem) => {
    const val = elem.getAttribute("href");
    let refElement;
    if (val != "javascript:void(0);" && val !== "#") {
      refElement = document.querySelector(val);
    }
    const scrollTopMinus = scrollPos + 73;
    if (
      refElement?.offsetTop <= scrollTopMinus &&
      refElement?.offsetTop + refElement.offsetHeight > scrollTopMinus
    ) {
      if (elem.parentElement.parentElement.classList.contains("child1")) {
        elem.parentElement.parentElement.parentElement.children[0].classList.add(
          "active"
        );
      }
      elem.classList.add("active");
      if (elem.closest(".child1")?.previousElementSibling) {
        elem.closest(".child1").previousElementSibling.classList.add("active");
      }
    } else {
      elem.classList.remove("active");
    }
  });
}
window.document.addEventListener("scroll", onScroll);
// for menu target scroll on click

/* count-up */
var i = 1;
setInterval(() => {
  document.querySelectorAll(".count-up").forEach((ele) => {
    if (ele.getAttribute("data-count") >= i) {
      i = i + 1;
      ele.innerText = i;
    }
  });
}, 50);
/* count-up */

/* Swiper 8 */
var swiper8 = new Swiper(".testimonials-swipe", {
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  slidesPerView: 1,
  spaceBetween: 30,
  watchSlidesProgress: true,
  freeMode: true,
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 50,
    },
    1400: {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  },
});

let html = document.querySelector("html");
html.setAttribute("dir", "ltr");
html.setAttribute("data-nav-layout", "horizontal");
html.setAttribute("data-nav-style", "menu-click");
html.setAttribute("data-menu-position", "fixed");

("use strict");
(() => {
  var navbar1 = document.querySelector(".app-sidebar");
  var sticky1 = navbar1.clientHeight;
  function stickyFn() {
    if (window.pageYOffset > 2) {
      navbar1.classList.add("sticky-pin");
    } else {
      navbar1.classList.remove("sticky-pin");
    }
  }
  window.addEventListener("scroll", stickyFn);
  window.addEventListener("DOMContentLoaded", stickyFn);
})();
