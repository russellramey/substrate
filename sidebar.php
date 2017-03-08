<section id="sidebar" role="complementary">
    <?php
    // Active sidebar
    if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
        <div id="primary" class="widget-area">
            <ul class="widgets">
                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            </ul>
        </div>
    <?php
    // End if active sidebar
    endif; ?>
</section>
