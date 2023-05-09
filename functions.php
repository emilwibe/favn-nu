<?php
if (!defined('ABSPATH')) { exit; }

get_template_part( 'functions/add_theme_support' );

get_template_part( 'functions/remove_default' );

get_template_part( 'functions/enqueues' );

get_template_part( 'functions/navigation' );

get_template_part( 'functions/filters' );

// CUSTOM POST TYPES
get_template_part( 'functions/cpt-arkitektur' );
get_template_part( 'functions/cpt-raadgivning' );
get_template_part( 'functions/cpt-person' );

get_template_part( 'functions/acf_wysiwyg' );