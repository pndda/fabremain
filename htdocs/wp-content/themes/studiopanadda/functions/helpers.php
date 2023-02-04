<?php

/**
 * Modify TinyMCE editor to remove H1.
 */
function tiny_mce_remove_unused_formats($init)
{
    // Add block format elements you want to show in dropdown
    $init['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Address=address;Pre=pre';
    return $init;
}
add_filter('tiny_mce_before_init', 'tiny_mce_remove_unused_formats');


/**
 * Remove comments from backend menu
 */
add_action('admin_menu', 'remove_comment_menu');
function remove_comment_menu()
{
    remove_menu_page('edit-comments.php');
}

add_action('wp_before_admin_bar_render', 'remove_comments_topbar');
function remove_comments_topbar()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}

add_action('init', 'remove_comment_support', 100);
function remove_comment_support()
{
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
}

/**
 * Disable the emoji's
 */
function disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 */
function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

/**
 * Delete this if you don't want to use the embed options in Wordpress
 */
function my_deregister_scripts()
{
    wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');

/**
 * Hook to reflush permalinks every hour
 */
add_action('custom_permalink_flush', 'custom_permalink_flush_func');
function custom_permalink_flush_func()
{
    flush_rewrite_rules();
}
if (!wp_next_scheduled('custom_permalink_flush')) {
    wp_schedule_event(time(), 'hourly', 'custom_permalink_flush');
}
add_action('wp_ajax_custom_permalink_flush_func', 'custom_permalink_flush');
add_action('wp_ajax_nopriv_custom_permalink_flush_func', 'custom_permalink_flush');

/**
 * Put YOAST SEO at bottom (ACF is then directly beneath content)
 */
add_filter('wpseo_metabox_prio', 'custom_filter_yoast_seo_metabox');
function custom_filter_yoast_seo_metabox()
{
    return 'low';
}



/**
 * Add wrapper and bootstrap classes to tables inside tinyMCE
 */
function wp_bootstrap_responsive_table($content)
{
    $content = str_replace(['<table', '</table>'], ['<div class="table-responsive"><table class="table table-bordered table-hover"', '</table></div>'], $content);
    return $content;
}
add_filter('the_content', 'wp_bootstrap_responsive_table');

/**
 * Import function for SVG
 */
function custom_sprite($icon_name): string
{
    return get_stylesheet_directory_uri() . '/build/sprite/sprite.svg' . '#' . $icon_name;
}
