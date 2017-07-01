jQuery(document).ready(function($) {



	$('.nav-hamburger').on('click', function(e){
		// e.preventDefault();
		$('nav').toggleClass('active');
		$(this).toggleClass('active');
	})
})