<?php

function load_scripts(){
 wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
 wp_enqueue_style( 'fancybox-jquery', get_template_directory_uri() . '/css/jquery.fancybox.css');
 wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
 wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');
 wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css');
 wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

  //JS FILES
  wp_enqueue_script( 'jquery-two', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true);
  wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 'null', true);
  wp_enqueue_script( 'fancybox-jq', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), 'null', true);  
  wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 'null', true);
  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), 'null', true);
  wp_enqueue_script( 'retina', get_template_directory_uri() . '/js/retina.min.js', array(), 'null', true);
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), 'null', true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), 'null', true);
}
add_action ( 'wp_enqueue_scripts', 'load_scripts' );

// sidebars

add_action( 'widgets_init', 'minifolio_sidebars' );
function minifolio_sidebars(){
  register_sidebar(
    array(
      'name' => 'banner',
      'id' => 'banner',
      'description' => 'Type any text here',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name' => 'about me',
      'id' => 'about-me',
      'description' => 'Type any text here too',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name' => 'About me - second area',
      'id' => 'about-me2',
      'description' => 'drag your widgets here',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name' => 'Hire me',
      'id' => 'hire-me',
      'description' => 'drag your widgets here',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name' => 'Contact',
      'id' => 'contact',
      'description' => 'drag your widgets here',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    )
  );
}

register_nav_menus(
  array(
    'primary' => 'Main Menu',
    'social' => 'Social Media'
  )
);