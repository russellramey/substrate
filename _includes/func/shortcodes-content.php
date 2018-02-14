<?php
/************************************************************************************
*** Content Shortcode
	Add module content to other content...
************************************************************************************/
/* GET CONTENT */
function getcontent_func( $atts, $content = null ) {
	/* Extract and assign params */
	extract( shortcode_atts( array(
		'show' => -1,  // Number of entries to show
		'type' => '',  // Type of content to get (use post-type name)
		'grid' => 4,   // Default grid layout
		'order' => '',  // Order to display (by title, date, etc...)
		'taxonomy' => '', // Select taxonomy (category, tags, custom types)
		'term' => '', // Assign term for selected taxonomy
		'pagination' => 'false', // To show /page/ navigation
		'template' => 'card' // Select template style to use (card/title/panel)
	), $atts ) );

	// Prepare output cache
	ob_start();

	// Check for PAGED option
	if ($pagination === 'true'){
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	} else {
		$paged = false;
	}

	// Identify content params
	$content = new WP_Query( array(
		'posts_per_page' => $show,
		'post_type' => "$type",
		'orderby' => "$order",
		'$taxonomy' => "$term",
		'paged' => $paged
	));


	// Default Classes for grid
	$contentClasses = array ( 'col-md-3', 'col-sm-4');


	// Start WP Loop
	if ( $content->have_posts() ) : ?>
			<div class="getcontent shortcode-getcontent">
				<div class="row">
					<ul class="getcontent-list content-<?php echo $type; ?>">

						<?php while ( $content->have_posts() ) : $content->the_post();

							// CUSTOM LOOP CODE HERE

					    // End WP Loop
					    endwhile; ?>

					</ul>
				</div>
			</div>
	<?php
	// If paged show pagination
	if($pagination === 'true'){
		include(locate_template('_templates/partials/pagination.php'));
	}
	// End loop, and reset
	endif; wp_reset_query();

	// Clean, prepare, and output results
	$getContent = ob_get_clean();
		return $getContent;
	}
// Add shortcode to theme
add_shortcode( 'getcontent', 'getcontent_func' );
