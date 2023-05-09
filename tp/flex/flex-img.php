<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<div class="flex-mod flex-mod-img">
    <figure>
        <?php

        $img_id = get_sub_field('favn_flex_img');
        $img_data = get_post( $img_id );

        echo wp_get_attachment_image($img_id, 'full', false, ['class' => 'load-on-load', 'onload' => 'loadImageonLoad(this)']);
        ?>

        <?php if ( $img_data->post_excerpt ) : ?>

        <figcaption><?php echo $img_data->post_excerpt; ?></figcaption>

        <?php endif; ?>

    </figure>
</div><!--/.flex-mod.flex-mod-img-->