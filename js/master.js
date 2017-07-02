jQuery(document).ready(function($) {

	$("[data-fancybox]").fancybox({

	});
	$(".countdown-number").countdown("2017/08/25", function(event) {
		$(this).find('.all').text(
			// event.strftime('%-m Month%!m:s; %-n Day%!D:s; %-H Hour%!H:s; %-M Minute%!M:s; %-S Second%!S:s;')
			event.strftime('%-mM %-nD %-H:%-M:%-S')
		);
	});

	$('.nav-hamburger').on('click', function(e){
		// e.preventDefault();
		$('nav').toggleClass('active');
		$(this).toggleClass('active');
	})
	var headerHeight = $('header.hero-header').height();
	// $(window).scroll(function (event) {
	// 	var scroll = $(window).scrollTop();
	// 	if(headerHeight - scroll <= 50){
	// 		console.log(headerHeight - scroll);

	// 	}
	// 	console.log(scroll)
	// });
})