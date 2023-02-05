<?php
/**
 * @var array $block The block settings and attributes.
 */
$spacer_top = get_field('block_editor_spacing_top');
$spacer_bottom = get_field('block_editor_spacing_bottom');
$spacer = custom_spacer($spacer_top, $spacer_bottom);
$anchor = (isset($block['anchor'])) ? 'id=' . $block['anchor'] : null;


// Content
$title = get_field('block_editor_title');
$text = get_field('block_editor_text');

// Options
$bg = get_field('block_editor_background');
if($bg == "white") {
    $textcolor = 'text-dark';
}
else {
    $textcolor = 'text-white';
}
?>

<section class="b-block b-editor bg-<?= $bg; ?> <?= $textcolor; ?> <?= $spacer; ?>"<?= $anchor; ?>>
    <div class="container">

        <div class="row">
            <div class="col-xl-10 offset-xl-1 text-center">
                <?php if ($title): ?>
                    <h2 class="h1 text-primary mb-4"><?= $title; ?></h2>
                <?php endif; ?>
                <?php if ($text): ?>
                    <?= $text; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>
