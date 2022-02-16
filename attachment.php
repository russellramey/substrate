<?php
/***********************************************************
*
** ATTACHMENT TEMPLATE
** WP default template for attachment.
** Redirect automatically back to attachment parent.
*
************************************************************/
wp_redirect(get_permalink($post->post_parent));
?>
