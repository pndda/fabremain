<?php if (!(array_key_exists('cookieconsent', $_COOKIE) && $_COOKIE['cookieconsent'] === 'dismissed')): ?>
    <div class="c-cookie js-cookie-banner">
        <div class="container">
            <div class="row align-items-center py-3 py-lg-4">
                <div class="col-lg-7">
                    <span><?php _e('Deze website maakt gebruik van cookies om ervoor te zorgen dat wij onze diensten kunnen optimaliseren en u de beste ervaring krijgt op onze website.', 'io'); ?></span>
                </div>
                <div class="col-md-5 d-flex align-items-center justify-content-end text-right">
                    <?php if(function_exists('pll_get_post')): ?>
                        <a href="<?php the_permalink(pll_get_post(3)); ?>" class="btn-link"><?php _e('Meer weten', 'io'); ?></a>
                    <?php endif; ?>
                    <span class="btn btn-primary ms-4 js-cookie-dismiss" id="accept"><?php _e('Accepteer', 'io'); ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
