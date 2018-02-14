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
		'grid' => 6,   // Default grid layout
		'order' => ''  // Order to display (by title, date, etc...)
	), $atts ) );
	ob_start(); ?>

		<?php
		// Identify content params
		$content = new WP_Query( array(
			'posts_per_page' => $show,
			'post_type' => "$type",
			'orderby' => "$order"
		)); ?>

		<div class="getcontent row">
			<?php
		    // Start WP Loop
		    if ( $content->have_posts() ) : while ( $content->have_posts() ) : $content->the_post(); ?>

			<!-- ADD YOUR LAYOUT CODE HERE -->

			<?php
		    // End WP Loop
		    endwhile; endif; ?>
		</div>
	<?php
	// Clean, prepare, and output results
	$getContent = ob_get_clean();
		  return $getContent;
	}
add_shortcode( 'getcontent', 'getcontent_func' );
