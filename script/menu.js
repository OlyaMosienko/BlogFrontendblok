// Burger Menu
let btn = document.querySelector('.burger-btn');

btn.addEventListener('click', function () {
  this.classList.toggle('is-active');
});

// Overlay Menu
const burger = document.getElementById("burger");
const menu = document.getElementById("overlayMenu");
const main = document.querySelector(".main");
const body = document.querySelector("body");

// Sidebar Menu Toggle
burger.addEventListener("click", function () {
	burger.classList.toggle("active");
	menu.classList.toggle("active");
	body.classList.toggle("_opened-menu");
});

// Close Sidebar by Click Btn
main.addEventListener("click", function () {
	if (menu.classList.contains("active")) {
		burger.classList.remove("active");
		menu.classList.remove("active");
		body.classList.remove("_opened-menu");
	}
});

// Search
const searchBtn = document.getElementById("searchBtn");
const search = document.getElementById("overlay");
const searchClose = document.getElementById("searchClose");

// Sidebar Search Toggle
searchBtn.addEventListener("click", function () {
	searchBtn.classList.toggle("active");
	search.classList.toggle("active");
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