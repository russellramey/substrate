<?php
// Global base url
$base = 'includes/func';
/************************************************************************************
*** Setup functions
************************************************************************************/
include $base .'/theme-setup.php';
include $base . '/theme-scripts.php';
include $base . '/theme-widgets.php';
include $base . '/theme-comments.php';
// Theme options
include $base . '/global-options.php';

/************************************************************************************
*** Global variables functions
************************************************************************************/
include $base . '/global-variables.php';

/************************************************************************************
*** Shortcodes functions
************************************************************************************/
include $base . '/shortcodes-global.php';
include $base . '/shortcodes-grid.php';
include $base . '/shortcodes-module.php';

/************************************************************************************
*** Contnet functions
************************************************************************************/
include $base . '/content-project.php';
include $base . '/content-team.php';
include $base . '/content-event.php';
include $base . '/content-module.php';
include $base . '/content-news.php';
include $base . '/content-testimonial.php';
include $base . '/content-service.php';
include $base . '/content-casestudy.php';

/************************************************************************************
*** Metabox functions
    Using CMB2 metabox framework. Docs: https://github.com/webdevstudios/CMB2/wiki
************************************************************************************/
// Add CMB2 Library (includes/lib/cmb)
if ( file_exists( dirname( __FILE__ ) . '/includes/lib/cmb/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/includes/lib/cmb/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/includes/lib/cmb/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/includes/lib/cmb/init.php';
}
// Add individual metaboxes for content types above
// Recommended
include $base . '/metaboxes-event.php';
include $base . '/metaboxes-team.php';
include $base . '/metaboxes-testimonial.php';
include $base . '/metaboxes-module.php';
// Optional
//include $base . '/metaboxes-casestudy.php';
//include $base . '/metaboxes-news.php';
//include $base . '/metaboxes-project.php';
//include $base . '/metaboxes-service.php';
?>
