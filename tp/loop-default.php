<?php if (!defined('ABSPATH')) { exit; } ?>

<?php if( have_posts() ) : ?>

    <h1><?php the_title(); ?></h1>

    <?php while( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'tp/flex/flex' ); ?>

    <?php endwhile; //LOOP ?>

<?php endif; //LOOP ?>