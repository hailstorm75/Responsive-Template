$(document).ready(function() {			
	$(window).scroll( function(){			
		$('.fade').each( function(i){				
			var bottom_of_object = $(this).offset().top + $(this).outerHeight();
			var bottom_of_window = $(window).scrollTop() + $(window).height();					
			if( bottom_of_window > bottom_of_object ){					
				$(this).animate({'opacity':'1'},500);							
			}					
		}); 		
	});	
});
jQuery(function () {
	jQuery(document).ready(function () {
		jQuery("#back-top").hide();
		jQuery(function () {
			jQuery(window).scroll(function () {
				if (jQuery(this).scrollTop() > 200) {
					jQuery('#back-top').fadeIn('slow');
				} else {
					jQuery('#back-top').fadeOut('slow');
				}
			});
			jQuery('#back-top a').click(function () {
				jQuery('body,html').animate({
					scrollTop : 0
				}, 1300);
				return false;
			});
		});
	});
});
