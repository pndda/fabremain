<?php

/*
 * Default AJAX filter function
 */

function io_default_ajax_filter()
{

    $array_tax = [];
    $kind = $_POST["select_kind"];
    if (!empty($kind)) {
        $array_tax = array(
            'taxonomy' => 'kind',
            'field' => 'term_id',
            'terms' => $kind,
            'operator' => 'IN',
        );
    }

    $argsOptions = array(
        'post_type' => 'products',
        'posts_per_page' => -1,
        'tax_query' => array(
            'relation' => 'AND',
            $array_tax,
        ),
    );
    $wp_query = new WP_Query($argsOptions);
    while ($wp_query->have_posts()): $wp_query->the_post(); ?>
        <div class="col-sm-6 col-lg-4 mb-30 py-20 py-lg-40">
            <div class="c-news__item">
                <h2 class="h5"><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?= __('Lees artikel', 'io'); ?></a>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query();
    exit();
}

add_action('wp_ajax_io_default_ajax_filter', 'io_default_ajax_filter');
add_action('wp_ajax_nopriv_io_default_ajax_filter', 'io_default_ajax_filter');
