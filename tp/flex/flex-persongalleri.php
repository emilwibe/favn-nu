<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<?php if (have_rows('favn_flex_repeat_person')) : ?>

    <section class="flex-mod flex-person-gallery">

        <?php while (have_rows('favn_flex_repeat_person')) : the_row(); ?>

            <article class="flex-person">

                <?php
                $personObj = get_sub_field('favn_flex_person');
                $personImgID = get_post_thumbnail_id($personObj->ID);
                echo wp_get_attachment_image($personImgID, 'large', false, ['class' => 'load-on-load', 'onload' => 'loadImageonLoad(this)']);
                ?>

                <ul>
                    <li class="person-title"><?php echo get_field('favn_person_title', $personObj->ID); ?></li>
                    <li class="person-name"><?php echo $personObj->post_title; ?></li>
                    <li href="tel:<?php echo get_field('favn_person_phone', $personObj->ID); ?>" class="person-phone">t: <?php echo get_field('favn_person_phone', $personObj->ID); ?></li>
                    <li href="mailto:<?php echo get_field('favn_person_email', $personObj->ID); ?>" class="person-email">m: <?php echo get_field('favn_person_email', $personObj->ID); ?></li>
                </ul>
            </article>

        <?php endwhile; ?>

    </section><!--/.flex-mod.flex-person-gallery-->

<?php endif; ?>