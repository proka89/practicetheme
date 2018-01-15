<?php
//Include Scripts
function practice_script_enqueue() {
  //css
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/practice.css', array(), '1.0.0', 'all');
  //js
  wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/practice.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'practice_script_enqueue');

//Activate menus
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
// Post Formats
add_theme_support( 'post-formats', array('aside', 'image', 'video') );

// Sidebar function
function practice_widget_setup() {
  register_sidebar(
    array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	      'after_widget'  => '</aside>',
	      'before_title'  => '<h2 class="widgettitle">',
	      'after_title'   => '</h2>'
    )
  );
}

add_action( 'widgets_init','practice_widget_setup' );
