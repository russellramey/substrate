/* jshint ignore:start */
/*******************************
*
* Wordpress dependencies
*
*******************************/
const { addFilter } = wp.hooks;

/*******************************
*
* Extend custom attributes
*
* @param settings, name
* @return settings
*
*******************************/
const CustomAttributeOptions = ( settings, name ) => {
  // If core/heading block
  if( "bs/button" === name ) {
    // Attributes for color options
    settings.attributes.customOptions.default.color = [
        { value: null, label: 'Theme Options', disabled: true },
        { value: 'custom-theme-class', label: 'CUSTOM LABEL' }
    ];
  }
  // Return all settings
  return settings;
}

/*******************************
*
* Apply filters
*
*******************************/
// addFilter( "blocks.registerBlockType", "bs/button", addButtonStyleOptions );
