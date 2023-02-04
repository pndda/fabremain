<?php

// Content
$start = get_field('event_start_date');
$end = get_field('event_end_date');
$time = get_field('event_time');
$location = get_field('event_location');
$curator = get_field('event_curator');
$link = get_field('event_website');

// Image
$caption = get_field('featured_image_caption');

// Extra text
$text = get_field('event_text');

?>

<?php
// $cat = get_the_terms(get_the_ID(), 'tax-products-category');

// Query for results
$custom_args = array(
    'post_type' => 'cpt-event',
    'posts_per_page' => 4,
    'orderby' => 'rand',
);

// Create query
$tax_query = new WP_Query($custom_args);

?>

<section class="c-events mb-4 mb-lg-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row">
                    <div class="col-xl-9">
                        <article class="bg-white text-black p-4 p-lg-5">
                            <div class="pb-4">
                                <h1 class="h2"><?= the_title(); ?></h1>
                            </div>
                            <?php the_post_thumbnail(); ?>
                            <?php if ($caption !== ''): ?>
                                <figcaption class="text-dark my-2"><?= $caption; ?></figcaption>
                            <?php endif; ?>
                            <div class="content mt-4">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <?php if ($start): ?>
                                            <p>Start date: <?= $start; ?></p>
                                        <?php endif; ?>

                                        <?php if ($end): ?>
                                            <p>End date: <?= $end; ?></p>
                                        <?php endif; ?>

                                        <?php if ($time): ?>
                                            <p>Time: <?= $time; ?></p>
                                        <?php endif; ?>

                                        <?php if ($location): ?>
                                            <p>Location: <?= $location; ?></p>
                                        <?php endif; ?>
                                        <?php if ($link): ?>
                                        <?php endif; ?>

                                        <?php if ($link): ?>
                                            <div class="pt-3">
                                                <a href="<?= $link; ?>" target="_blank"><?= $link; ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-lg-7">
                                        <?php if ($curator): ?>
                                            <p>Curator(s): <?= $curator; ?></p>
                                        <?php endif; ?>
                                        <?php if ($text): ?>
                                            <?= $text; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3">
                        <div class="c-events__side bg-white text-black my-4 my-xl-0">
                            <h3 class="h5">Discover more from Angelos/Jan Fabre</h3>
                            <div class="my-4">
                                <?php while ($tax_query->have_posts()): $tax_query->the_post(); ?>
                                    <div class="c-discover__item position-relative mb-4">
                                        <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
                                        <div class="d-flex flex-wrap justify-content-between">
                                            <h4 class="h6">
                                                <?php the_title(); ?>
                                            </h4>
                                            <figure>
                                                <?php the_post_thumbnail('square'); ?>
                                            </figure>
                                        </div>
                                    </div>
                                    <?php wp_reset_query(); ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


