<?php

function practice_script_enqueue() {
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/practice.css', array(), '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/practice.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'practice_script_enqueue');

function practice_theme_setup(){
  add_theme_support( 'menus' );
  register_nav_menu( 'primary', 'Primary Header Navigation' );
  register_nav_menu( 'secondary', 'Footer Navigation' );
}
add_action( 'init', 'practice_theme_setup' );

// Adding wordpress functionalities
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
