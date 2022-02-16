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
        if ($tag->name != 'newsletter'){
        $tag_link = get_tag_link( $tag->term_id );
        echo "<span><a href='{$tag_link}' title='{$tag->name}' class='{$tag->slug} tag spark-badge spark-badge--neutral spark-tooltip'><i class='spark-icon spark-icon--fill spark-icon-tag'></i> {$tag->name}</a></span>";
        }
    } ?>
</div>
<?php } ?>
