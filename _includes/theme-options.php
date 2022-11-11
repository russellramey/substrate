<?php
/***********************************************************
*
** THEME - OPTIONS
** Register theme options/settings
*
************************************************************/
// Register settings
function substrate_settings_init(){
    register_setting( 'theme_settings', 'theme_settings' );
}
// Add settings page to menu
function substrate_add_settings_page() {
    add_menu_page( __( 'Theme Options' ), __( 'Site Options' ), 'manage_options', 'settings', 'substrate_settings_page');
}
// Add theme setting nav item
add_action( 'admin_menu', 'substrate_add_settings_page' );
// Add theme setting options
add_action( 'admin_init', 'substrate_settings_init' );


// Theme setting page
function substrate_settings_page() {
    // If request is not updated
    if ( ! isset( $_REQUEST['settings-updated'] ) )
        $_REQUEST['settings-updated'] = false;
    ?>

    <div id="poststuff" class="theme-options wrap">
        <h1><?php _e( 'Global Options' ) ?></h1>

        <?php
        //show saved options message
        if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div id="message" class="updated notice notice-success is-dismissible" style="margin:0; margin-bottom:20px;"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
        <?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields( 'theme_settings' ); ?>
            <?php
                global $options;
            ?>

            <?php
            // Include theme option sections
            include(locate_template('_includes/theme-options-social.php'));
            include(locate_template('_includes/theme-options-seo.php'));
            ?>

            <br />
            <p><input class="button button-primary button-large" name="submit" id="submit" value="Save Changes" type="submit"></p>
        </form>

    </div><!-- END wrap -->
<?php }
//get theme options
$options = get_option( 'theme_settings' );
