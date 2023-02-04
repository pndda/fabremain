<?php
/**
 * @var array $block The block settings and attributes.
 */
$spacer_top = get_field('block_textcolumns_spacing_top');
$spacer_bottom = get_field('block_textcolumns_spacing_bottom');
$spacer = custom_spacer($spacer_top, $spacer_bottom);
$anchor = (isset($block['anchor'])) ? 'id=' . $block['anchor'] : null;

$link = get_field('block_textcolumns_cta');

// Content
$title = get_field('block_textcolumns_title');
$text = get_field('block_textcolumns_text');
$text2 = get_field('block_textcolumns_text2');

// Options
$bg = get_field('block_textcolumns_background');
$small = get_field('block_textcolumns_container');
?>


<section class="b-block b-text-columns bg-<?= $bg; ?><?= $spacer; ?>"<?= $anchor; ?>>
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-xl-10 pb-4 pb-lg-5">
                <?php if ($title): ?>
                    <h2><?= $title; ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($small): ?>
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-6">
                        <?php if ($text): ?>
                            <?= $text; ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <?php if ($text2): ?>
                            <?= $text2; ?>
                        <?php endif; ?>
                        <div class="d-flex justify-content-end align-items-center my-4 my-md-4">
                            <?php if ($link): ?>
                                <a href="<?= $link['url']; ?>" class="btn btn-primary"><?= $link['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <?php if ($small): ?>
            </div>
        </div>
    <?php endif; ?>
    </div>
</section>
