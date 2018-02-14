<?php
/************************************************************************************
*** Comments
	Set up comments function for WP
************************************************************************************/
// Comment Setup
add_action( 'comment_form_before', 'substrate_enqueue_comment_reply_script' );
function substrate_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

// Comment Pings
function substrate_custom_pings( $comment ) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php }

// Comment count
add_filter( 'get_comments_number', 'substrate_comments_number' );
function substrate_comments_number( $count ) {
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}
?>
