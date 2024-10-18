<?php

<<<<<<< HEAD
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );  //アイキャッチの有効化

// 不要なjQueryを削除する
function my_scripts() {
  wp_deregister_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

// CSSファイル読み込み
function my_enqueue_styles() {
  wp_enqueue_style( 'ress', '//unpkg.com/ress/dist/ress.min.css', array() );
  wp_enqueue_style( 'style', get_stylesheet_uri(), array( 'ress' ) );
  wp_enqueue_script( 'js', get_template_derectory_uri() . '/js/nav.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );

=======
>>>>>>> main

?>