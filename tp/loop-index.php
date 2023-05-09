<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <?php
// IMAGE SLIDER FROM GALLERY FRONT PAGE
$images = get_field('favn_gallery_index');
$size = 'full';

if ($images) : ?>



    <section class="splide home-slider" data-splide='{"type":"loop","autoplay":"<?php echo (String) get_field( 'favn_slider_autoplay' ) ? 'true' : 'false'; ?>","pagination":"false","width":"100%","height":"auto"}'>
        <div class="splide__track">
            <ul class="splide__list">

                <?php
                foreach ($images as $image_id) {
                    echo '<li class="splide__slide">' . wp_get_attachment_image($image_id, $size) . '</li>';
                }
                ?>

            </ul>
        </div>
    </section>

<?php endif; //$images 
?>

    <?php endwhile; //LOOP 
    ?>

<?php endif; //LOOP 
?>