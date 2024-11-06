<?php

add_theme_support( 'menus' );
add_theme_support( 'title-tag' );         // タイトルタグ
add_theme_support( 'post-thumbnails' );   //アイキャッチの有効化

//タイトル出力
function hum_title ( $title ) {
  if ( is_frongitt_page() && is_home() ) {   //トップページなら
    $title = get_bloginfo( 'name', 'display' );
  } elseif ( is_singular() ) {   //シングルページなら
    $title = single_post_title( '', false );
  }
  return $title;
}
add_filter( 'pre_get_document_title', 'hum_title' );

// CSS, JavaScript読み込み
function my_enqueue_styles() {
  wp_enqueue_style( 'ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all' );
  wp_enqueue_style( 'style', get_stylesheet_uri(), array( 'ress' ), false, 'all' );
  wp_deregister_script( 'jquery' );   //不要なjQueryを削除する
  wp_enqueue_script( 'js', get_theme_file_uri( 'js/nav.js' ), array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );

/* ページネーション ~~~~~~~~~~~~~~~~~~~
* $pages  : 総ページ数
* $paged  : 現在のページ
* $range  : 左右に何ページ表示するか（レンジ：範囲）
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
function pagenation ( $pages = '', $range = 5 ) {
  $showitems = ( $range * 1) + 1;    //表示するページ数（6ページ）
  global $paged;            //現在のページ値
  if ( empty ( $paged )) {  //デフォルトページ
    $paged = 1;
  }

  if ( $pages == '' ) {
    global $wp_query;     //前ページ数を取得
    $pages = $wp_query -> max_num_pages;    //ページが複数あるかチェックする値
    if ( !$pages ) {      //取得できなければ1をセットする
      $pages = 1;
    }
  }
  //2ページ以上ある場合に表示する
  if ( 1 != $pages ) {
    echo "<div class=\"page-count\">" . $paged . "/" . $pages . "</div>";   //現在のページを表示「今のページ/総ページ」
    echo "<ul class=\"pagenation\">";
    if ( $paged > $pages + 1 ) {    //最初へ
      echo "<li class=\"first\"><a href='" . get_pagenum_link( 1 ) . "'>最初へ</a></li>";
    }
    if ( $paged > 1 ) {             //前へ
      echo "<li class=\"prev\"><a href='" . get_pagenum_link( $paged - 1 ) ."'>前へ</a></li>";
    }

    //ページ番号を表示
    for ( $i = 1; $i <= $pages; $i++ ) {  //ループ処理 $iの1から始める;$iが総ページ以下の時は続ける;ループが来る度に$1に1を足す
      if ( $i <= $paged + $renge && $i >= $paged - $renge ) {   //$iが、表示しているページと今のページ数以下、かつ、表示ページのうちの今のページ数以上のときはtrue
        if ( $paged == $i ) {             //今のページ数が$iと等しいか
          echo "<li class=\"current\">" . $i . "</li>";  //等しい時に表示
        } else {
          echo "<li><a href='".get_pagenum_link( $i ). "'>" . $i . "</a></li>"; //等しくない時に表示
        }
      }
    }

    if ( $paged < $pages ) {        //次へ＿今のページが総ページより小さい数字の時
      echo "<li class=\"next\"><a href='" .get_pagenum_link( $paged + 1 ). "'>次へ</a></li>";
    }
    if ( $paged + $range < $pages ) { //最後へ＿今のページを含めた表示数が総ページより小さい時（最後のページに当たる数字が表示されていたら出ない？
      echo "<li class=\"last\"><a href='" .get_pagenum_link( $pages ). "'>最後へ</a></li>";
    }

    echo "</ul>";
  }
}

?>

<!-- 上記のコードで以下の構造のHTMLが出力される。メモ。
<div class="page-count">
  <span class="result">1</span>/<span class="total">12</span>
</div>
<ul class="pagenation">
  <li class="first"><a href="#">最初へ</a></li>
  <li class="prev"><a href="#">前へ</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li class="current">4</li>
  <li><a href="#">5</a></li>
  <li><a href="#">6</a></li>
  <li class="next"><a href="#">次へ</a></li>
  <li class="last"><a href="#">最後へ</a></li>
</ul> -->