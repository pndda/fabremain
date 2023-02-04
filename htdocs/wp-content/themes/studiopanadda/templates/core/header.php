<header class="c-header py-3 py-lg-5">
    <div class="container">
        <div class="row justify-content-between align-items-start align-items-md-center">
            <div class="col-2">
                <div class="row align-items-center">
                    <div class="col-auto pt-2 pt-md-0">
                        <div class="c-hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <?php include 'partials/language-selector.php'; ?>
                </div>
            </div>
            <div class="col-10 col-md-8">
                <div class="d-flex justify-content-en justify-content-md-center align-items-center">
                    <a href="http://janfabre.mcrn.eu/" class="c-logo ms-3 ms-md-0" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/img/default/logo-janfabre.png"
                             alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center align-items-center py-3">
                <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => 'c-nav-secondary list-unstyled d-flex', 'theme_location' => 'secondary_navigation')); ?>
            </div>
        </div>
    </div>
    <div class="c-overlay">
        <div class="container py-3 py-lg-5">
            <div class="row justify-content-between align-items-start align-items-md-center">
                <div class="col-2">
                    <div class="row align-items-center">
                        <div class="col-auto pt-2 pt-md-0">
                            <div class="c-hamburger is-open">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <?php include 'partials/language-selector.php'; ?>
                    </div>
                </div>
                <div class="col-10 col-md-8">
                    <div
                        class="d-flex justify-content-end justify-content-md-center align-items-end align-items-md-center">
                        <a href="http://janfabre.mcrn.eu/" class="c-logo" title="<?= get_bloginfo('name'); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/build/img/default/logo-janfabre.png"
                                 alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="container">
            <div class="c-overlay__inner">
                <div>
                    <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => 'c-nav-primary list-unstyled my-4', 'theme_location' => 'primary_navigation')); ?>
                    <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => 'c-nav-secondary list-unstyled d-flex my-5', 'theme_location' => 'secondary_navigation')); ?>
                </div>
            </div>
        </div>
    </div>
</header>
