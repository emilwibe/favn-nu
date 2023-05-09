<?php
if (!defined('ABSPATH')) {
    exit;
}

//CUSTOM POST TYPE
// Register Custom Post Type
function arkitektur_post_type()
{

    $labels = array(
        'name'                  => _x('Arkitektur', 'Post Type General Name', 'favn-nu'),
        'singular_name'         => _x('Arkitektur', 'Post Type Singular Name', 'favn-nu'),
        'menu_name'             => __('Arkitektur', 'favn-nu'),
        'name_admin_bar'        => __('Arkitektur', 'favn-nu'),
        'archives'              => __('Arkitektur arkid', 'favn-nu'),
        'attributes'            => __('Arkitektur Attributes', 'favn-nu'),
        'parent_item_colon'     => __('Parent Arkitektur', 'favn-nu'),
        'all_items'             => __('Al Arkitektur', 'favn-nu'),
        'add_new_item'          => __('Tilføj Ny Arkitektur', 'favn-nu'),
        'add_new'               => __('Tilføj Ny', 'favn-nu'),
        'new_item'              => __('Ny Arkitektur', 'favn-nu'),
        'edit_item'             => __('Rediger Arkitektur', 'favn-nu'),
        'update_item'           => __('Updater Arkitektur', 'favn-nu'),
        'view_item'             => __('Se Arkitektur', 'favn-nu'),
        'view_items'            => __('Se Arkitektur', 'favn-nu'),
        'search_items'          => __('Søg Arkitektur', 'favn-nu'),
        'not_found'             => __('Ikke fundet', 'favn-nu'),
        'not_found_in_trash'    => __('Ikke fundet i papirkurv', 'favn-nu'),
        'featured_image'        => __('Featured Image', 'favn-nu'),
        'set_featured_image'    => __('Vælg fremhævet billede', 'favn-nu'),
        'remove_featured_image' => __('Fjern fremhævet billede', 'favn-nu'),
        'use_featured_image'    => __('Brug som fremhævet billede', 'favn-nu'),
        'insert_into_item'      => __('Insert into item', 'favn-nu'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'favn-nu'),
        'items_list'            => __('Items list', 'favn-nu'),
        'items_list_navigation' => __('Items list navigation', 'favn-nu'),
        'filter_items_list'     => __('Filter items list', 'favn-nu'),
    );
    $args = array(
        'label'                 => __('Arkitektur', 'favn-nu'),
        'description'           => __('Arkitektur-porfolio', 'favn-nu'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'show_in_rest'          => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('arkitektur', $args);
}
add_action('init', 'arkitektur_post_type', 0);
