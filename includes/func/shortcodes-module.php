<?php
/************************************************************************************
*** Module Shortcode
	Add module content to other content...
************************************************************************************/
//[module slug=" "]
function module_insert_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => ''
	), $atts ) );
	ob_start(); ?>

		<?php
		// Find correct module
		$module_args = array(
				'post_type' => 'module',
				'name' => $title,
				'posts_per_page' => 1
			);
		// Get new query
		$module = new WP_Query($module_args);
		// Get module
		if($module->have_posts()) {
		$module->the_post();

		// Get Module metadata
		include (locate_template('templates/_partials/meta-module.php'));
		$module_classes = array('bt-module', $module_height);

		// OUTPUT HTML HERE
		?>

		<div id="module-<?php the_ID(); ?>" <?php post_class($module_classes); //WP Post Classes ?>>

			<?php if($module_background_image != '') { ?>
				<div class="wallpaper <?php echo $module_width; ?>" style="background: url(<?php echo $module_background_image; ?>)">
					 <div class="overlay" style="background:linear-gradient(to right, <?php echo $module_overlay_color_one; ?>, <?php echo $module_overlay_color_two; ?>);"></div>
				</div>
			<?php } ?>

			<?php if($module_background_video != '') { ?>
				<div class="video-background full-width">
					<div class="overlay" style="background:linear-gradient(to right, <?php echo $module_overlay_color_one; ?>, <?php echo $module_overlay_color_two; ?>);"></div>
	      			<iframe src="<?php echo $module_background_video; ?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=W0LHTWG-UmQ" frameborder="0" allowfullscreen></iframe>
	    		</div>
			<?php } ?>


		    <div class="inner module-content <?php echo $module_content_width; ?>">
		        <?php the_content(); ?>
		    </div>
		</div>

		<?php
		// Reset Query
		wp_reset_query();
		wp_reset_postdata();

		// Clean output
		$content_module = ob_get_clean();
		// Return module
		return $content_module;
	}
}
add_shortcode( 'module', 'module_insert_func' );
