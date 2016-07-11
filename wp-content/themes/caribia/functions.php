<?php

include_once('widgets/intro.php');



function caribia_enqueue_styles()
{
    $parent_style = 'parent-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
    wp_enqueue_style('caribia-css', get_stylesheet_directory_uri() . '/css/caribia.css');
    wp_enqueue_style('fontawesome-css', get_stylesheet_directory_uri() . '/css/fontawesome/font-awesome.css');
    wp_enqueue_script('caribia-js', get_stylesheet_directory_uri() . '/js/caribia.js', array('jquery'));
    wp_enqueue_style('footer-css', get_stylesheet_directory_uri() . '/css/footer/css/footer-distributed-with-address-and-phones.css');

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