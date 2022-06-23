
<?php

add_action('wp_enqueue_scripts', 'cpt_scripts');
function cpt_scripts()
{
    wp_enqueue_style('cpt-style', get_stylesheet_uri());
    wp_enqueue_script('animatecss', get_template_directory_uri() . '/assets/css/animate.css');
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('slickjs', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery']);
    wp_enqueue_script('wowjs', get_template_directory_uri() . '/assets/js/wow.min.js', array('wow', null, true));
    wp_enqueue_script('cpt-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
}
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
