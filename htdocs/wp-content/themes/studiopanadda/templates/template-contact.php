<?php
/* Template Name: Template - Contact */

$info_title = get_field('info_title', 'options');
$street = get_field('info_street_number', 'options');
$postal = get_field('info_postal_code', 'options');
$city = get_field('info_city', 'options');

$fax = get_field('info_fax', 'options');
$vat = get_field('info_vat', 'options');

$phone = get_field('info_phone', 'options');
$email = get_field('info_email', 'options');

$team = get_field('team', 'options');
?>

<?php get_template_part('templates/includes/hero'); ?>


<section class="c-contact text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 my-4 my-lg-3">
                <h3 class="h5"><?= $info_title; ?></h3>
                <p>
                    <?= $street ?> <br>
                    <?= $postal ?> <?= $city; ?> <br>
                </p>
                tel.: <a href="tel:<?= $phone; ?>"><?= $phone; ?></a>
                <p><?= $vat; ?></p>
            </div>
            <div class="col-md-6 col-lg-4 my-4 my-lg-3">
                <h3 class="h5"><?= __('GENERAL ENQUIRIES', 'studiopanadda'); ?></h3>
                <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
            </div>
            <div class="col-md-6 col-lg-4 my-4 my-lg-3">
                <h3 class="h5"><?= __('TEAM', 'studiopanadda'); ?></h3>
                <?php if ($team): ?>
                    <?php foreach ($team as $member): ?>
                        <?php
                        $name = $member['name'];
                        $title = $member['title'];
                        $email = $member['email'];
                        $tel = $member['tel'];
                        ?>
                        <div class="mt-3 mb-4 mb-lg-5">
                            <?php if ($name): ?>
                                <h6><?= $member['name']; ?></h6>
                            <?php endif; ?>
                            <?php if ($title): ?>
                                <span><?= $member['title']; ?></span>
                            <?php endif; ?>
                            <?php if ($email): ?>
                                <a href="mailto:<?= $member['email']; ?>"><?= $member['email']; ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

