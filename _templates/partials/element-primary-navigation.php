<nav class="navigation-menu">
    <?php
    // Get main-menu
    wp_nav_menu( array(
        'theme_location' => 'main-menu',
        'menu_class' => 'navbar-nav',
        'container' => null,
        'walker' => new bootstrap_navbar_menu_walker()
    ) ); ?>
</nav>
