<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<?php get_header(); ?>

<h1>Rådgivning</h1>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php if (has_post_thumbnail()) : ?>

            <article class="grid-2-col archive-list">

                <a href="<?php echo get_the_permalink(); ?>">

                    <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    echo wp_get_attachment_image($thumbnail_id, 'large', false, ['class' => 'load-on-load', 'onload' => 'loadImageonLoad(this)']);
                    ?>

                </a>

        <?php else : ?>

            <article class="archive-list">
        <?php endif; ?>

                <div>
                    <h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>

            </article>

            <?php endwhile; ?>

        <?php endif; ?>

        <?php get_footer(); ?>