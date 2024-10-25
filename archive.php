<?php get_header(); ?>

<?php get_sidebar(); ?>

    <!-- main -->
    <main class="u-main__container">
      <!-- p-fv　ファーストビュー -->
      <section class="l-fv l-fv__bg">
        <div class="l-fv__content">
          <h2 class="c-title__archive">Menu</h2>
          <p class="c-text-archive">チーズバーガー</p>
        </div>
      </section>
      <!-- p-theme　takeout/eatin -->
      <article class="p-theme-archive">
        <div class="c-text__theme">
          <h2>小見出しが入ります。</h2>
          <p>チーズバーガーについてのこだわりです。こういったものを大切にしています。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <section class="p-lists">
          <?php $args = array(
            'posts_per_page' => 8         //読み込む記事数
            );
          $posts = get_posts( $args );    //配列で指定した内容で取得
          foreach( $posts as $post ):     //ループ処理で1件ずつ表示
            setup_postdate( $post ); ?>     <!-- the_titleなどで記事情報を表示できるようにする -->
          <figure class="p-list">
            <img class="img-list" src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="チーズバーガーの写真">
            <figcaption class="c-caption">
              <h3><?php the_title(); ?></h3>
              <h4>こだわり</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <p><a class="c-button__menu" href="<?php the_permalink(); ?>">詳しく見る</a></p>
            </figcaption>
          </figure>
          <?php endforeach; ?>
          <?php wp_reset_postdate(); ?>         <!-- 使用データをリセットして取得処理終了 -->


          <figure class="p-list">
            <img src="./img/menu-ham.jpg" alt="ダブルチーズバーガーの写真">
            <figcaption class="c-caption">
              <h3>ダブルチーズバーガー</h3>
              <h4>こだわり</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <p><a class="c-button__menu" href="#">詳しく見る</a></p>
            </figcaption>
          </figure>
          <figure class="p-list">
            <img src="./img/menu-ham.jpg" alt="スペシャルチーズバーガーの写真">
            <figcaption class="c-caption">
              <h3>スペシャルチーズバーガー</h3>
              <h4>こだわり</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <p><a class="c-button__menu" href="#">詳しく見る</a></p>
            </figcaption>
          </figure>
        </section>
      </article>
      <!-- ページナビ　-->
      <div class="p-pagenav">
        <p>page 1/10</p>
        <div class="c-pagenav__front"><a href="#" rel="前">前へ</a></div>
        <ul class="c-pagenav__list">
          <span><a class="c-pagenav__prev" href="#" rel="前"></a></span>
          <li><a class="u-pagenav__list-border" href="#">1</a></li>
          <li><a class="c-pagenav__list-border" href="#">2</a></li>
          <li><a class="c-pagenav__list-border" href="#">3</a></li>
          <li><a class="c-pagenav__list-border" href="#">4</a></li>
          <li><a class="c-pagenav__list-border" href="#">5</a></li>
          <li><a class="c-pagenav__list-border" href="#">6</a></li>
          <li><a class="c-pagenav__list-border" href="#">7</a></li>
          <li><a class="c-pagenav__list-border" href="#">8</a></li>
          <li><a class="c-pagenav__list-border" href="#">9</a></li>
          <span><a class="c-pagenav__next" href="#" rel="次"></a></span>
        </ul>
        <div class="c-pagenav__back"><a href="#" rel="次">次へ</a></div>
      </div>
    </main>

    <!-- footer -->
    <footer class="l-footer">
      <div class="p-footer__content">
        <!-- <img src="/img/footer-back.png" alt="フッター背景"> -->
        <p><a href="#">ショップ情報</a><span><a href="#">ヒストリー</a></span></p>
        <p><small>Copyright: RaiseTech</small></p>
      </div>
    </footer>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/nav.js"></script>
  </body>
</html>
