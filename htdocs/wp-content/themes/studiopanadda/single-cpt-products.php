<?php

// Content
$date = get_field('work_settings_date');
$end_date = get_field('work_settings_end_date');
$gallery = get_field('work_settings_gallery');

// Info
$location = get_field('work_settings_location');
$material = get_field('work_settings_material');
$dimension = get_field('work_settings_dimensions');
$type = get_field('work_settings_type_work');

// Extra text
$text = get_field('work_settings_text');
?>

<section class="c-works py-4 py-lg-6">
    <div class="container">
        <div class="row">
            <?php if ($gallery): ?>
                <div class="col-lg-4">
                    <div class="c-work__slider position-relative">
                        <div class="slider-work">
                            <?php foreach ($gallery as $gallery_item):
                                $image = wp_get_attachment_image($gallery_item['ID'], 'full', false, array("title" => get_the_title($gallery_item['ID']), 'class' => 'img-fluid'));
                                $url = $gallery_item['url'];
                                $caption = $gallery_item['caption'];
                                ?>
                                <div class="">
                                    <a href="<?= $url; ?>" class="venobox" data-gall="venobox">
                                        <figure>
                                            <?= $image ?>
                                            <?php if ($caption !== ''): ?>
                                                <figcaption class="text-dark"><?= $caption; ?></figcaption>
                                            <?php endif; ?>
                                        </figure>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="slider-nav py-4">
                            <?php foreach ($gallery as $gallery_item):
                                $image = wp_get_attachment_image($gallery_item['ID'], 'square', false, array("title" => get_the_title($gallery_item['ID']), 'class' => 'img-fluid'));
                                $url = $gallery_item['url'];
                                $caption = $gallery_item['caption'];
                                ?>
                                <div class="">
                                    <figure>
                                        <?= $image ?>
                                    </figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="px-md-4 py-5 py-lg-0">
                        <h2 class="text-uppercase"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php if ($date || $end_date): ?>
                                <span
                                    class="date mb-3 mb-lg-4"><?= $date; ?> <?php if ($end_date): ?>- <?= $end_date; ?><?php endif; ?></span>
                            <?php endif; ?>

                            <?php if ($location): ?>
                                <span class="location">  <?= $location; ?></span>
                            <?php endif; ?>

                            <?php if ($material): ?>
                                <span class="material"><?= $material; ?></span>
                            <?php endif; ?>

                            <?php if ($dimension): ?>
                                <span class="dimension"><?= $dimension; ?></span>
                            <?php endif; ?>

                            <?php if ($type): ?>
                                <span class="type"><?= $type; ?></span>
                            <?php endif; ?>

                            <?php if ($text): ?>
                                <div class="text py-4">
                                    <?= $text; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php the_content(); ?>

<?php get_template_part('templates/includes/discover'); ?>






