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
          <?php if ( have_posts() ):
            while( have_posts() ):
              the_post(); ?>
                <figure id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="p-list">
                  <img class="img-list" src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="チーズバーガーの写真">
                  <figcaption class="c-caption">
                    <h3><?php the_title(); ?></h3>
                    <h4>こだわり</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                      <?php the_content( '続きを読む' ); ?></p>
                    <p><a class="c-button__menu" href="<?php the_permalink(); ?>">詳しく見る</a></p>
                  </figcaption>
                </figure>
            <?php endwhile;
            else: ?>
              <p>表示する記事がありません</p>
          <?php endif; ?>
        </section>
      </article>
      <!-- ページナビ　-->
      <?php if ( $wp_query -> max_num_pages > 1 ): ?>   // ページ数が１を超える場合に処理
        <div class="p-pagenav">
          <p>page 1/10</p>
          <div class="c-pagenav__front"><?php next_posts_link( 'Prev' ); ?>前へ</div> //通常順番通りでnextにいくのは前の記事だから混乱注意
          <!-- <ul class="c-pagenav__list">
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
          </ul> -->
          <div class="c-pagenav__back"><?php previous_posts_link( 'Next' ); ?>次へ</div>
        </div>
      <?php endif; ?>
    </main>
  
  <?php get_footer(); ?>
