<?php
/***********************************************************
*
** CONTENT - ENTRY CATEGORY
** Category button with entry category and link to category,
** also creates a list of all categories in dropdown menu
*
************************************************************/
?>
<div class="entry-category alignright">
	<?php
	// Get category (label, url)
	$category = get_entry_category(get_the_ID()); ?>
	<div class="spark-btn-combo">
	  <a href="<?php echo $category['url']; ?>" class="spark-btn spark-btn--xs spark-btn--secondary spark-btn-combo__primary">
		  <span><?php echo $category['label']; ?></span>
	  </a>

	  <div class="spark-popover">
		<button class="spark-btn spark-btn--xs spark-btn--secondary spark-btn-combo__secondary spark-popover__toggle" aria-haspopup="true" aria-expanded="false"></button>
		<div class="spark-popover__content" role="tooltip" data-anchor-x="left" data-anchor-y="bottom">
			<ul class="spark-popover__list" role="menu">
				<?php
					$categories = get_terms(array (
						'taxonomy' => 'category',
						'title_li' => '',
						'orderby' => 'title'
					));
					foreach($categories as $category){
						// If slug is not z-featured or uncategorized
						if($category->slug !== 'z-featured' && $category->slug !== 'uncategorized'){
							echo '<li class="spark-popover__list-item">';
							echo '<a class="spark-popover__list-link" role="menuitem" href="' . get_term_link($category->term_id) . '">' . $category->name . '</a>';
							echo '</li>';
						}
					}
				?>
			</ul>
		  <span class="spark-popover__caret"></span>
		</div>
	  </div>
	</div>
</div>
