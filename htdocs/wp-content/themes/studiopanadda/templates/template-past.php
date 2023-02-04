<?php
/* Template Name: Template - Past */

$currentdate = date('d/m/Y', strtotime('now'));


$link_left = get_field('template_event_link_left');
$link_right = get_field('template_event_link_right');

// Query for results
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'cpt-event',
    'post_status' => 'publish',
    'posts_per_page' => 12,
    'paged' => $paged,
    'meta_query' => array(
        array(
            'key' => 'event_end_date',
            'value' => $currentdate,
            'compare' => '<',

        ),
    ),
    'orderby' => 'event_end_date',
    'order' => 'DESC'
);

$wp_query = new WP_Query($args);

?>

<?php get_template_part('templates/includes/hero'); ?>

<section class="bg-white text-primary py-4 py-lg-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="text-center">
                    <h1 class="h2"><?= the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="c-exhibition-overview mb-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-4 my-lg-5">
            <?php if ($link_left): ?>
                <a href="<?= $link_left['url']; ?>" class="btn btn-primary"><?= $link_left['title']; ?></a>
            <?php endif; ?>
            <?php if ($link_right): ?>
                <a href="<?= $link_right['url']; ?>" class="btn btn-primary"><?= $link_right['title']; ?></a>
            <?php endif; ?>
        </div>
        <?php if ($wp_query->have_posts()): ?>
            <div class="row justify-content-xl-center">
                <?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
                    <?php
                    $imageID = get_post_thumbnail_id();
                    $title = get_the_title();
                    $link = get_the_permalink();
                    $start = get_field('event_start_date',);
                    $end = get_field('event_end_date', get_the_ID());
                    $curator = get_field('event_curator', get_the_ID());
                    $location = get_field('event_location', get_the_ID());
                    ?>
                    <div class="c-overview__item position-relative col-12 col-md-6 col-xl-10">
                        <div class="row justify-content-center">
                            <div class="py-4">
                                <a href="<?= $link; ?>" class="stretched-link"></a>
                                <div class="row">
                                    <div class="col-md-7 col-xl-9 py-3">
                                        <h2 class="h4 text-uppercase text-primary"><?= $title; ?></h2>
                                        <div class="content">
                                            <p>
                                                <?php if ($start): ?>
                                                    <span class="date">Start date: <?= $start; ?></span>
                                                <?php endif; ?>

                                                <?php if ($end): ?>
                                                    <span class="date">End date: <?= $end; ?></span>
                                                <?php endif; ?>

                                                <?php if ($location): ?>
                                                    <span class="location">Location: <?= $location; ?></span>
                                                <?php endif; ?>

                                                <?php if ($curator): ?>
                                                    <span class="curator">Curator(s): <?= $curator; ?></span>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-xl-3 py-3">
                                        <figure class="d-flex justify-content-end">
                                            <?= wp_get_attachment_image($imageID, '', false, array("title" => get_the_title($imageID), 'class' => 'img-fluid')); ?>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="my-4 text-center">
                <p>
                    <?= __('There are no past events.', 'studiopanadda'); ?>
                </p>
            </div>
        <?php endif; ?>
        <div class="col-12 text-center py-2 py-md-4 py-lg-5">
            <div class="c-pagination">
                <?php
                $total_pages = $wp_query->max_num_pages;
                if ($total_pages > 1) {
                    $current_page = max(1, get_query_var('paged'));
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => '/page/%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text' => '<svg width="8" height="12" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M6.211.225a1.78 1.78 0 0 1 1.256.496c.693.657.693 1.723 0 2.393l-3.165 3 3.178 3c.693.657.693 1.723 0 2.393-.693.657-1.817.657-2.524 0L.523 7.305A1.629 1.629 0 0 1 0 6.115c0-.447.183-.881.523-1.191L4.956.72c.353-.335.81-.496 1.255-.496v.001z" fill-rule="evenodd"/></svg>',
                        'next_text' => '<svg width="8" height="12" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M1.789 11.775a1.78 1.78 0 0 1-1.256-.496c-.693-.657-.693-1.723 0-2.393l3.165-3-3.178-3c-.693-.657-.693-1.723 0-2.393.693-.657 1.817-.657 2.524 0l4.433 4.202c.34.323.523.744.523 1.19 0 .447-.183.881-.523 1.191L3.044 11.28c-.353.335-.81.496-1.255.496z" fill-rule="evenodd"/></svg>',
                    ));
                }
                ?>
            </div>
        </div>
        <?php wp_reset_query(); ?>
    </div>
</section>


