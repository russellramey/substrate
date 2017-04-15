<!DOCTYPE html>
<html <?php language_attributes(); // WP Lang attribute ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); //WP Charset ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); // WP Style sheet directory ?>" />
    <?php wp_head(); //WP header ?>
</head>
<body <?php body_class(); // WP body classes?>>
    <div class="container">


    <?php
    the_post();

    // Get Module metadata (from metaboxes)
    // Setup
    $module_width = get_post_meta( get_the_ID(), '_cmb_module-width', true );
    $module_height = get_post_meta( get_the_ID(), '_cmb_module-height', true );
    $module_content_width = get_post_meta( get_the_ID(), '_cmb_module-content-width', true );

    // Background
    $module_background_image = get_post_meta( get_the_ID(), '_cmb_module-background-image', true );
    $module_background_video = get_post_meta( get_the_ID(), '_cmb_module-background-video', true );
    $module_background_video_src = get_post_meta( get_the_ID(), '_cmb_module-background-video-source', true );
    $module_background_color = get_post_meta( get_the_ID(), '_cmb_module-background-color', true );

    // Overlay
    $module_overlay_color_one = get_post_meta( get_the_ID(), '_cmb_module-overlay-color-one', true );
    $module_overlay_color_two = get_post_meta( get_the_ID(), '_cmb_module-overlay-color-two', true );
    $module_overlay_opacity = get_post_meta( get_the_ID(), '_cmb_module-overlay-opacity', true );
    $module_overlay_direction = get_post_meta( get_the_ID(), '_cmb_module-overlay-direction', true );


    // Module classes
    $module_classes = array('bt-module', $module_width);
    // OUTPUT HTML BELOW
    ?>

    <div id="module-<?php the_ID(); ?>" <?php post_class($module_classes); //WP Post Classes ?>>
        <?php
        // If Video or image or both
        if($module_background_image != '' || $module_background_video_src != '')  {?>
            <div class="module-wallpaper" style="background: url(<?php echo $module_background_image; ?>)"></div>
            <div class="module-overlay" style="background:linear-gradient(to <?php echo $module_overlay_direction; ?>, <?php echo $module_overlay_color_one; ?>, <?php echo $module_overlay_color_two; ?>); opacity:.<?php echo $module_overlay_opacity; ?>;"></div>

            <?php
            // If video and src is YouTube
            if($module_background_video_src === 'youtube'){ ?>
                <div class="module-video">
                    <div class="video" data-id="<?php echo $module_background_video; ?>"></div>
                    <script async src="https://www.youtube.com/iframe_api"></script>
                    <script>
                        function onYouTubeIframeAPIReady() {
                            // Get list of all player containers
                            var players = document.querySelectorAll('.video');
                            // For each player, create YT player
                            for (var p = 0; p < players.length; p++){
                                // New player
                                new YT.Player(players[p], {
                                    // YouTube Video ID
                                    videoId: players[p].dataset.id,
                                    // Player width (in px)
                                    width: 560,
                                    // Player height (in px)
                                    height: 316,
                                    // Player options
                                    playerVars: {
                                        // Auto-play the video on load
                                        playlist: players[p].dataset.id,
                                        autoplay: 1,
                                        // Show related videos
                                        rel: 0,
                                        // Show pause/play buttons in player
                                        controls: 0,
                                        // Hide the video title
                                        showinfo: 0,
                                        // Hide the Youtube Logo
                                        modestbranding: 1,
                                        // Run the video in a loop
                                        loop: 1,
                                        // Hide the full screen button
                                        fs: 0,
                                        // Hide closed captions
                                        cc_load_policty: 0,
                                        // Hide the Video Annotations
                                        iv_load_policy: 3,
                                        // Hide video controls when playing
                                        autohide: 0
                                    },
                                    events: {
                                        onReady: function(e) {
                                        e.target.mute();
                                        }
                                    }
                                });
                            }
                        }
                    </script>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="module-wallpaper" style="background:<?php echo $module_background_color; ?>"></div>
            <div class="module-overlay" style="background:linear-gradient(to <?php echo $module_overlay_direction; ?>, <?php echo $module_overlay_color_one; ?>, <?php echo $module_overlay_color_two; ?>); opacity:.<?php echo $module_overlay_opacity; ?>;"></div>
        <?php } ?>

        <div class="module-content <?php echo 'module-' . $module_height . ' ' . $module_content_width; ?> ">
            <?php the_content(); ?>
        </div>
    </div>

    </div>

<?php wp_footer(); //WP Footer ?>
</body>
</html>
