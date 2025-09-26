<!-- 投稿の詳細ページ（ブログ詳細用） -->
<?php get_header(); ?>
<main>
    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>

    <!-- ブログ記事詳細 -->
    <section class="page-blog-details__blog-article blog-article">
      <div class="blog-article__inner inner">
        <article class="blog-article__contents-wrapper">
          <div class="blog-article__heading">
            <div class="blog-card__category blog-article__meta">
              <img src="<?php echo get_theme_file_uri('/assets/images/common/icon-note.png'); ?>" alt="" class="blog-card__icon" width="121" height="121">
              <span>
                <?php
                $cat = get_the_category();
                if ($cat) {
                  echo esc_html($cat[0]->name);
                }
                ?>
              </span>
              <time class="blog-article__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
            </div>
            <h1 class="blog-article__title"><?php the_title(); ?></h1>
          </div>
          
          <?php if (has_post_thumbnail()) : ?>
          <figure class="blog-article__image">
            <?php the_post_thumbnail('large'); ?>
          </figure>
          <?php endif; ?>
          
          <div class="blog-article__contents">
            <?php the_content(); ?>
          </div>
        </article>
      </div>
    </section>
    
    <!-- ブログの前後記事ナビゲーション -->
    <section class="page-blog-details__page-navigation blog-page-nav">
      <div class="blog-page-nav__inner inner">
        <div class="blog-page-nav__wrapper">
        <!-- 前の記事 -->
        <div class="blog-page-nav__prev">
          <?php
          $prev_post = get_previous_post();
          if ($prev_post) :
          ?>
          <a href="<?php echo get_permalink($prev_post->ID); ?>" class="blog-page-nav__link">
            <img src="<?php echo get_theme_file_uri('/assets/images/blog/page-nav-left.png'); ?>" class="blog-page-nav__icon blog-page-nav__icon--prev" alt="previous矢印" width="24" height="24">
            <div class="blog-page-nav__meta">
              <p class="blog-page-nav__title"><?php echo get_the_title($prev_post->ID); ?></p>
              <time class="blog-page-nav__date" datetime="<?php echo get_the_date('Y-m-d', $prev_post->ID); ?>"><?php echo get_the_date('Y.m.d', $prev_post->ID); ?></time>
            </div>
          </a>
          <?php endif; ?>
        </div>

        <!-- 区切り線 -->
        <div class="blog-page-nav__divider" aria-hidden="true"></div>

        <!-- 次の記事 -->
        <div class="blog-page-nav__next">
          <?php
          $next_post = get_next_post();
          if ($next_post) :
          ?>
          <a href="<?php echo get_permalink($next_post->ID); ?>" class="blog-page-nav__link">
            <div class="blog-page-nav__meta">
              <p class="blog-page-nav__title"><?php echo get_the_title($next_post->ID); ?></p>
              <time class="blog-page-nav__date" datetime="<?php echo get_the_date('Y-m-d', $next_post->ID); ?>"><?php echo get_the_date('Y.m.d', $next_post->ID); ?></time>
            </div>
            <img src="<?php echo get_theme_file_uri('/assets/images/blog/page-nav-right.png'); ?>" class="blog-page-nav__icon blog-page-nav__icon--prev" alt="next矢印" width="24" height="24">
          </a>
          <?php endif; ?>
        </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>