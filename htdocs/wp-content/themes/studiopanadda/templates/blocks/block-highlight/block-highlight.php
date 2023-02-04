<?php
/**
 * @var array $block The block settings and attributes.
 */
$spacer_top = get_field('block_highlight_spacing_top');
$spacer_bottom = get_field('block_highlight_spacing_bottom');
$spacer = custom_spacer($spacer_top, $spacer_bottom);
$anchor = (isset($block['anchor'])) ? 'id=' . $block['anchor'] : null;


// Content
$title = get_field('block_highlight_title');
$text = get_field('block_highlight_text');

$items = get_field('block_highlight_items');

// Options
$bg = get_field('block_highlight_background');
?>

<section class="b-block b-highlight bg-<?= $bg; ?><?= $spacer; ?>"<?= $anchor; ?>>
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="py-4">
                    <?php if ($title): ?>
                        <h2><?= $title; ?></h2>
                    <?php endif; ?>
                    <?php if ($items): ?>
                        <div class="b-highlight__wrapper">
                            <?php $count = 0; ?>
                            <?php foreach ($items as $item): ?>
                                <?php $count++;
                                $itemClass = '';
                                switch ($count) {
                                    case '1':
                                        $itemClass = 'item-large';
                                        break;
                                    case '2':
                                    case '3':
                                        $itemClass = 'item-next';
                                        break;
                                    case '4':
                                    case '5':
                                        $itemClass = 'item-medium';
                                        break;
                                    default:
                                        $itemClass = 'item-medium';
                                };
                                ?>
                                <?php $title = $item['title'];
                                $link = $item['link'];
                                $img = $item['image'];
                                ?>
                                <div class="item position-relative <?= $itemClass ?> count-<?= $count ?>">
                                    <a href="<?= $link['url'] ?>" class="stretched-link"></a>
                                    <figure>
                                        <?= wp_get_attachment_image($img['ID'], '', false, array("title" => get_the_title($img), 'class' => 'img-fluid')); ?>
                                        <div class="text">
                                            <h2 class="h3 text-uppercase"><?= $title; ?></h2>
                                        </div>
                                    </figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
