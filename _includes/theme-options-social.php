<?php
/***********************************************************
*
** THEME OPTIONS - SOCIAL
** Set footer social profile links
*
************************************************************/
?>
<div id="theme-social" class="postbox">
    <h2 class="hndle ui-sortable-handle"><span>Social Profile Links</span></h2>
    <div class="inside">
        <div class="option-item">
            <p><b><?php _e( 'Twiiter' ); ?></b></p>
            <p><input id="theme_settings[twitterurl]" type="text" size="36" name="theme_settings[twitterurl]" value="<?php esc_attr_e( $options['twitterurl'] ); ?>" /><br/>
            <span style="font-size:12px; font-style:italic;"><?php _e( 'URL to Twitter profile' ); ?></span></p>
        </div>

        <div class="option-item">
            <p><b><?php _e( 'Facebook' ); ?></b></p>
            <p><input id="theme_settings[facebookurl]" type="text" size="36" name="theme_settings[facebookurl]" value="<?php esc_attr_e( $options['facebookurl'] ); ?>" /><br/>
            <span style="font-size:12px; font-style:italic;"><?php _e( 'URL to Facebook profile' ); ?></span></p>
        </div>

        <div class="option-item">
            <p><b><?php _e( 'Instagram' ); ?></b></p>
            <p><input id="theme_settings[instagramurl]" type="text" size="36" name="theme_settings[instagramurl]" value="<?php esc_attr_e( $options['instagramurl'] ); ?>" /><br/>
            <span style="font-size:12px; font-style:italic;"><?php _e( 'URL to Instagram profile' ); ?></span></p>
        </div>

        <div class="option-item">
            <p><b><?php _e( 'YouTube' ); ?></b></p>
            <p><input id="theme_settings[youtubeurl]" type="text" size="36" name="theme_settings[youtubeurl]" value="<?php esc_attr_e( $options['youtubeurl'] ); ?>" /><br/>
            <span style="font-size:12px; font-style:italic;"><?php _e( 'URL to YouTube channel' ); ?></span></p>
        </div>

        <div class="option-item">
            <p><b><?php _e( 'Linked In' ); ?></b></p>
            <p><input id="theme_settings[linkedinurl]" type="text" size="36" name="theme_settings[linkedinurl]" value="<?php esc_attr_e( $options['linkedinurl'] ); ?>" /><br/>
            <span style="font-size:12px; font-style:italic;"><?php _e( 'URL to Linked In profile' ); ?></span></p>
        </div>
    </div>
</div>
