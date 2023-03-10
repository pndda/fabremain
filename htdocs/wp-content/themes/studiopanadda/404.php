<?php
/**
 * @var $spacer (calculated in templates/blocks/partials/spacing.php)
 */
$spacer_top    = true;
$spacer_bottom = true;
include "templates/blocks/partials/spacing.php";
?>
<section class="c-page<?= $spacer; ?>">
	<div class="container">
        <div class="row">
            <div class="col">
                <h1><?= __('Oeps, Error 404', 'studiopanadda'); ?></h1>
                <p><?= __('Sorry, deze pagina is helaas niet meer beschikbaar', 'studiopanadda') ?></p>
                <a href="<?= get_home_url(); ?>" class="btn btn-primary"><?= __('Terug naar homepagina', 'studiopanadda'); ?></a>
            </div>
        </div>
	</div>
</section>
