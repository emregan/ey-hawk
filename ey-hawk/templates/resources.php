<!-- RESOURCES -->
<?php // vars
	$title = get_the_title();
	$pipled_title = ! empty( $title ) ? str_replace( ' | ', '<br />', $title ) : '';
	$subtitle = get_the_content();
	$piped_subtitle = ! empty( $subtitle ) ? str_replace( ' | ', '<br />', $subtitle ) : '';
	$cards = get_sub_field('overview_cards');
	$button = get_sub_field( 'overview_button' );
	$button_link = get_sub_field( 'overview_button_link' );
	$button_target = get_sub_field( 'overview_button_target' );
?>
<section class="resources text-center">
  <div class="container">
    <h2><?php echo $pipled_title; ?></h2>
    <div class="section-intro"><?php echo $piped_subtitle; ?></div>
    
    <div class="section-cards">
	    
	    
	    
	    <h1>Isotope - filtering</h1>

<div class="button-group filters-button-group">
  <button class="button is-checked" data-filter="*">show all</button>
  <button class="button" data-filter=".metal">metal</button>
  <button class="button" data-filter=".transition">transition</button>
  <button class="button" data-filter=".alkali, .alkaline-earth">alkali and alkaline-earth</button>
  <button class="button" data-filter=":not(.transition)">not transition</button>
  <button class="button" data-filter=".metal:not(.transition)">metal but not transition</button>
  <button class="button" data-filter="numberGreaterThan50">number > 50</button>
  <button class="button" data-filter="ium">name ends with &ndash;ium</button>
</div>

<div class="grid">
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Mercury</h3>
    <p class="symbol">Hg</p>
    <p class="number">80</p>
    <p class="weight">200.59</p>
  </div>
  <div class="element-item metalloid " data-category="metalloid">
    <h3 class="name">Tellurium</h3>
    <p class="symbol">Te</p>
    <p class="number">52</p>
    <p class="weight">127.6</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Bismuth</h3>
    <p class="symbol">Bi</p>
    <p class="number">83</p>
    <p class="weight">208.980</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Lead</h3>
    <p class="symbol">Pb</p>
    <p class="number">82</p>
    <p class="weight">207.2</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Gold</h3>
    <p class="symbol">Au</p>
    <p class="number">79</p>
    <p class="weight">196.967</p>
  </div>
  <div class="element-item alkali metal " data-category="alkali">
    <h3 class="name">Potassium</h3>
    <p class="symbol">K</p>
    <p class="number">19</p>
    <p class="weight">39.0983</p>
  </div>
  <div class="element-item alkali metal " data-category="alkali">
    <h3 class="name">Sodium</h3>
    <p class="symbol">Na</p>
    <p class="number">11</p>
    <p class="weight">22.99</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Cadmium</h3>
    <p class="symbol">Cd</p>
    <p class="number">48</p>
    <p class="weight">112.411</p>
  </div>
  <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
    <h3 class="name">Calcium</h3>
    <p class="symbol">Ca</p>
    <p class="number">20</p>
    <p class="weight">40.078</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Rhenium</h3>
    <p class="symbol">Re</p>
    <p class="number">75</p>
    <p class="weight">186.207</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Thallium</h3>
    <p class="symbol">Tl</p>
    <p class="number">81</p>
    <p class="weight">204.383</p>
  </div>
  <div class="element-item metalloid " data-category="metalloid">
    <h3 class="name">Antimony</h3>
    <p class="symbol">Sb</p>
    <p class="number">51</p>
    <p class="weight">121.76</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Cobalt</h3>
    <p class="symbol">Co</p>
    <p class="number">27</p>
    <p class="weight">58.933</p>
  </div>
  <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
    <h3 class="name">Ytterbium</h3>
    <p class="symbol">Yb</p>
    <p class="number">70</p>
    <p class="weight">173.054</p>
  </div>
  <div class="element-item noble-gas nonmetal " data-category="noble-gas">
    <h3 class="name">Argon</h3>
    <p class="symbol">Ar</p>
    <p class="number">18</p>
    <p class="weight">39.948</p>
  </div>
  <div class="element-item diatomic nonmetal " data-category="diatomic">
    <h3 class="name">Nitrogen</h3>
    <p class="symbol">N</p>
    <p class="number">7</p>
    <p class="weight">14.007</p>
  </div>
  <div class="element-item actinoid metal inner-transition " data-category="actinoid">
    <h3 class="name">Uranium</h3>
    <p class="symbol">U</p>
    <p class="number">92</p>
    <p class="weight">238.029</p>
  </div>
  <div class="element-item actinoid metal inner-transition " data-category="actinoid">
    <h3 class="name">Plutonium</h3>
    <p class="symbol">Pu</p>
    <p class="number">94</p>
    <p class="weight">(244)</p>
  </div>
</div>

	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    <?php if( have_rows('overview_cards') ): ?>
	    
		    <div class="row">
			    
			    <div class="filters button-group js-radio-button-group">
			      <button class="button is-checked" data-filter="*">show all</button>
			      <button class="button" data-filter=".blogs">metal</button>
			      <button class="button" data-filter=".ebooks">transition</button>
			      <button class="button" data-filter=".events">–ium</button>
			    </div>
			    
			    <div class="grid">
	 
			    <?php while( have_rows('overview_cards') ): the_row(); ?>
			    	<?php $card_title = get_sub_field('card_title');
				          $card_subtitle = get_sub_field('card_subtitle');
				    	  $card_description = get_sub_field('card_description');
				    	  $card_button = get_sub_field('card_button');
				    	  $card_link = get_sub_field('card_link');
				    	  $image = get_sub_field('card_image');
				    	  $image_id = $image['id'];
						  // and the image size you want to return
						  $image_size = 'homepage-card';
							$image_array = wp_get_attachment_image_src($image_id, $image_size);
							$image_url = $image_array[0];
				    ?>
				    
			    	<div class="element-item">
				    	<?php if ( $image ) : ?>
				    		<figure><a href=""><img src="<?php echo $image_url; ?>" alt=""></a></figure>
						<?php endif; ?>
				    	<h3><?php echo $card_title; ?></h3>
				    	<h4><i><?php echo $card_subtitle; ?></i></h4>	
				    	<p><?php echo $card_description; ?></p>		    	
			    	</div>
			        
			    <?php endwhile; ?>
			    
			    </div><!-- .grid -->
			 

			</div><!-- .row -->
		<?php endif; ?>	    
    </div>

  </div>
</section>