<?php
/**
 * array of custom blocks
 * Just add the name of the block if you created a new one.
 */
$custom_blocks = array(
    'block-cta',
    'block-flex',
    'block-forms',
    'block-gallery',
    'block-hero',
    'block-image',
    'block-image-text',
    'block-quote',
    'block-slider',
    'block-video',
    'block-highlight',
    'block-editor',
    'block-text-columns'
);
sort($custom_blocks);

/**
 * Register blocks and scripts/styles.
 */
add_action('init', 'custom_register_acf_blocks');
function custom_register_acf_blocks(): void
{
    // Register scripts to be used in blocks. Use the handle (defined here) in block.json if a block needs it.
    // Only register the script. Enqueuing will be handled by the block.
    wp_register_script('venobox', get_template_directory_uri() . '/build/js/vendor/venobox.min.js', array(), '', true);
    wp_register_script('slick-slider', get_template_directory_uri() . '/build/js/vendor/slick.min.js', array('jquery'), '', true);

    // Use the $custom_blocks array we created at the top of the file.
    global $custom_blocks;

    // Set block folder path.
    $block_folder = __DIR__ . '/../templates/blocks/';

    // register_block_type() looks for block.json in the specified folder. Make sure it is present.
    if(is_array($custom_blocks)){
        foreach ($custom_blocks as $custom_block_name) {
            register_block_type($block_folder . $custom_block_name);
        }
    }
}

/**
 * Add custom custom category for our blocks
 */
add_filter('block_categories_all', 'custom_block_categories_all');
function custom_block_categories_all($block_categories)
{
    // Add new category to the current array of categories
    $block_categories[] = array(
        'slug' => 'custom-blocks',
        'title' => 'Blocks'
    );

    return $block_categories;
}

/**
 * Only allow our blocks to be shown in the editor.
 * We don't want the default WordPress ones to be shown.
 */
add_filter('allowed_block_types_all', 'custom_allowed_block_types', 10, 2);
function custom_allowed_block_types(): array
{
    // Use the $custom_blocks array we created at the top of the file.
    global $custom_blocks;

    // Create a new array, since we need to add 'acf/' to each name.
    $allowed_block_types = array();

    // Add 'acf/' to each block name
    foreach ($custom_blocks as $custom_block_name) {
        $allowed_block_types[] = 'acf/' . $custom_block_name;
    }

    // Return the new array
    return $allowed_block_types;
}
