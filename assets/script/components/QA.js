var QA = {
	init: function(){
		this.toggle();
	},
	toggle: function(){
		$(".QA__quest ._extend").click(function(event) {
			let parentDom = $(this).parent().parent();
			parentDom.find('.QA__quest__content').toggle('fadin');
			$(this).toggleClass('active');
		});
	}
}
QA.init();