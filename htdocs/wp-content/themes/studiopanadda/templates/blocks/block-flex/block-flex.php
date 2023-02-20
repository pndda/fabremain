<?php
/**
 * @var array $block The block settings and attributes.
 */
$spacer_top = get_field('block_flex_spacing_top');
$spacer_bottom = get_field('block_flex_spacing_bottom');
$spacer = custom_spacer($spacer_top, $spacer_bottom);
$anchor = (isset($block['anchor'])) ? 'id=' . $block['anchor'] : null;

// Content
$title = get_field('block_flex_title');
$repeater = get_field('block_flex_repeater');

// Options
$columns = get_field('block_flex_column_number');
?>
<?php if ($title): ?>
    <div class="b-flex row text-center justify-content-center bg-black">
        <div class="col-xl-10 py-4 py-lg-5">
            <h2 class="h1"><?= $title; ?></h2>
        </div>
    </div>
<?php endif; ?>

<section class="b-block b-flex bg-white <?= $spacer; ?>"<?= $anchor; ?>>
    <div class="container">
        <?php if ($repeater): ?>
            <div class="row gx-5 justify-content-center">
                <?php foreach ($repeater as $column):
                    $col_class = match ($columns) {
                        '3' => 'col-sm-12 col-lg-3 mb-4',
                        '4' => 'col-sm-12 col-lg-6 col-xl-3 mb-4',
                        default => 'col-sm-12 col-lg-6 mb-4',
                    };
                    $title = $column['title'];
                    $text = $column['text'];
                    $link = $column['link'];
                    $button_type = $column['button_type'];
                    $image = wp_get_attachment_image($column['image']['ID'], 'square', false, array("title" => get_the_title($column['image']['ID']), 'class' => 'img-fluid w-100'));
                    ?>
                    <div class="<?= $col_class; ?>">
                        <div class="d-flex flex-column align-items-center h-100 bg-secondary text-center">
                            <?php if ($image): ?>
                                <?php if ($link): ?>
                                    <a href="<?= $link['url']; ?>" target="<?= $link['target']; ?>">
                                <?php endif; ?>
                                <?= $image ?>
                                <?php if ($link): ?>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>

                            <div class="d-flex flex-column flex-grow-1">
                                <?php if ($title): ?>
                                    <h3 class="h5 text-uppercase my-4"><?= $title; ?></h3>
                                <?php endif; ?>

                                <?php if ($text): ?>
                                    <?= $text; ?>
                                <?php endif; ?>
                            </div>
                            <?php if ($link): ?>
                                <a href="<?= $link['url']; ?>" class="btn btn-<?= $button_type; ?> w-100"
                                   target="<?= $link['target']; ?>">
                                    <?= $link['title']; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
