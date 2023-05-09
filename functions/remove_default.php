<?php

if (!defined('ABSPATH')) { exit; }

// REMOVES CSS COLOR VARIABLES FOR GUTENBERG
function remove_global_css() {
    // Paste the code here
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
add_action('init', 'remove_global_css');