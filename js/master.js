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
	$(window).scroll(function (event) {
		var scroll = $(window).scrollTop();
		console.log($('#blog').scrollTop());
	});
	$(document).on('click', function(e){
		console.log(!$(e.target).is(".nav-hamburger > *"), !$(e.target).is("#nav > *"), !$(e.target).is(".nav-hamburger"), !$(e.target).is("#nav"))
		if (!$(e.target).is(".nav-hamburger > *") && !$(e.target).is("#nav > *") && !$(e.target).is(".nav-hamburger") && !$(e.target).is("#nav")) {
			$('.nav-hamburger').removeClass('active');
			$('#nav').removeClass('active');
		}
	})
})