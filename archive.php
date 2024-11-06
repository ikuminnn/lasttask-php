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
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <?php get_template_part( 'template/list-card' ); ?> //画像と説明の共通パーツ
      </article>

      <?php //pagenation
        if ( function_exists( 'pagenation' ) ) {  //「pagenation」という関数が定義されていれば呼び出す
          pagenation();
        }   //elseはないが定義がなかったら呼び出さない
      ?>
    </main>
  
  <?php get_footer(); ?>
