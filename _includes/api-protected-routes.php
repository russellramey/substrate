<?php
/***********************************************************
*
** REST API - Protected Routes
** Remove access to specific routes if user is not logged in
*
************************************************************/
// Filter REST Endpoints for user authenticaiton
add_filter( 'rest_endpoints', 'rest_api_protected_routes');
function rest_api_protected_routes( $endpoints ) {
    // If user is not logged in
    if(!is_user_logged_in()){
        // Remove access to /users
        if ( isset( $endpoints['/wp/v2/users'] ) ) {
            unset( $endpoints['/wp/v2/users'] );
        }
        // remove access to /users/id
        if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
            unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
        }
    }

    // Return endpoints object
    return $endpoints;
}
