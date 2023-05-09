<?php
if (!defined('ABSPATH')) {
    exit;
}

function ew_enqueues()
{
    if (!is_user_logged_in()) {
        wp_enqueue_style('core-styles', get_template_directory_uri() . '/dist/css/core.min.css', '', '');
        wp_enqueue_script('footer-scripts', get_template_directory_uri() . '/dist/js/scripts-footer.min.js', '', null, true);
    } else {
        wp_enqueue_style('core-styles', get_template_directory_uri() . '/dist/css/core.css', '', '');
        wp_enqueue_script('footer-scripts', get_template_directory_uri() . '/dist/js/scripts-footer.js', '', null, true);
    }
}

add_action('wp_enqueue_scripts', 'ew_enqueues');

/**
 * Registers an editor stylesheet for the theme.
 */
function ew_theme_add_editor_styles()
{
    add_editor_style('dist/css/editor_styles.css');
}
add_action('admin_init', 'ew_theme_add_editor_styles');
