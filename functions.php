<?php
/************************************************************************************
*** CONSTANTS
************************************************************************************/

/************************************************************************************
*** Theme Setup
	Basic theme setup
************************************************************************************/
include '_includes/theme-setup.php';
include '_includes/theme-scripts.php';
include '_includes/theme-styles.php';
include '_includes/theme-colors.php';
include '_includes/theme-typography.php';
include '_includes/theme-options.php';

/************************************************************************************
*** Theme Methods
	Global functions that can be used within templates and theme files
************************************************************************************/
include '_includes/method-post-metadata.php';

/************************************************************************************
*** Theme Content
	Custom post types unique to this theme
************************************************************************************/
// Post types

// Metaboxes (uses CMB2 library)
// First include CMB2 init script (required)
if ( file_exists( dirname( __FILE__ ) . '/_library/cmb/init.php' ) ) {
	// CMB2 initiate
	require_once dirname( __FILE__ ) . '/_library/cmb/init.php';
	// CMB Metaboxes
}

/************************************************************************************
*** Theme API
	Custom functions for API responses
************************************************************************************/
include '_includes/api-filter.php';
include '_includes/api-metadata.php';
include '_includes/api-protected-routes.php';
