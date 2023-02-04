<?php
/**
 * @var array $block The block settings and attributes.
 */
$spacer_top = get_field('block_slider_spacing_top');
$spacer_bottom = get_field('block_slider_spacing_bottom');
$spacer = custom_spacer($spacer_top, $spacer_bottom);
$anchor = (isset($block['anchor'])) ? 'id=' . $block['anchor'] : null;

// Content
$title = get_field('block_slider_title');
$images = get_field('block_slider_gallery');

$slides = get_field('block_slider_slides');
?>


<section class="b-block b-slider <?= $spacer; ?>">
    <div class="container">
        <?php if ($slides): ?>
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="b-slider__slider-wrapper">
                        <button class="b-slider__button b-slider__button--prev">
                            <svg>
                                <use href="<?= custom_sprite('icon-arrow-right'); ?>"></use>
                            </svg>
                        </button>
                        <button class="b-slider__button b-slider__button--next">
                            <svg>
                                <use href="<?= custom_sprite('icon-arrow-right'); ?>"></use>
                            </svg>
                        </button>
                        <div class="c-slide js-slider">
                            <?php foreach ($slides as $slide): ?>
                                <?php $item = $slide['item'];
                                $subtitle = $slide['subtitle'];
                                $title = $slide['title'];
                                $text = $slide['text'];
                                $link = $slide['cta'];
                                $button_type = $slide['button_type'];
                                $image = $slide['image'];
                                ?>
                                <div class="d-md-flex">
                                    <div class="col-md-6 order-md-2">
                                        <figure class="p-3 p-lg-4">
                                            <?php if ($image): ?>
                                                <?= wp_get_attachment_image($image, '', false, array("title" => get_the_title($image), 'class' => '')); ?>
                                            <?php else: ?>
                                                <?= get_the_post_thumbnail($item->ID); ?>
                                            <?php endif; ?>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="py-3">
                                            <?php if ($subtitle): ?>
                                                <span class="title"><?= $subtitle; ?></span>
                                            <?php endif; ?>
                                            <?php if ($title): ?>
                                                <h2 class="h3 text-uppercase py-3 py-md-4"><?= $title; ?></h2>
                                            <?php else: ?>
                                                <h2 class="h3 text-uppercase py-3 py-md-4"><?= $item->post_title; ?></h2>
                                            <?php endif; ?>
                                            <?php if ($text): ?>
                                                <?= $text; ?>
                                            <?php else: ?>
                                                <p>
                                                    <?= $item->post_excerpt ?>
                                                </p>
                                            <?php endif; ?>
                                            <?php if ($link): ?>
                                                <a href="<?= $link['url']; ?>" class="btn btn-<?= $button_type; ?> mt-3"
                                                   target="<?= $link['target']; ?>">
                                                    <?= $link['title']; ?>
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php the_permalink($item->ID); ?>" class="btn btn-<?= $button_type; ?> mt-3">
                                                   <?= __('Read more', 'studiopanadda'); ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
