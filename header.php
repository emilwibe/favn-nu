<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        /**
         * Fades images in on load to prevent curtain load
         *
         * @param   target    References the element / img tag self
         *
         * @return  void
         */
        function loadImageonLoad(target) {
            target.style.animationPlayState = "running";
            console.log(target);
        }
    </script>


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="l-wrapper">
        <header class="primary">
            <a href="<?php echo get_site_url(); ?>" class="logo-link">

                <?php get_template_part('assets/logo/favn-logo'); ?>

            </a>

            <?php get_template_part('tp/nav-primary'); ?>

        </header>

        <main>