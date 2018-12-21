<?php

  function wpt_theme_styles() {
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Major+Mono+Display' );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );
?>
