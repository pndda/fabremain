<?php
/**
 * Removing dashboard widgets.
 */

add_action('admin_init', function () {
    // Remove 'Welcome' panel
    remove_action('welcome_panel', 'wp_welcome_panel');
    // Remove 'At a Glance' metabox
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
    // Remove 'Activity' metabox
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');
    // Remove 'WordPress News' metabox
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    // Remove 'Quick Draft' metabox
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    // Remove 'Pagebuilder' metabox
    remove_meta_box('so-dashboard-news', 'dashboard', 'side');
    // Remove 'Yoast' metabox
    remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'side');
    // Remove 'Gravityforms' metabox
    remove_meta_box('rg_forms_dashboard', 'dashboard', 'side');
    // Remove 'Wordfence' metabox
    remove_meta_box('wordfence_activity_report_widget', 'dashboard', 'side');
    // Remove site-health metabox
    remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
});




function custom_dashboard_widget_info()
{ ?>

    <ul>
        <li>
            <strong>Name:</strong> <?php bloginfo('name'); ?>
        </li>
        <li>
            <strong>URL:</strong> <?php bloginfo('url'); ?>
        </li>
        <li>
            <strong>Posts:</strong>
            <?= wp_count_posts()->publish; ?>
        </li>
        <li>
            <strong>Pages:</strong>
            <?= wp_count_posts('page')->publish; ?>
        </li>
        <?php
        $post_types = get_post_types(array(
            'public' => true,
            '_builtin' => false
        ), 'objects');

        foreach ($post_types as $post_type) {
            echo '<li>';
            echo '<strong>' . $post_type->labels->menu_name . ': </strong>';
            echo wp_count_posts($post_type->name)->publish;
            echo '</li>';
        }
        ?>
    </ul>

    <?php
}
