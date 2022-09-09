<?php
/************************************************************************************
*** Function - Get Taxonomy
	Look up entry taxonomy by taxonomy name...
************************************************************************************/
function post_taxonomy($tax, $id = null){
    // If no ID, use current post ID
	if(!$id) $id = get_the_ID();
    // Get categories
    $entryTaxonomy = get_the_terms($id, $tax);
    // Set vars to empty
    $taxonomy = [];
    // If no metadata for key
	if(!$entryTaxonomy) return false;
    // Loop thru all taxonomy terms
    foreach($entryTaxonomy as $term) {
        array_push($taxonomy, [
            'label' => $term->name,
            'url' => get_term_link( $term->term_id )
        ]);
    }
    // Return data
    return $taxonomy;
}
