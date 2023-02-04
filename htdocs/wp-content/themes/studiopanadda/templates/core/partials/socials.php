<?php
/**
 * @var $angelos
 *
 * @var $troubleyn
 *
 * @var $teaching
 */

$facebook = $angelos['facebook'];
$instagram = $angelos['instagram'];
$link = $angelos['site_url'];
$title = $angelos['title'];

$fb = $troubleyn['facebook'];
$insta = $troubleyn['instagram'];
$link2 = $troubleyn['site_url'];
$title2 = $troubleyn['title'];

$fb3 = $teaching['facebook'];
$insta3 = $teaching['instagram'];
$link3 = $teaching['site_url'];
$title3 = $teaching['title'];
?>
<?php if ($facebook || $instagram || $link): ?>
    <div
        class="col-12 col-md-auto d-flex flex-column align-items-center align-items-md-start justify-content-center mb-3">
        <h4><?= $title ?></h4>
        <ul class="c-socials list-unstyled d-flex">
            <?php if ($link): ?>
                <li>
                    <a href="<?= $link; ?>" target="_blank" class="c-socials__link">
                        <svg>
                            <use href="<?= custom_sprite('icon-globe'); ?>"></use>
                        </svg>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($facebook): ?>
                <li>
                    <a href="<?= $facebook; ?>" target="_blank" class="c-socials__facebook">
                        <svg>
                            <use href="<?= custom_sprite('icon-facebook'); ?>"></use>
                        </svg>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($instagram): ?>
                <li>
                    <a href="<?= $instagram; ?>" target="_blank" class="c-socials__instagram">
                        <svg>
                            <use href="<?= custom_sprite('icon-instagram'); ?>"></use>
                        </svg>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if ($fb || $insta || $link2): ?>
    <div
        class="col-12 col-md-auto d-flex flex-column align-items-center align-items-md-start justify-content-center mb-3">
        <h4><?= $title2 ?></h4>
        <ul class="c-socials list-unstyled d-flex">
            <?php if ($link2): ?>
                <li>
                    <a href="<?= $link2; ?>" target="_blank" class="c-socials__link">
                        <svg>
                            <use href="<?= custom_sprite('icon-globe'); ?>"></use>
                        </svg>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($fb): ?>
                <li>
                    <a href="<?= $fb; ?>" target="_blank" class="c-socials__facebook">
                        <svg>
                            <use href="<?= custom_sprite('icon-facebook'); ?>"></use>
                        </svg>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($insta): ?>
                <li>
                    <a href="<?= $insta; ?>" target="_blank" class="c-socials__instagram">
                        <svg>
                            <use href="<?= custom_sprite('icon-instagram'); ?>"></use>
                        </svg>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if ($fb3 || $insta3 || $link3): ?>
    <div
        class="col-12 col-md-auto d-flex flex-column align-items-center align-items-md-start justify-content-center mb-3">
        <h4><?= $title3 ?></h4>
        <ul class="c-socials list-unstyled d-flex">
            <?php if ($link): ?>
                <li>
                    <a href="<?= $link; ?>" target="_blank" class="c-socials__link">
                        <svg>
                            <use href="<?= custom_sprite('icon-globe'); ?>"></use>
                        </svg>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($facebook): ?>
                <li>
                    <a href="<?= $facebook; ?>" target="_blank" class="c-socials__facebook">
                        <svg>
                            <use href="<?= custom_sprite('icon-facebook'); ?>"></use>
                        </svg>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($instagram): ?>
                <li>
                    <a href="<?= $instagram; ?>" target="_blank" class="c-socials__instagram">
                        <svg>
                            <use href="<?= custom_sprite('icon-instagram'); ?>"></use>
                        </svg>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>
