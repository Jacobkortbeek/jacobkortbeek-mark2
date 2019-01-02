<?php

  add_theme_support( 'post-thumbnails', array( 'post' ) );

function create_posttype() {

  register_post_type( 'design',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Design' ),
              'singular_name' => __( 'Design' ),
              'menu_name'           => __( 'Design')
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'Design'),
      )
  );
}
add_action( 'init', 'create_posttype' );

  function wpt_theme_styles() {
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Major+Mono+Display' );
    wp_enqueue_style( 'fa-icon', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'fullpage', get_template_directory_uri() . '/css/fullpage.css' );
    wp_enqueue_style( 'material', get_template_directory_uri() . '/css/material.min.css'   );
    wp_enqueue_style( 'materialize', get_template_directory_uri() . '/css/materialize.min.css'   );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css'   );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

  function wpt_theme_js() {
    wp_enqueue_script( 'fulpage', get_template_directory_uri() . '/js/fullpage.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'material', get_template_directory_uri() . '/js/material.min.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'materialize', get_template_directory_uri() . '/js/materialize.min.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'scrollFlow', get_template_directory_uri() . '/js/scrolloverflow.js', array('jquery'), ' ', true );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );
?>
