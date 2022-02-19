<?php

/**
 * Register Stylesheets.
 */
function load_css(){
    
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), wp_get_theme()->get('Version'), 'all');   
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css', array(), wp_get_theme()->get('Version'), 'all');   
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), wp_get_theme()->get('Version'), 'all');   
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get('Version'), 'all');   
  	
}
add_action('wp_enqueue_scripts','load_css');


/**
 * Register Javascript.
 */
function load_js()
{	
		wp_enqueue_script('jquery');  
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), wp_get_theme()->get('Version'), true);
        wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), wp_get_theme()->get('Version'), true);
        wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array(), wp_get_theme()->get('Version'), true);
        wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get('Version'), true);
		
}
add_action('wp_enqueue_scripts', 'load_js');


/**
 * Theme Options.
 */
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


/**
 * Custom Image Sizes
 */
set_post_thumbnail_size( 250, 250);
add_image_size('blog-large', 800, 300, false);
add_image_size('blog-small', 300, 200, true);


/**
 * Register Menu.
 */
function register_menus() {
  register_nav_menus(
    array(
        'primary' => esc_html__('Primary menu'),
        'footer'  => __('Secondary menu'),
    )
  );
}
add_action( 'init', 'register_menus' );


/**
 * Register Sidebar.
 */
function my_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__('Blog Sidebar'),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'twentytwentytwo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'my_widgets_init' );


/**
 * innerpage body class.
 */
add_filter( 'body_class', 'sk_body_class' );
function sk_body_class( $classes ) {
	if ( ! is_front_page() ) {
		$classes[] = 'subpage';
	}

	return $classes;
}

/**
 * ACF Options page.
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'General Info',
		'menu_title'	=> 'General Info',
		'menu_slug' 	=> 'general-info',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-edit'
	));
	
}