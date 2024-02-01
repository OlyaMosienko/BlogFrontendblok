// Tag Swiper

var swiper = new Swiper(".tagSwiper", {
  slidesPerView: "auto",
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// Post Swiper

var swiper = new Swiper(".recommend-swiper", {
  slidesPerView: 1,
  spaceBetween: 30,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1150: {
          slidesPerView: 1,
        },
        1340: {
          slidesPerView: 2,
        },
      }
});


// Overlay Menu
const btn = document.querySelector('.burger-btn');
const burger = document.querySelector("#burger");
const menu = document.querySelector("#overlayMenu");
const main = document.querySelector(".main");
const body = document.querySelector("body");

// Sidebar Menu Open/Close
burger.addEventListener("click", function () {
  if (menu.classList.contains("active")) {
    btn.classList.remove('is-active');
    menu.classList.remove("active");
		burger.classList.remove("active");
		body.classList.remove("_opened-menu");
	}else{
    btn.classList.add('is-active');
    burger.classList.add("active");
    menu.classList.add("active");
    body.classList.add("_opened-menu");
  }
});

// Search
const searchBtn = document.querySelector("#searchBtn");
const search = document.querySelector("#overlay");
const searchClose = document.querySelector("#searchClose");

// Sidebar Search Toggle
searchBtn.addEventListener("click", function () {
	searchBtn.classList.add("active");
	search.classList.add("active");
});

// Close Sidebar Search by Click Close Btn
searchClose.addEventListener("click", function () {
	if (search.classList.contains("active")) {
		searchBtn.classList.remove("active");
		search.classList.remove("active");
	}
});

// Close Sidebar Search by Click Outside
main.addEventListener("click", function () {
	if (search.classList.contains("active")) {
		searchBtn.classList.remove("active");
		search.classList.remove("active");
	}
});

// Button Scroll Up
let windowHeight = document.documentElement.clientHeight;
let up = document.querySelector('.up');


document.addEventListener('scroll', () => {
if (scrollY > windowHeight) {
up.classList.add('active')
} else up.classList.remove('active')
});
up.addEventListener('click', () => scrollTo(0, 0))