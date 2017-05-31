<?php
/************************************************************************************
*** Theme Options
	Global options for theme: social profiles, Google Analytics, Custom CSS, etc...
************************************************************************************/
//register settings
function theme_settings_init(){
    register_setting( 'theme_settings', 'theme_settings' );
}
//add settings page to menu
function add_settings_page() {
    add_menu_page( __( 'Theme Options' ), __( 'Options' ), 'manage_options', 'settings', 'theme_settings_page');
}
//add actions
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );


//start settings page
function theme_settings_page() {
    if ( ! isset( $_REQUEST['settings-updated'] ) )
        $_REQUEST['settings-updated'] = false;
    ?>
    <div id="theme-options" style="margin-right:20px;">
        <h1><?php _e( 'Global Options' ) //your admin panel title ?></h1>
        <br />
        <?php
        //show saved options message
        if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div id="message" class="updated notice notice-success is-dismissible" style="margin:0; margin-bottom:20px;"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
        <?php endif; ?>

        <form method="post" action="options.php" class="poststuff">
            <?php settings_fields( 'theme_settings' ); ?>
            <?php
                global $options;
            ?>

            <!-- Social Icons -->
            <div class="section postbox">
                <div class="inside">
                    <h2 class="hndle ui-sortable-handle"><span>Social Profiles</span></h2>
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
                    	<p><b><?php _e( 'YouTube' ); ?></b></p>
                    	<p><input id="theme_settings[youtubeurl]" type="text" size="36" name="theme_settings[youtubeurl]" value="<?php esc_attr_e( $options['youtubeurl'] ); ?>" /><br/>
                    	<span style="font-size:12px; font-style:italic;"><?php _e( 'URL to YouTube channel' ); ?></span></p>
                    </div>


                    <div class="option-item">
                    	<p><b><?php _e( 'Linked In' ); ?></b></p>
                    	<p><input id="theme_settings[linkedinurl]" type="text" size="36" name="theme_settings[linkedinurl]" value="<?php esc_attr_e( $options['linkedinurl'] ); ?>" /><br/>
                    	<span style="font-size:12px; font-style:italic;"><?php _e( 'URL to Linked In profile' ); ?></span></p>
                    </div>

                    <div class="option-item">
                    	<p><b><?php _e( 'Instagram' ); ?></b></p>
                    	<p><input id="theme_settings[instagramurl]" type="text" size="36" name="theme_settings[instagramurl]" value="<?php esc_attr_e( $options['instagramurl'] ); ?>" /><br/>
                    	<span style="font-size:12px; font-style:italic;"><?php _e( 'URL to Instagram profile' ); ?></span></p>
                    </div>
                </div>
            </div>
            <Br />
            <br />
            <div class="section postbox">
                <div class="inside">
                    <h2 class="hndle ui-sortable-handle"><span>Google Analytics</span></h2>
                    <br />
                    <div class="option-item">
                    	<textarea id="theme_settings[ga_code]" rows="10" cols="100" name="theme_settings[ga_code]" value=""><?php esc_attr_e($options['ga_code']); ?></textarea>
                    	<p><span style="font-size:12px; font-style:italic;">Add your Google Analytics code here. You can get this code from your Google account.</span></p>
                    </div>
                </div>
            </div>

            <div class="section postbox">
                <div class="inside">
                    <h2 class="hndle ui-sortable-handle"><span>Footer/Copyright</span></h2>
                    <br />
                    <div class="option-item">
                    	<textarea id="theme_settings[copyright]" rows="10" cols="100" name="theme_settings[copyright]" value=""><?php esc_attr_e($options['copyright']); ?></textarea>
                    	<p><span style="font-size:12px; font-style:italic;">Change the copyright text in the footer of theme, if blank default format will be used.</span></p>
                    </div>
                </div>
            </div>
            <br />
            <p><input class="button button-primary button-large" name="submit" id="submit" value="Save Changes" type="submit"></p>
        </form>

    </div>
<?php }

//get & store theme options in global variable
$options = get_option( 'theme_settings' );
?>
