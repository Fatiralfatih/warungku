(function () {
  "use strict";
  /* Swiper */
  var swiper = new Swiper(".active-chat", {
    slidesPerView: 5,
    breakpoints: {
      400: {
        slidesPerView: 6,
      },
      600: {
        slidesPerView: 9,
      },
      768: {
        slidesPerView: 5,
      },
      1024: {
        slidesPerView: 6,
      },
      1400: {
        slidesPerView: 6,
      },
    },
  });

  // Initialize the plugin
  var myChat = document.getElementById("messagelist");
  var myChat1 = document.getElementById("chatlist");
  var myChat2 = document.getElementById("profile-list");
  new SimpleBar(myChat, { autoHide: true });
  new SimpleBar(myChat1, { autoHide: true });
  new SimpleBar(myChat2, { autoHide: true });

  document
    .querySelector(".responsive-chat-close")
    .addEventListener("click", () => {
      document
        .querySelector(".main-chart-wrapper")
        .classList.remove("responsive-chat-open");
    });

  document.querySelectorAll(".responsive-userinfo-open").forEach((ele) => {
    ele.addEventListener("click", () => {
      document.querySelector("#chat-user-details").classList.add("open");
      document.querySelector(".main-chat-area").classList.add("close");
    });
  });
  document.querySelector(".user-close").addEventListener("click", () => {
    document.querySelector("#chat-user-details").classList.remove("open");
    document.querySelector(".main-chat-area").classList.remove("close");
  });

  document.querySelector(".chat-info").addEventListener("click", () => {
    document.querySelector("#chat-user-details").classList.remove("open");
  });
  document.querySelector(".chat-content").addEventListener("click", () => {
    document.querySelector("#chat-user-details").classList.remove("open");
  });

  const searchIcon = document.querySelector(`.search-chat-icon`);
  const searchInput = document.querySelector(`.search-chat-input`);

  const toggleSearch = (event) => {
    event.stopPropagation();

    if (!event.target.closest(".search-chat-input")) {
      searchInput.classList.toggle("active");

      searchInput.classList.contains("active")
        ? document.addEventListener("click", toggleSearch)
        : document.removeEventListener("click", toggleSearch);
    }
  };

  searchIcon.addEventListener("click", toggleSearch);
})();

let changeTheInfo = (element, name, img, status) => {
  document.querySelectorAll(".checkforactive").forEach((ele) => {
    ele.classList.remove("active");
  });
  element.closest("li").classList.add("active");
  document.querySelectorAll(".chatnameperson").forEach((ele) => {
    ele.innerText = name;
  });
  let image = `../assets/img/users/${img}.jpg`;
  document.querySelectorAll(".chatimageperson").forEach((ele) => {
    ele.src = image;
  });

  document.querySelectorAll(".chatstatusperson").forEach((ele) => {
    ele.classList.remove("online");
    ele.classList.remove("offline");
    ele.classList.add(status);
  });

  document.querySelector(".chatpersonstatus").innerText = status;

  document
    .querySelector(".main-chart-wrapper")
    .classList.add("responsive-chat-open");
};
