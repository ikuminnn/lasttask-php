<?php get_header(); ?>

<?php get_sidebar(); ?>

    <!-- main -->
    <main class="u-main__container">
      <!-- p-fv　ファーストビュー -->
      <section class="l-fv l-fv__bg">
        <div class="l-fv__content">
          <h2 class="c-title__search">Search</h2>
          <p class="c-text__archive">チーズバーガー</p>
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
        <?php get_template_part( 'template/list-card' ); ?> //画像と説明の共通パーツ
      </article>

      <?php
        if ( function_exists( 'pagenation' ) ) {  //「pagenation」という関数が定義されていれば呼び出す
          pagenation();
        }   //elseはないが定義がなかったら呼び出さない
      ?>
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
