(function ($) {
	"use strict";	
	$(document).ready(function(){

		/*======================================
		// Counter JS
		======================================*/  
		$('.counter').counterUp({
			time: 1000
		});

		/*======================================
		// Magnific Popup
		======================================*/ 
		$('.video-play').magnificPopup({
	        type: 'video',	
	    });

	    /*======================================
		// Service Hover
		======================================*/ 
		$('.single-service').on('mouseenter', function(){
	    $(' .single-service').removeClass('active');
	    $(this).addClass('active');
	    });
			
		/*======================================
		//  Wow JS
		======================================*/ 		
		var window_width = $(window).width();   
        if(window_width > 767){
            new WOW().init();
		}
	});
})(jQuery);	