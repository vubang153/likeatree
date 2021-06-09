var topic = {
	init: function(){
		var swiper = new Swiper(".topic__swiper", {
			spaceBetween: 15,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			breakpoints: {
				768: {
					slidesPerView: 2,
					spaceBetween: 15
				},
				992: {
					slidesPerView: 3,
					spaceBetween: 20
				}
			}
		});
	},
}
topic.init();