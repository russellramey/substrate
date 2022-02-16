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
			<div class="entry-date">
				<span><?php the_date('m.d.Y'); ?></span>
			</div>
			<?php
			// Get entry category menu
			get_template_part('_templates/partials/entry-tags');
			// If has cateogries
			// if (has_category()) {
			// 	// Get entry category menu
			// 	get_template_part('_templates/partials/entry-category');
			// } ?>
		</div>
		<div class="col col-last text-end">
			<span class="entry-author"><?php the_author(); ?></span>
		</div>
	</div>
</div>
