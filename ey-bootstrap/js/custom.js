jQuery(document).ready(function($){
	
	// shrink scrollbar
	$(document).on("scroll", function(){
		if ($(document).scrollTop() > 175){
		  $("nav").addClass("shrink");
		  $('.scroll-to-top').fadeIn(200);    // Fade in the arrow
		} else {
			$("nav").removeClass("shrink");
			$('.scroll-to-top').fadeOut(200);   // Else fade out the arrow
		}
	});
	
	$('.scroll-to-top').click(function() {      // When arrow is clicked
	    $('body,html').animate({
	        scrollTop : 0                       // Scroll to top of body
	    }, 500);
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
    $('.sgrid').isotope({
	  // options...
	  itemSelector: '.elements-item',
	  layoutMode: 'fitRows',
	  masonry: {
	    columnWidth: 400
	  },
	});
	
	// init Isotope
	var $grid = $('.grid').isotope({
	  itemSelector: '.element-item',
	  percentPosition: true,
	  masonry: {
	    columnWidth: '.grid-sizer'
	  }
	});
	// filter functions
	var filterFns = {
	  // show if number is greater than 50
	  numberGreaterThan50: function() {
	    var number = $(this).find('.number').text();
	    return parseInt( number, 10 ) > 50;
	  },
	  // show if name ends with -ium
	  ium: function() {
	    var name = $(this).find('.name').text();
	    return name.match( /ium$/ );
	  }
	};
	// bind filter button click
	$('.filters-button-group').on( 'click', 'button', function() {
	  var filterValue = $( this ).attr('data-filter');
	  // use filterFn if matches value
	  filterValue = filterFns[ filterValue ] || filterValue;
	  $grid.isotope({ filter: filterValue });
	});
	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.is-checked').removeClass('is-checked');
	    $( this ).addClass('is-checked');
	  });
	});
	
});