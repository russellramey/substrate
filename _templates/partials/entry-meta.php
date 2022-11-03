<?php
/***********************************************************
*
** ENTRY META
** Gets entry content from DB. Used within the WP Loop.
** This markup builds out the Title and meta sections of the post/page.
*
************************************************************/
?>
<div class="entry-meta">
	<div class="row">
		<div class="col col-left">
			<span class="entry-date"><?php the_date('m.d.Y'); ?></span>
			<span class="entry-author">- <?php the_author(); ?></span>
		</div>
		<div class="col col-last text-end">
			<?php
				// Get entry tag list
				get_template_part('_templates/partials/entry-tags')
			?>
		</div>
	</div>
</div>
