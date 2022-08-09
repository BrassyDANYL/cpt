<?php

add_action('wp_enqueue_scripts', 'cpt_scripts');
function cpt_scripts()
{
    wp_enqueue_style('cpt-style', get_stylesheet_uri());
    wp_enqueue_style('animatecss', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('dstylecss', get_template_directory_uri() . '/assets/css/dstyle.css');
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('slickjs', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery']);
    wp_enqueue_script('wowjs', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);
	wp_enqueue_script( 'my-wow', get_stylesheet_directory_uri() . '/assets/js/my-wow.js', array( 'wow' ), null, true );
	wp_enqueue_script('cpt-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
    wp_enqueue_script('cpt-dscripts', get_template_directory_uri() . '/assets/js/dscript.js', array(), null,true);
}
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
function wow_init() { ?>
<script type="text/javascript">
new WOW().init();
</script>
<?php }


function author_post_type() {

	register_post_type('authors', array(
		'show_in_rest' => true,
		'supports' => array('title','thumbnail'),
		'public' => true,
		'labels' => array(
			'name' => 'Authors',
			'add_new_item' => 'Add Author',
			'edit_item' => 'Edit Author',
			'all_items' => 'All Authors',
			'singular_name' => 'Authors'
		),
		'menu_icon' => 'dashicons-businessman',
	));
}
add_action('init', 'author_post_type');

