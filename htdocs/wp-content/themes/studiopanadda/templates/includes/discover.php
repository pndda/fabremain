<?php
// $cat = get_the_terms(get_the_ID(), 'tax-products-category');

// Query for results
$custom_args = array(
    'post_type' => 'cpt-products',
    'posts_per_page' => 4,
    'orderby' => 'rand',
);

// Create query
$tax_query = new WP_Query($custom_args);

?>

<section class="c-discover py-4 py-lg-6">
    <div class="container">
        <div class="text-center mb-4 mb-lg-5">
            <h3><?= __('Discover more from Angelos/Jan Fabre', 'studiopanadda'); ?></h3>
        </div>
        <div class="row">
            <?php while ($tax_query->have_posts()): $tax_query->the_post(); ?>
                <div class="col-lg-3">
                    <div class="c-discover__item position-relative d-flex flex-column align-items-start h-100">
                        <a href="<?php the_permalink();?>" class="stretched-link"></a>
                        <figure>
                            <?php the_post_thumbnail('square'); ?>
                        </figure>
                        <div class="d-flex flex-column justify-content-between h-100 text-start">
                            <h4 class="my-4 h5 text-uppercase"><?php the_title(); ?></h4>
                            <span class="btn btn-primary"><?= __('Read more', 'studiopanadda'); ?></span>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

