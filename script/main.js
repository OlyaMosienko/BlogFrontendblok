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
  slidesPerView: 2,
  spaceBetween: 30,
  direction: getDirection(),
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      on: {
        resize: function () {
          swiper.changeDirection(getDirection());
        },
      },
});

function getDirection() {
  var windowWidth = window.innerWidth;
  var direction = window.innerWidth <= 767 ? 'vertical' : 'horizontal';

  return direction;
};