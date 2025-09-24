<?php get_header(); ?>
<main>
  <!-- 下層ページFV -->
  <section class="page-fv">
    <div class="page-fv__inner inner">
      <div class="page-fv__contents">
        <div class="page-fv__texts">
          <p class="page-fv__title-en page-fv__text">BLOG</p>
          <h1 class="page-fv__title-jp page-fv__text">採用ブログ</h1>
          <p class="page-fv__description page-fv__text">採用情報やイベント情報などをご紹介します。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb'); ?>

  <!-- <nav class="page-fv__breadcrumb breadcrumb" aria-label="パンくずリスト">
    <div class="breadcrumb__inner">
      <a href="<?php echo home_url(); ?>">TOP</a>
      <span class="page-fv__breadcrumb-separator">&gt;</span>
      <span class="page-fv__breadcrumb-current">BLOG</span>
    </div>
  </nav> -->

  <!-- ブログ一覧 -->
  <section class="page-blog">
    <div class="page-blog__inner inner">
      <!-- blog-cards ブログカード群 -->
      <ul class="top-blog__items page-blog__items blog-cards blog-list">

        <?php
          // ★ 1ページ8件ずつの記事を取得
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 8,
            'paged' => $paged
          );
          $the_query = new WP_Query($args);

          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
          <li class="top-blog__item page-blog__item">
            <article class="blog-card">
              <!-- アイキャッチ -->
              <figure class="blog-card__image">
                <a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('blog-card-thumb'); ?>
                  <?php else: ?>
                    <img src="<?php echo get_theme_file_uri('/assets/images/common/no-image.jpg'); ?>" alt="<?php the_title(); ?>">
                  <?php endif; ?>
                </a>
              </figure>

              <div class="blog-card__body">
                <!-- カテゴリー -->
                <div class="blog-card__category">
                  <img src="<?php echo get_theme_file_uri('/assets/images/common/icon-note.png'); ?>" alt="" class="blog-card__icon" width="121" height="121">
                  <span>
                    <?php
                      $cat = get_the_category();
                      if ( $cat ) {
                        echo esc_html( $cat[0]->name );
                      }
                    ?>
                  </span>
                </div>

                <!-- タイトル -->
                <h3 class="blog-card__title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>

                <!-- 日付 -->
                <time class="blog-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('Y.m.d'); ?>
                </time>
              </div>
            </article>
          </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>

      </ul>

      <!-- ページネーション -->
      <nav class="page-blog__pagination blog-pagination">
        <ul class="blog-pagination__list">
          <?php
            $big = 999999999; // 置換用の仮ID

            $links = paginate_links( array(
              'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format'    => 'page/%#%/',   // ★ 投稿名パーマリンク用
              'current'   => max( 1, $paged ),
              'total'     => $the_query->max_num_pages,
              'mid_size'  => 1,
              'prev_text' => '&lt;',
              'next_text' => '&gt;',
              'type'      => 'array',
            ) );

            if ( $links ) {
              foreach ( $links as $link ) {
                $link = str_replace('page-numbers', 'blog-pagination__link', $link);
                $link = str_replace('current', 'is-active', $link);
                echo '<li class="blog-pagination__item">' . $link . '</li>';
              }
            }
          ?>
        </ul>
      </nav>

    </div>
  </section>
</main>
<?php get_footer(); ?>
