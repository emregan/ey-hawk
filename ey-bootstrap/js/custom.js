jQuery(document).ready(function($){
	
	// shrink scrollbar
	$(document).on("scroll", function(){
		if ($(document).scrollTop() > 175){
			if ($(window).width() > 991) {
				$("nav").addClass("shrink");
			}
		  $('.scroll-to-top').addClass('active');    // Fade in the arrow
		} else {
			if ($(window).width() > 991) {
				$("nav").removeClass("shrink");
			}
			$('.scroll-to-top').removeClass('active');   // Else fade out the arrow
		}
	});
	
	$('.scroll-to-top').click(function() {      // When arrow is clicked
	    /*$('body,html').animate({
	        scrollTop : 0                       // Scroll to top of body
	    }, 500); */
	
	    window.scroll({
		  top: 0, 
		  left: 0, 
		  behavior: 'smooth' 
		});
	});
	
	/// move to hawk theme
	$('.next-section-arrow').click(function( e ){
		e.preventDefault();
        var nextSection = $(this).closest('section').next('section');
        $('html, body').animate({
            scrollTop: $(nextSection).offset().top - 20
        }, 700);
    });
    
	// init Isotope
	var $grid = $('.grid').isotope({
	  itemSelector: '.element-item',
	  percentPosition: true,
	  masonry: {
	    columnWidth: '.grid-sizer'
	    //columnWidth: $container.width() / 5
	  }
	  /*
	  layoutMode: 'cellsByRow',
	  cellsByRow: {
	    columnWidth: '.grid-sizer'
	  }*/
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
	
	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.is-checked').removeClass('is-checked');
	    $( this ).addClass('is-checked');
	  });
	});
	
	
	// bind filter button click
	var $filterButtonGroup = $('.filters-button-group');
	var $filters = $filterButtonGroup.on( 'click', 'button', function() {	    
	    var filterValue = $( this ).attr('data-filter');
		// use filterFn if matches value
		filterValue = filterFns[ filterValue ] || filterValue;
		$grid.isotope({ filter: filterValue });
	    	    
	    // set filter in hash
	    location.hash = 'filter=' + encodeURIComponent( filterValue );
	    //location.hash = encodeURIComponent( filterValue );
	  });
	
	var isIsotopeInit = false;
	
	// Hook filtering into the hashchange event so that Isotope filters can be applied as links. 
    function getHashFilter() {
		var hash = location.hash;
		// get filter=filterName
		var matches = location.hash.match( /filter=([^&]+)/i );
	  	var hashFilter = matches && matches[1];
	  	return hashFilter && decodeURIComponent( hashFilter );
	}
	
	function onHashchange() {
		
	    var hashFilter = getHashFilter();
	    
	    if ( !hashFilter && isIsotopeInit ) {
	      return;
	    }
	    isIsotopeInit = true;
	    // filter isotope
	    $grid.isotope({
	      itemSelector: '.element-item',
	      filter: hashFilter
	    });

	    // set selected class on button
	    if ( hashFilter ) {
	      $filters.find('.is-checked').removeClass('is-checked');
	      $filters.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');
	    }
	    
	    if ( hashFilter ) {
		    $filterButtonGroup.find('.is-checked').removeClass('is-checked');
		    $filterButtonGroup.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');
		  }
	  }
	
	  $(window).on( 'hashchange', onHashchange );
	  // trigger event handler to init Isotope
	  onHashchange();
	
	$( 'a[aria-expanded="true"][data-toggle="dropdown"]' ).click(function(event) {
		event.stopPropagation();
	});
	
	$('.navbar-nav-auto a.t').on("click", function(e){;
	    $(this).next('ul').toggle();
	    $(this).attr('aria-expanded', function(index, attr){
		    return attr == 'true' ? 'false' : 'true';
		});
	    e.stopPropagation();
	    e.preventDefault();
	  });
	
	
	// Bootstrap menu magic
	  $(window).resize(function() {
	    if ($(window).width() < 768) {
	      $(".dropdown-toggle").attr('data-toggle', 'dropdown');
	    } else {
	      $(".dropdown-toggle").removeAttr('data-toggle dropdown');
	    }
	  });
	
	// Set pseudo selector content for customer times
	
	$( 'a.hover-image' ).each(function() {
		$alt = $(this).attr('alt');
		$(this).after().css('content', $alt );
	});
	
	
});