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
*** Shortcodes functions
************************************************************************************/
include $base . '/shortcodes-global.php';
include $base . '/shortcodes-grid.php';
include $base . '/shortcodes-module.php';

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
// Add individual metaboxes
include $base . '/metaboxes-events.php';
include $base . '/metaboxes-team.php';
include $base . '/metaboxes-module.php';
?>
