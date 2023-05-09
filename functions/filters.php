<?php
if (!defined('ABSPATH')) { exit; }

add_filter('the_excerpt', 'custom_fields_2_excerpt');

function custom_fields_2_excerpt( $excerpt ) {
    if ( have_rows( 'favn_flexible_content' ) ) :
        while ( have_rows( 'favn_flexible_content' ) ) : the_row();

            if( get_row_layout() == 'favn_flex_layout_wysiwyg' ) {
                $excerpt = $excerpt . get_sub_field( 'favn_flex_wysiwyg' );
                $excerpt = wp_trim_words( $excerpt , 50 ); 
            }
        endwhile;
    endif;

    reset_rows();
    return $excerpt;
}