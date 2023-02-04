<?php
/**
 * @var array $block The block settings and attributes.
 */
$spacer_top    = get_field( 'block_forms_spacing_top' );
$spacer_bottom = get_field( 'block_forms_spacing_bottom' );
$spacer        = io_spacer($spacer_top, $spacer_bottom);
$anchor        = (isset($block['anchor'])) ? 'id=' . $block['anchor'] : null;

// Content
$title = get_field('block_forms_title');
$text  = get_field('block_forms_text');
$form  = get_field('block_forms_form');
?>

<section class="b-block b-form<?= $spacer; ?>"<?= $anchor; ?>>
    <div class="container">
        <?php if ($title): ?>
            <h2><?= $title; ?></h2>
        <?php endif; ?>
        <?php if ($text): ?>
            <?= $text; ?>
        <?php endif; ?>
        <div class="row">
            <div class="col col-md-10 col-xl-8 mx-auto">
                <?php gravity_form($form, false, false, false, false, false, 10); ?>
            </div>
        </div>
    </div>
</section>
