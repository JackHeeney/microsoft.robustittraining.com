/**************************
 *           AOS          *
 **************************/

// AOS init
AOS.init({
  easing: "ease-out-back",
  duration: 1000,
});

/****************************
 *          SWIPER          *
 ****************************/

// init swiperHero
var swiper = new Swiper(".swiperHero", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  autoplay: true,
  speed: 2000,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
  },
});

/****************************
 *          NAVBAR          *
 ****************************/
function close_offcanvas() {
  darken_screen(false);
  document.querySelector(".mobile-offcanvas.show").classList.remove("show");
  document.body.classList.remove("offcanvas-active");
}

function show_offcanvas(offcanvas_id) {
  darken_screen(true);
  document.getElementById(offcanvas_id).classList.add("show");
  document.body.classList.add("offcanvas-active");
}

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll("[data-trigger]").forEach(function (everyelement) {
    let offcanvas_id = everyelement.getAttribute("data-trigger");
    everyelement.addEventListener("click", function (e) {
      e.preventDefault();
      show_offcanvas(offcanvas_id);
    });
  });

  document.querySelectorAll(".btn-close").forEach(function (everybutton) {
    everybutton.addEventListener("click", function (e) {
      close_offcanvas();
    });
  });

  document
    .querySelector(".screen-darken")
    .addEventListener("click", function (event) {
      close_offcanvas();
    });
});
// DOMContentLoaded  end
