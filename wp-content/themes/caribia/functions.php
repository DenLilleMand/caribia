<?php

add_action( 'wp_enqueue_scripts', 'caribia_enqueue_styles', 12);
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


