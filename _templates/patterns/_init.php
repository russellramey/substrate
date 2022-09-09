<?php
// Block patterns
class Substrate_Content_Block_Patterns
{

    // Patterns array
    private $patterns = [
        'banner-action',
        'banner-text-default',
        'banner-text-center',
        'carousel-photo',
        'carousel-cards-3',
        'carousel-cards-4',
        'column-cards-3',
        'column-cards-4',
        'column-media-text',
        'column-media-text-alt',
        'column-media-text-full',
        'column-media-text-full-alt',
        'text-heading',
        'text-quote'
    ];

    /**
     *
     * Class constructor
     * Initiate all required WP Hooks, Filters, and Actions
     *
     * @return default
    **/
    public function __construct()
    {
        // Initiate patterns
		add_action( 'init', array($this, 'substrate_block_patterns') );
        // Register additonal theme setup options
		add_action( 'init', array($this, 'substrate_block_pattern_categories') );
        // Empty return
        return;
    }

    /**
	 * Register block patterns
	 * Include each file from provided array for pattern details.
	 *
	 * @return Array
	**/
    function substrate_block_patterns()
    {
        foreach($this->patterns as $pattern){
            // Get options file
            include_once($pattern . '.php');
            // Register block pattern
            register_block_pattern('substrate/' . $pattern,
                $options
            );
        }
        // Empty return
        return;
    }

    /**
	 * Register block pattern categories
	 *
	 * @return default
	**/
    function substrate_block_pattern_categories()
    {
        // Banner category
        register_block_pattern_category( 'banner', array( 'label' => 'Banners' ));
        // Carousel category
        register_block_pattern_category( 'carousel', array( 'label' => 'Carousels' ));
        // Empty return
        return;
    }
}
?>
