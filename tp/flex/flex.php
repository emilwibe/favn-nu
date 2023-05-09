<?php if (!defined('ABSPATH')) { exit; } ?>

<?php if ( have_rows( 'favn_flexible_content' ) ) : ?>

    <div class="flexible-content">
<?php
    while ( have_rows( 'favn_flexible_content' ) ) {
        the_row();

        if ( get_row_layout() == 'favn_flex_layout_wysiwyg' ) {
            get_template_part( 'tp/flex/flex-wysiwyg' );
        } elseif ( get_row_layout() == 'favn_flex_layout_img' ) {
            get_template_part( 'tp/flex/flex-img' );
        } elseif ( get_row_layout() == 'favn_flex_layout_slider' ) {
            get_template_part( 'tp/flex/flex-slider' );
        } elseif ( get_row_layout() == 'favn_flex_layout_person' ) {
            get_template_part( 'tp/flex/flex-persongalleri' );
        }
    }
?>

    </div><!--/.flexible-content-->
<?php endif; ?>