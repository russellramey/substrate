<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <div id="hamburger" class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div id="navigation" class="navigation collapse navbar-collapse">
                <?php
                // Nav template
                get_template_part('_templates/partials/element-primary-navigation'); ?>
            </div>
        </div>
    </nav>
</header>
