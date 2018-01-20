<?php
/************************************************************************************
*** Global varialbes
	Variables for use in all templates and paritals
************************************************************************************/
// Global base url
$base = '_includes/func';

/* Directory references */
global $template;
global $partial;

$template = '_templates';
$partial = '_templates/partials';
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
*** Shortcodes functions
************************************************************************************/
include $base . '/shortcodes-global.php';
include $base . '/shortcodes-grid.php';

/************************************************************************************
*** Contnet functions
************************************************************************************/



/************************************************************************************
*** Taxonomy functions
************************************************************************************/


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
// Add your CMB2 metabox funcitons below

?>
