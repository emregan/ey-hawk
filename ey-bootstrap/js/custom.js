jQuery(document).ready(function($){
	
	// shrink scrollbar
	$(document).on("scroll", function(){
		if ($(document).scrollTop() > 175){
		  $("nav").addClass("shrink");
		} else {
			$("nav").removeClass("shrink");
		}
	});
	
	
	/// move to hawk theme
	$('.next-section-arrow').click(function( e ){
		e.preventDefault();
        var nextSection = $(this).closest('section').next('section');
        $('html, body').animate({
            scrollTop: $(nextSection).offset().top - 20
        }, 700);
    });
    
    // Isotope
    $('.grid').isotope({
	  // options...
	  itemSelector: '.element-item',
	  layoutMode: 'fitRows',
	  masonry: {
	    columnWidth: 400
	  },
	});
	
});