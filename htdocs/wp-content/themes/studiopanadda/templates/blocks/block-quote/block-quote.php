<?php
/**
 * @var array $block The block settings and attributes.
 */
$spacer_top    = get_field('block_quote_spacing_top');
$spacer_bottom = get_field('block_quote_spacing_bottom');
$spacer        = io_spacer($spacer_top, $spacer_bottom);
$anchor        = (isset($block['anchor'])) ? 'id=' . $block['anchor'] : null;

// Content
$quote  = get_field('block_quote_quote');
$author = get_field('block_quote_author');
?>
<?php if ($quote): ?>
    <section class="b-block b-quote<?= $spacer; ?>"<?= $anchor; ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <figure>
                        <blockquote>
                            <?= $quote; ?>
                        </blockquote>
                        <?php if ($author): ?>
                            <figcaption><?= $author ?></figcaption>
                        <?php endif; ?>
                    </figure>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
