$(window).scroll(function() {
	if ($(this).scrollTop() > 230) {
		$('nav').addClass("sticky");
		jQuery('nav.sticky').fadeIn('slow');
	}
	else {
		$('nav').removeClass("sticky");
		jQuery('nav.sticky').fadeOut('slow');
	}
});
