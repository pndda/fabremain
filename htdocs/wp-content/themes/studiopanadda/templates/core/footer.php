<?php
$angelos = get_field('socials_angelos', 'options');
$troubleyn = get_field('socials_troubleyn', 'options');
$teaching = get_field('socials_teaching', 'options');
?>

<footer class="c-footer py-4 my-3 py-lg-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 text-center text-md-start">
                <a href="http://janfabre.mcrn.eu/" class="c-logo" title="<?= get_bloginfo('name'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/build/img/default/logo-janfabre.png"
                         alt="">
                </a>
            </div>
            <?php if ($angelos || $troubleyn || $teaching): ?>
                <div class="col-auto flex-wrap d-flex flex-column flex-md-row flex-grow-1 justify-content-md-between align-itemss-center">
                    <?php include 'partials/socials.php'; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="row justify-content-center justify-content-md-start">
            <div class="col-auto">
                <span>&copy; <?= date('Y'); ?> <?php bloginfo('name'); ?></span>
            </div>
        </div>
    </div>
</footer>
