<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- viewport設定 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo sec_url(get_theme_file_uri('img/favicon.png')); ?>">
    <!-- css -->
    <link rel="stylesheet" href="/style.css">

    <?php wp_head(); ?>
  </head>

  <body class="u-container">
    <header class="l-header">
      <h1 class="c-title__header"><a href="<?php echo sec_url( home_url() ); ?>">Hamburger</a></h1>
      <div class="c-form__mark">
        <input type="search" name="search" class="c-form__keyword">
        <input type="submit" name="submit" value="検索" class="c-form__button">
      </div>
    </header>
