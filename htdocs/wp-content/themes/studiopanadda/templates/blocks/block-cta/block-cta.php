<?php
/**
 * @var array $block The block settings and attributes.
 */
$spacer_top    = get_field( 'block_cta_spacing_top' );
$spacer_bottom = get_field( 'block_cta_spacing_bottom' );
$spacer        = io_spacer($spacer_top, $spacer_bottom);
$anchor        = (isset($block['anchor'])) ? 'id=' . $block['anchor'] : null;

// Content
$title       = get_field('block_cta_title');
$text        = get_field('block_cta_text');
$link        = get_field('block_cta_link');
$button_type = get_field('block_cta_button_type');

// Options
$align = get_field('block_cta_text_align');
?>

<section class="b-block b-cta text-<?= $align; ?><?= $spacer; ?>"<?= $anchor; ?>>
    <div class="container">
        <?php if ($title): ?>
            <h2><?= $title; ?></h2>
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
</section>
