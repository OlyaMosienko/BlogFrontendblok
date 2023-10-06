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
        }
      }
});