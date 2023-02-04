<?php
/**
 * @var array $block The block settings and attributes.
 */
$spacer_top    = get_field( 'block_hero_spacing_top' );
$spacer_bottom = get_field( 'block_hero_spacing_bottom' );
$spacer        = io_spacer($spacer_top, $spacer_bottom);
$anchor        = (isset($block['anchor'])) ? 'id=' . $block['anchor'] : null;

// Content
$title       = get_field('block_hero_title');
$text        = get_field('block_hero_text');
$image       = get_field('block_hero_image');
$link        = get_field('block_hero_link');
$button_type = get_field('block_hero_button_type');

$image_url = $image['sizes']['large'];
?>
<section class="b-block b-hero<?= $spacer; ?>"<?= $anchor; ?>>
    <div class="b-hero__img" style="background-image: url(<?= $image_url; ?>)"></div>
    <div class="b-hero__content py-4 py-md-0">
        <div class="container">
            <?php if ($title): ?>
                <h1><?= $title; ?></h1>
            <?php endif; ?>
            <?php if ($text): ?>
                <?= $text; ?>
            <?php endif; ?>
            <?php if ($link): ?>
                <a href="<?= $link['url']; ?>" class="btn btn-<?= $button_type; ?>" target="<?= $link['target']; ?>">
                    <?= $link['title']; ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
