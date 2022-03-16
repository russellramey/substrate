<?php
/***********************************************************
*
** ENTRY - THUMBNAIL
** Gets entry content from DB. Used within the WP Loop.
** This markup builds out the Title and meta sections of the page.
*
************************************************************/
?>
<?php if ( has_post_thumbnail() ) { ?>
	<div class="entry-thumb alignwide">
		<?php the_post_thumbnail(); ?>
	</div>
<?php } ?>
