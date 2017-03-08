<?php
/*********************** Press Releases **************************/
//[pressreleases]
function press_releases_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'show' => 6,
	), $atts ) );
	ob_start(); ?>

		<div class="releases">
			<ul class="list-item" style="margin:0 0 20px 0;">
				<?php $args = array(
					'posts_per_page' => $show,
					'post_type' => "releases",
					'post__not_in'  => get_option( 'sticky_posts' ),
				);
				query_posts( $args );
				while (have_posts()): the_post(); ?>
					<?php get_template_part('includes/entry', 'panel-list'); ?>
				<?php endwhile; wp_reset_query(); wp_reset_postdata();?>
				<br /><a href="/insights/newsroom/releases" class="button button-light">View all</a>
			</ul>
		<br />
		</div>

	<?php $recentReleases = ob_get_clean();
		  return $recentReleases;
	}
add_shortcode( 'pressreleases', 'press_releases_func' );



/*********************** Events **************************/
//[events]
function event_list_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'show' => 6,
		'type' => '',
		'more' => true
	), $atts ) );
	ob_start(); ?>
	<div class="events">
		<?php
		$today = time();
		$args = array(
			'posts_per_page' => $show,
			'post_type' => 'events',
			'event-type' => $type,
			'meta_key' => '_cmb_event_start',
			'orderby' => 'meta_value_num',
			'order' => 'ASC',
				'meta_query' => array(
					array(
						'key' => '_cmb_event_start',
						'meta-value' => '',
						'value' => $today,
						'compare' => '>=',
						'type' => 'CHAR'
					)
				)
		);
		query_posts( $args ); ?>
		<?php if(have_posts()){ ?>
		<ul class="list-item" style="margin:0 0 20px 0;">
			<?php while (have_posts()): the_post(); ?>
				<?php get_template_part('includes/entry', 'panel-list'); ?>
			<?php endwhile; wp_reset_query(); wp_reset_postdata();?>
			<?php if ($more == 'true') { ?>
				<a href="/insights/events" class="button button-light">View all</a>
			<?php } ?>
		</ul>
		<?php } else {
			echo 'No events scheduled at this time.';
		} ?>
	<br />
	</div>

	<?php $upcomingEvents = ob_get_clean();
		  return $upcomingEvents;
	}
add_shortcode( 'events', 'event_list_func' );




/*********************** Blog Articles **************************/
//[articles]
function article_list_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'show' => 3,
		'cat' => '',
		'tag' => '',
		'grid' => 'third'
	), $atts ) );
	ob_start(); ?>

	<div class="recent-artilces">
		<?php query_posts(array(
				'post_type' => 'post',
				'category_name' => $cat,
				'tag' => $tag,
				'posts_per_page' => $show,
				'post__not_in'  => get_option( 'sticky_posts' ),
			 	'order' => 'DESC' )
		); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('includes/entry-card', 'min'); ?>
		<?php endwhile; else : ?>
			<p class="txt-ctr"><?php _e( 'Sorry, no articles were found at this time.' ); ?></p>
		<?php endif; wp_reset_query(); wp_reset_postdata(); ?>
	</div>

	<?php $articleList = ob_get_clean();
		  return $articleList;
	}
add_shortcode( 'articles', 'article_list_func' );
