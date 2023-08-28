// Overlay Menu

const burger = document.getElementById("burger");
const menu = document.getElementById("overlayMenu");
const main = document.querySelector(".main");

// Sidebar Menu Toggle
burger.addEventListener("click", function () {
	burger.classList.toggle("active");
	menu.classList.toggle("active");
});

// Close Sidebar by Click Outside
main.addEventListener("click", function () {
	if (menu.classList.contains("active")) {
		burger.classList.remove("active");
		menu.classList.remove("active");
	}
});