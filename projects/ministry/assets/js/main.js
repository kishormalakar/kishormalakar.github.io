$(document).ready(function () {
	$(".owl-carousel-hero").owlCarousel({
		loop: true,
		responsiveClass: true,
		items: 1,
		mouseDrag: true,
		dots: false,
		nav: true,
		navText: [
			"<i class='material-icons'>keyboard_arrow_left</i>",
			"<i class='material-icons'>keyboard_arrow_right</i>",
		],
		autoplay: true,
		autoplayTimeout: 3000,
	});
});

$(".owl-carousel-footer").owlCarousel({
	loop: true,
	responsiveClass: true,
	items: 5,
	mouseDrag: true,
	dots: false,
	nav: true,
	navText: [
		"<i class='material-icons'>keyboard_arrow_left</i>",
		"<i class='material-icons'>keyboard_arrow_right</i>",
	],
	autoplay: true,
	autoplayTimeout: 3000,
});

let navItems = document.querySelectorAll(".nav-item");

navItems.forEach((navItem) => {
	navItem.addEventListener("click", function (e) {
		e.preventDefault();

		navItems.forEach((navItem2) => {
			if (navItem !== navItem2) {
				if (navItem2.classList.contains("active")) {
					navItem2.classList.remove("active");
				}
			}
		});
		if (e.target.parentElement.classList.contains("active")) {
			e.target.parentElement.classList.remove("active");
		} else {
			e.target.parentElement.classList.add("active");
		}
	});
});

let navToggle = document.querySelectorAll(".nav-toggle")[0];

navToggle.addEventListener("click", function (e) {
	e.preventDefault();

	let navMenu = document.querySelectorAll(".nav-menu")[0];
	if (navMenu.classList.contains("active")) {
		navMenu.classList.remove("active");
	} else {
		navMenu.classList.add("active");
	}
});
