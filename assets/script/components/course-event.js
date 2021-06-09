var courseEvent = {
	init: function(){
		this.registerForm.init();
		var swiper = new Swiper(".course-event-slider", {
			effect: "coverflow",
			grabCursor: true,
			centeredSlides: true,
			slidesPerView: 'auto',
			loop: true,
			coverflowEffect: {
				rotate: 0,
				stretch: 0,
				depth: 200,
				modifier: 2,
				slideShadows: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	},
	registerForm: {
		init: function(){
			this.render();
			this.hidePassword();
			this.showPassword();
		},
		render: function(){
			let rightSideHeight = $('.course-event__regis > ._right-side').outerHeight();
			$('.course-event__regis > ._left-side > ._img').height(rightSideHeight);
		},
		showPassword: function(){
			$('.course-event__regis-form ._eye-icon ._show').click(function(event) {
				event.preventDefault();
				$(this).addClass('d-none');
				$('.course-event__regis-form ._eye-icon ._hide').removeClass('d-none');
				$('.course-event__regis-form ._password-input').attr('type','text');
			});
		},
		hidePassword: function(){
			$('.course-event__regis-form ._eye-icon ._hide').click(function(event) {
				event.preventDefault();
				$(this).addClass('d-none');
				$('.course-event__regis-form ._eye-icon ._show').removeClass('d-none');
				$('.course-event__regis-form ._password-input').attr('type','password');
			});
		}
	},
}
courseEvent.init();