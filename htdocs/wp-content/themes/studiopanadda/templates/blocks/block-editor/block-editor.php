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
?>

<section class="b-block b-editor bg-<?= $bg; ?><?= $spacer; ?>"<?= $anchor; ?>>
    <div class="container">

        <div class="row">
            <div class="col-xl-10 offset-xl-1">

                <div class="row">
                    <div class="col-md-6">
                        <?php if ($title): ?>
                            <h2 class="h1"><?= $title; ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <?php if ($text): ?>
                            <?= $text; ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
