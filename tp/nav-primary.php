<?php
if (!defined('ABSPATH')) { exit; }

wp_nav_menu(array(
    'container_id' => 'nav-primary',
    'container_class' => 'primary is-hidden',
    'theme_location' => 'primary',
    'container' => 'nav',
    'items_wrap' => '<ul>%3$s</ul>'
));
?>
<button id="nav-toggle">Menu</button>