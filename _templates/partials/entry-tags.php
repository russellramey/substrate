<?php
/***********************************************************
*
** TAGS - METADATA
** Gets all tags associated with specific entry.
** Displays each tag as a clickable button in an inline list.
*
************************************************************/
?>
<?php
// Get all tags
$entrytags = get_the_tags();
// If tags exist
if ($entrytags) { ?>
<div class="entry-tags">
    <?php foreach($entrytags as $tag) {
        $tag_link = get_tag_link( $tag->term_id );
        echo "<span><a href='{$tag_link}' title='{$tag->name}' class='{$tag->slug} tag'>{$tag->name}</a></span>";
    } ?>
</div>
<?php } ?>
