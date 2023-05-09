<?php
if (!defined('ABSPATH')) { exit; }

function person_post_type()
{

    $labels = array(
        'name'                  => _x('Person', 'Post Type General Name', 'favn-nu'),
        'singular_name'         => _x('Person', 'Post Type Singular Name', 'favn-nu'),
        'menu_name'             => __('Person', 'favn-nu'),
        'name_admin_bar'        => __('Person', 'favn-nu'),
        'archives'              => __('Person arkiv', 'favn-nu'),
        'attributes'            => __('Person Attributes', 'favn-nu'),
        'all_items'             => __('Al Person', 'favn-nu'),
        'add_new_item'          => __('Tilføj Ny Person', 'favn-nu'),
        'add_new'               => __('Tilføj Ny', 'favn-nu'),
        'new_item'              => __('Ny', 'favn-nu'),
        'edit_item'             => __('Rediger', 'favn-nu'),
        'update_item'           => __('Opdater', 'favn-nu'),
        'view_item'             => __('Vis', 'favn-nu'),
        'view_items'            => __('Vis', 'favn-nu'),
        'search_items'          => __('Søg', 'favn-nu'),
        'not_found'             => __('Ingen fundet', 'favn-nu'),
        'not_found_in_trash'    => __('Ingen fundet i papirkurv', 'favn-nu'),
        'featured_image'        => __('Fremhævet billede', 'favn-nu'),
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
        'label'                 => __('Person', 'favn-nu'),
        'description'           => __('Person-porfolio', 'favn-nu'),
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
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('person', $args);
}

add_action('init', 'person_post_type', 0);