<?php
if (!defined('ABSPATH')) { exit; }

function my_toolbars( $toolbars ) {

    array_unshift($toolbars['Basic'][1], 'formatselect');

    return $toolbars;
}

add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );