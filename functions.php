<?php

add_theme_support( 'menus' );
add_theme_support( 'title-tag' );         // タイトルタグ
add_theme_support( 'post-thumbnails' );   //アイキャッチの有効化

//タイトル出力
function hum_title ( $title ) {
  if ( is_front_page() && is_home() ) {   //トップページなら
    $title = get_bloginfo( 'name', 'display' );
  } elseif ( is_singular() ) {   //シングルページなら
    $title = single_post_title( '', false );
  }
  return $title;
}
add_filter( 'pre_get_document_title', 'hum_title' );

// 不要なjQueryを削除する
function my_scripts() {
  wp_deregister_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

// CSS, JavaScript読み込み
function my_enqueue_styles() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script( 'js', get_template_derectory_uri() . '/js/nav.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );

?>