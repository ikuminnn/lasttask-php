<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' ); //アイキャッチ画像

// CSS読み込み
function my_enqueue_styles() {
  wp_enqueue_style( 'ress', '//unpkg.com/ress/dist/ress.min.css', array() );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
  wp_enqueue_script( 'resetJs', get_template_derectory_uri() . './js/jquery-3.7.1.min.js', array() );
  wp_enqueue_script( 'js', get_template_derectory_uri() . './js/nav.js', array() );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );


?>