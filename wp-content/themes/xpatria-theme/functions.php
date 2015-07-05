<?php

add_theme_support( 'menus', 'post-thumbnails' );

function register_theme_menus() {
  register_nav_menus( 
    array(
      'primary-menu' => __('Primary Menu'),
      'social-menu' => __('Social Media Menu')
    ) 
  );
}

add_action( 'init', 'register_theme_menus' );

function xpatria_theme_styles() {
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'xpatria_theme_styles' );

function xpatria_theme_js() {
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', false );
}

add_action( 'wp_enqueue_scripts', 'xpatria_theme_js' );

?>