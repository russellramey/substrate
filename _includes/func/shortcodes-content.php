<?php
/************************************************************************************
*** Content Shortcode
	Add any content type to page/post or other...
************************************************************************************/
/* GET CONTENT */
/* [getcontent show="" type="" grid="" order="" taxonomy="" term="" pagination="" width="" layout=""] */
function getcontent_func( $atts, $content = null ) {
	/* Extract and assign params */
	extract( shortcode_atts( array(
		'show' => -1,  // Number of entries to show
		'type' => '',  // Type of content to get (use post-type name)
		'grid' => '',   // Default grid layout (use bootstrap classes)
		'order' => '',  // Order to display (by title, date, etc...)
		'taxonomy' => '', // Select taxonomy (category, tags, custom types)
		'term' => '', // Assign term for selected taxonomy
		'pagination' => 'false', // To show /page/ navigation
		'width' => '100%', // Set max width for the item container
		'layout' => 'default' // Select template style to use (default/card/title/panel, etc...)
	), $atts ) );

	// Prepare output cache
	ob_start();

	// Check for PAGED option
	if ($pagination === 'true'){
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	} else {
		$paged = false;
	}

	// Check for GRID option, this will override defaults
	if($grid != ''){
		// Get array of grid
		$contentClasses = explode(',', $grid);
	}

	// Prep Query and Identify content params
	$content = new WP_Query( array(
		'posts_per_page' => $show, // Show posts per page
		'post_type' => "$type", // Set post type to query
		'orderby' => "$order", // Order posts by
		'tag' => "", // Query by post_tag
		$taxonomy => "$term", // Query by custom taxonomy (ex. Cateogry, Genre, etc...)
		'ignore_sticky_posts' => 1, // Ignore Sticky Posts by default
		'post__not_in' => array(get_the_id()), // Hide current post
		'paged' => $paged // Set paged variable for pagination (see above PAGED function)
	));

	// Allowed $layouts
	$layout_array = array('card', 'panel', 'block', 'list');

	// Start WP Loop
	if ( $content->have_posts() ) : ?>
		<div class="getcontent shortcode-getcontent">
			<div class="row row-nm">
				<ul class="getcontent-list content-<?php echo $type; ?>" style="max-width:<?php echo $width; ?>">

					<?php while ( $content->have_posts() ) : $content->the_post();

						// If layout provided is allowed
						if ($layout && in_array($layout, $layout_array)){

							// Parameter layout options here

						} else {

							// Default layout template here

						}

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
