<?php
/***********************************************************
*
** CONTENT - ENTRY HEADER
** Gets entry content from DB. Used within the WP Loop.
** This markup builds out the Title and meta sections of the page.
*
************************************************************/
?>
<div class="entry-header">

	<?php // edit_post_link(); ?>

	<div class="entry-headline">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php
		// Get excerpt
		$excerpt = get_the_excerpt(get_the_ID());
		// empty excerpt
		if($excerpt){ ?>
			<p class="entry-excerpt"><?php echo $excerpt; ?></p>
		<?php }?>
	</div>
</div>
