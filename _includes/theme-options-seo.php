<?php
/***********************************************************
*
** THEME OPTIONS - SEO
** Custom site description and keywords, only shows on home page
*
************************************************************/
?>
<div id="theme-seo" class="postbox">
    <h2 class="hndle ui-sortable-handle"><span>SEO</span></h2>
    <div class="inside">
        <div class="option-item">
            <p><b><?php _e( 'Site Description' ); ?></b></p>
            <textarea id="theme_settings[seo_description]" type="text" rows="5" cols="100" name="theme_settings[seo_description]"><?php esc_attr_e( $options['seo_description'] ); ?></textarea><br/>
            <span style="font-size:12px; font-style:italic;"><?php _e( 'Brief description of overall site.' ); ?></span></p>
        </div>

        <div class="option-item">
            <p><b><?php _e( 'Site Keywords' ); ?></b></p>
            <p><input id="theme_settings[seo_keywords]" type="text" size="100" name="theme_settings[seo_keywords]" value="<?php esc_attr_e( $options['seo_keywords'] ); ?>" /><br/>
            <span style="font-size:12px; font-style:italic;"><?php _e( 'Meta keywords for entire site (seperate words with a comma).' ); ?></span></p>
        </div>
    </div>

</div>
