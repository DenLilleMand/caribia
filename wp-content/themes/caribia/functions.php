<?php

include_once('widgets/intro.php');
require get_stylesheet_directory() . '/inc/custom-header.php';

function caribia_enqueue_styles()
{
    $parent_style = 'parent-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
    wp_enqueue_style('caribia-css', get_stylesheet_directory_uri() . '/css/caribia.css');
    wp_enqueue_style('fontawesome-css', get_stylesheet_directory_uri() . '/css/fontawesome/css/font-awesome.css');
    wp_enqueue_style('introwidget-css', get_stylesheet_directory_uri() . '/css/introwidget.css');
    wp_enqueue_style('post-excerpt-css', get_stylesheet_directory_uri() . '/css/post-excerpt.css');
    wp_enqueue_style('footer-css', get_stylesheet_directory_uri() . '/css/footer/css/footer-distributed-with-address-and-phones.css');
    wp_enqueue_script('caribia-js', get_stylesheet_directory_uri() . '/js/caribia.js', array('jquery'),9);
    wp_enqueue_script('facebook-sdk-js', get_stylesheet_directory_uri() . '/js/facebook-sdk.js');
	wp_enqueue_style('header-css', get_stylesheet_directory_uri() . '/css/header.css');
	wp_enqueue_style('post-css', get_stylesheet_directory_uri() . '/css/post.css');
	wp_enqueue_script('insert_image_into_navbar-js', get_stylesheet_directory_uri() . '/js/insert_image_into_navbar.js');
	wp_enqueue_style('nisarg-overwrite-css',get_stylesheet_directory_uri() . '/css/nisarg-overwrites.css');
	$dataToBePassed = array(
  	  'image_url'            => get_stylesheet_directory_uri() . "/images/logo.png"
	);
	wp_localize_script( 'insert_image_into_navbar-js', 'php_vars', $dataToBePassed );
}



function caribia_register_widgets() {
    register_widget('Intro_Widget');
}

function load_wp_media_files() {
    wp_enqueue_media();
}

add_action('wp_enqueue_scripts', 'caribia_enqueue_styles', 12);
add_action('admin_enqueue_scripts', 'caribia_enqueue_styles');
add_action('widgets_init', 'caribia_register_widgets');
add_action( 'admin_enqueue_scripts', 'load_wp_media_files' );



function nisarg_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Nisarg, use a find and replace
	 * to change 'nisarg' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'nisarg', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270);
	add_image_size( 'nisarg-full-width', 1038, 576, true );
	
	
	function register_nisarg_menus() {
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Top Primary Menu', 'nisarg' )
		) );
	}

	add_action( 'init', 'register_nisarg_menus' );
	
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	
	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery'
	) );

	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nisarg_custom_background_args', array(
		'default-color' => 'f5f5f5',
		'default-image' => '',
	) ) );
}

