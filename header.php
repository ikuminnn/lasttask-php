<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">  //言語設定
  <head>
    <meta charset="utf-8">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- viewport設定 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?> /img/favicon.png">
    <!-- css -->
    <link rel="stylesheet" href="/style.css">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> class="u-container">
    <header class="l-header">
      <h1 class="c-title__header"><a href="<?php echo sec_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <?php get_search_form(); ?>
      <!-- <div class="c-form__mark">
        <input type="search" name="search" class="c-form__keyword">
        <input type="submit" name="submit" value="検索" class="c-form__button">
      </div> -->
    </header>
