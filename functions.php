<?php
// Global base url
$base = 'includes/func';
/************************************************************************************
*** Setup functions
************************************************************************************/
include $base .'/_theme-setup.php';
include $base . '/_theme-scripts.php';
include $base . '/_theme-widgets.php';
include $base . '/_theme-comments.php';
// Theme options
include $base . '/_global-options.php';

/************************************************************************************
*** Global variables functions
************************************************************************************/
include $base . '/_global-variables.php';

/************************************************************************************
*** Contnet functions
************************************************************************************/
include $base . '/_content-project.php';
include $base . '/_content-team.php';
include $base . '/_content-event.php';
include $base . '/_content-module.php';
include $base . '/_content-resource.php';
include $base . '/_content-news.php';

/************************************************************************************
*** Shortcodes functions
************************************************************************************/
include $base . '/_shortcodes-global.php';
include $base . '/_shortcodes-grid.php';

/************************************************************************************
*** Metabox functions
************************************************************************************/
// Add CMB2 Library (includes/lib/cmb)
if ( file_exists( dirname( __FILE__ ) . '/includes/lib/cmb/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/includes/lib/cmb/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/includes/lib/cmb/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/includes/lib/cmb/init.php';
}
// Add individual metaboxes
include $base . '/_metaboxes-events.php';
include $base . '/_metaboxes-team.php';
?>
