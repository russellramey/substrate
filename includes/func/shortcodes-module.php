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


		<?php query_posts(array(
				'post_type' => 'module',
				'name' => $title,
				'posts_per_page' => 1
			)
		); the_post();  ?>

		<div class="dm-module dm-module--full row" style="padding:40px 0;">
			<div class="inner container">
				<?php the_content(); ?>
			</div>
		</div>

		<?php wp_reset_query(); wp_reset_postdata(); ?>
		<?php $content_module = ob_get_clean();
			  return $content_module;
}
add_shortcode( 'module', 'module_insert_func' );
