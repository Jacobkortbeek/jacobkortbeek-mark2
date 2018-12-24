<?php

  function wpt_theme_styles() {
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Major+Mono+Display' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.scss'   );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.scss' );
    wp_enqueue_style( 'fullpage', get_template_directory_uri() . '/assets/css/fullpage.scss' );
    wp_enqueue_style( 'material', get_template_directory_uri() . '/assets/css/material.min.scss'   );
    wp_enqueue_style( 'materialize', get_template_directory_uri() . '/assets/css/materialize.min.scss'   );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

  function wpt_theme_js() {
    wp_enqueue_script( 'fulpage', get_template_directory_uri() . '/assets/js/fullpage.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/assets/js/function.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/assets/js/jquery.matchHeight.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'material', get_template_directory_uri() . '/assets/js/material.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'materialize', get_template_directory_uri() . '/assets/js/materialize.min.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'scrollFlow', get_template_directory_uri() . '/assets/js/scrolloverflow.js', array('jquery'), ' ', true );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );
?>
