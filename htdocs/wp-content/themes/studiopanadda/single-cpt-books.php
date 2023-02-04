<?php

// Content
$subtitle = get_field('books_subtitle');
$year = get_field('books_date');
$authors = get_field('books_authors');
$lang = get_field('books_languages');
$publisher = get_field('books_publisher');
$link = get_field('books_website');

// Location
$location = get_field('books_location');
// Extra text
$text = get_field('books_text');

// Image
$url = get_the_post_thumbnail_url();
$image = get_the_post_thumbnail();
$caption = get_the_post_thumbnail_caption();

?>

<section class="c-works py-4 py-lg-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
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
            </div>
            <div class="col-lg-8">
                <div class="px-md-4 py-5 py-lg-0">
                    <h2 class="text-uppercase"><?php the_title(); ?></h2>
                    <?php if ($subtitle): ?>
                        <p><?= $subtitle; ?></p>
                    <?php endif; ?>
                    <div class="content">
                        <div class="">
                            <ul class="list-unstyled">
                                <?php if ($year): ?>
                                    <li class=""><?= $year; ?></li>
                                <?php endif; ?>
                                <?php if ($lang): ?>
                                    <li><?= __('Languages:', 'studiopanadda'); ?> <?= $lang; ?></li>
                                <?php endif; ?>

                                <?php if ($authors): ?>
                                    <li><?= __('Authors:', 'studiopanadda'); ?> <?= $authors; ?></li>
                                <?php endif; ?>

                                <?php if ($publisher): ?>
                                    <li><?= $publisher; ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php if ($location): ?>
                            <?php $tel = $location['telephone_number'];
                            $email = $location['email'];
                            $loc_name = $location['location_name'];
                            $adress = $location['adress'];
                            $postal = $location['postal_code'];
                            $city = $location['city'];
                            ?>
                            <div class="py-4">
                                <?php if ($loc_name): ?>
                                    <h5><?= $location['location_name']; ?></h5>
                                <?php endif; ?>
                                <address>
                                    <?php if ($adress || $postal || $city): ?>
                                        <?= $location['adress']; ?> <br>
                                        <?= $location['postal_code']; ?> <?= $location['city']; ?><br>
                                    <?php endif; ?>
                                    <?php if ($location['telephone_number']): ?>
                                        tel: <?= $location['telephone_number']; ?> <br>
                                    <?php endif; ?>
                                    <?php if ($email): ?>
                                        <a href="mailto:<?= $location['email']; ?>"><?= $location['email']; ?></a>
                                    <?php endif; ?>
                                    <?php if ($link): ?>
                                        <br>
                                        <a href="<?= $link; ?>" target="_blank"><?= $link; ?></a>
                                    <?php endif; ?>
                                </address>
                            </div>
                        <?php endif; ?>
                        <?php if ($text): ?>
                            <div class="text py-4">
                                <?= $text; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php the_content(); ?>

<?php get_template_part('templates/includes/discover'); ?>


