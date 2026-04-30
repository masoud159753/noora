if (document.querySelector(".swiperInit")) {	
	const swiper = new Swiper(".swiperInit", {});
}


if (document.querySelector(".swiperNav")) {	
	const swiper = new Swiper(".swiperNav", {
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
}

if (document.querySelector(".swiperPagination")) {	
	const swiper = new Swiper(".swiperPagination", {
		pagination: {
			el: ".swiper-pagination",
		},
	});
}

if (document.querySelector(".swiperDynamicBullets")) {
	const swiper = new Swiper(".swiperDynamicBullets", {
		pagination: {
			el: ".swiper-pagination",
			dynamicBullets: true,
		},
	});
}

if (document.querySelector(".swiperProgressbar")) {	
	const swiper = new Swiper(".swiperProgressbar", {
		pagination: {
			el: ".swiper-pagination",
			type: "progressbar",
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
}

if (document.querySelector(".swiperFraction")) {	
	const swiper = new Swiper(".swiperFraction", {
		pagination: {
			el: ".swiper-pagination",
			type: "fraction",
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
}