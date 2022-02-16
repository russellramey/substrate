<?php
/***********************************************************
*
** REST API - Metadata
** Register wp_post_meta (metadata) to Rest Response
** Adds 'metadata' object to API response
*
************************************************************/
register_rest_field( array('post', 'page'), 'metadata', array(
    'get_callback' => function ( $data ) {
        return get_post_meta( $data['id'], '', '' );
    }
));
