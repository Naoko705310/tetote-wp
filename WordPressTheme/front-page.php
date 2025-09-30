<?php get_header(); ?>

<main>
  <!-- トップFV -->
  <section class="top-fv" id="top-fv">
    <div class="top-fv__inner">
      <!-- トップFV テキスト -->
      <div class="top-fv__container">
        <div class="top-fv__contents">
          <h2 class="top-fv__title">BECOME A<br>CHALLENGER.</h2>
          <p class="top-fv__subtitle">君の挑戦が、意思が、未来を変える</p>
          <div class="top-fv__news-bar news-bar">
            <div class="news-bar__label">
              <p>NEWS</p>
            </div>
            <div class="news-bar__body">
              <?php
              $news_query = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 1,
              ));
              if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
              ?>
                  <p><?php the_title(); ?></p>
                  <a href="<?php the_permalink(); ?>" class="news-bar__link">VIEW MORE</a>
              <?php
                endwhile;
              endif;
              wp_reset_postdata();
              ?>
            </div>
          </div>
        </div>
        <div class="swiper top-fv__swiper js-top-fv-swiper">
          <div class="swiper-wrapper">
            <!-- 1枚目（SP・PC共通） -->
            <div class="swiper-slide top-fv__slide">
              <img src="<?php echo get_theme_file_uri('/assets/images/top/fv01.jpg'); ?>" alt="メインビジュアル1" class="top-fv__slide--01" width="1280" height="720">
            </div>
            <!-- 2枚目（SP・PCで切り替え） -->
            <div class="swiper-slide top-fv__slide">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('/assets/images/top/fv02-sp.jpg'); ?>">
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri('/assets/images/top/fv02.jpg'); ?>">
                <img src="<?php echo get_theme_file_uri('/assets/images/top/fv02.jpg'); ?>" alt="メインビジュアル2" width="1280" height="720">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- トップページのメッセージスライダー -->
  <section class="top-message">
    <div class="top-message__inner">
      <!-- Swiperスライダー（背景画像用） -->
      <div class="swiper top-message__swiper js-top-message-swiper">
        <div class="swiper-wrapper top-message__swiper-wrapper">
          <!-- 1枚目 -->
          <div class="swiper-slide top-message__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/blog-slide-01.jpg" alt="ブログ記事1" width="1280" height="720">
          </div>
          <!-- 2枚目 -->
          <div class="swiper-slide top-message__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/blog-slide-02.jpg" alt="ブログ記事2" width="1280" height="720">
          </div>
          <!-- 3枚目 -->
          <div class="swiper-slide top-message__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/blog-slide-03.jpg" alt="ブログ記事3" width="1280" height="720">
          </div>
          <!-- 1枚目 -->
          <div class="swiper-slide top-message__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/blog-slide-01.jpg" alt="ブログ記事1" width="1280" height="720">
          </div>
          <!-- 2枚目 -->
          <div class="swiper-slide top-message__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/blog-slide-02.jpg" alt="ブログ記事2" width="1280" height="720">
          </div>
          <!-- 3枚目 -->
          <div class="swiper-slide top-message__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/blog-slide-03.jpg" alt="ブログ記事3" width="1280" height="720">
          </div>
        </div>

        <!-- ページネーション（必要なら） -->
        <div class="swiper-pagination top-message__pagination"></div>
      </div>
      <!-- 中央テキスト（Swiperの上に重ねる） -->
      <div class="top-message__text-wrapper">
        <div class="top-message__text">
          <p>後悔しないキャリアを作る、</p>
          <p>それこそが、我々の使命だ</p>
        </div>
      </div>
    </div>
  </section>
  <!-- トップABOUT  人手不足〜 -->
  <section class="top-about js-fade-in fade-in">
    <div class="top-about__inner inner">
      <div class="top-about__contents-wrapper">
        <!-- メッセージ -->
        <div class="top-about__message">
          <div class="top-about__message--first">
            <p>「人手不足」</p>
            <p>今の日本が抱えるこの社会課題に挑み、</p>
            <p>企業と個人の可能性を最大限に引き出す。</p>
            <p>それが私達の役目。。</p>
          </div>
          <div class="top-about__message--second">
            <p>単につなぐだけじゃない。</p>
            <p>「手と手」を取り合っていけるような、</p>
            <p>持続可能な社会を、一緒に作りませんか？</p>
          </div>
        </div>
        <!-- ボタン -->
        <div class="top-about__button">
          <a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>" class="button">VIEW MORE</a>
        </div>
      </div>
    </div>
  </section>
  <!-- トップ MEMBER -->
  <section class="top-member js-fade-in fade-in">
    <div class="top-member__inner inner">
      <!-- セクションタイトル -->
      <h2 class="top-member__section-title section-title">
        MEMBER
        <span class="section-title--jp">
          <span class="section-title--jp-first">人</span>を知る
        </span>
      </h2>
      <div class="top-member__description">
        <p>
          TETOTEの社員がどういった信念を持って働いているのか、<br>
          一日のスケジュールや仕事内容などを紹介します。
        </p>
      </div>

      <!-- Swiperスライダー（top-member__swiper） -->
      <div class="swiper top-member__swiper js-top-member-swiper">
        <div class="swiper-wrapper top-member__swiper-wrapper">
          <?php
          // ランダムに6件取得するクエリ条件
          $staff_query = new WP_Query(array(
            'post_type'           => 'staff', // カスタム投稿タイプ
            'posts_per_page'      => 6,       // 表示件数
            'orderby'             => 'rand',  // ランダム表示
            'ignore_sticky_posts' => true,    // スティッキーポストを除外
            'no_found_rows'       => true,    // ページネーション用のSQLを省略
          ));

          if ($staff_query->have_posts()) :
            while ($staff_query->have_posts()) : $staff_query->the_post();
          ?>
              <div class="swiper-slide top-member__slide staff-card">
                <!-- 写真 -->
                <div class="staff-card__image">
                  <?php
                  $staff_photo = get_field('staff_photo');
                  if ($staff_photo): ?>
                    <img src="<?php echo esc_url($staff_photo['url']); ?>" alt="<?php the_title(); ?>" width="300" height="379">
                  <?php else: ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/syain01-1.jpg')); ?>" alt="<?php the_title(); ?>" width="300" height="379">
                  <?php endif; ?>
                  <div class="staff-card__message">
                    <p class="staff-card__message-line1"><?php the_field('message_line1'); ?></p>
                    <p class="staff-card__message-line2"><?php the_field('message_line2'); ?></p>
                  </div>
                </div>
                <!-- 本文 -->
                <div class="staff-card__body">
                  <div class="staff-card__meta">
                    <p class="staff-card__job"><?php the_field('job_title'); ?></p>
                    <p class="staff-card__year"><?php the_field('entry_year'); ?></p>
                  </div>
                  <h3 class="staff-card__name"><?php the_title(); ?></h3>
                </div>
              </div>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>
      <!-- VIEW MORE ボタンとナビ -->
      <div class="top-member__button-wrapper">
        <a href="<?php echo esc_url(get_post_type_archive_link('staff')); ?>" class="top-member__button button">VIEW MORE</a>
        <div class="top-member__navigation swiper-navigation">
          <a href="#" class="circle-button circle-button--white top-member__prev" aria-label="前へ"></a>
          <a href="#" class="circle-button circle-button--white top-member__next" aria-label="次へ"></a>
        </div>
      </div>
    </div>
  </section>
  <!-- トップページBENEFITS -->
  <section class="top-benefits js-fade-in fade-in">
    <div class="top-benefits__inner inner">
      <!-- セクションタイトル -->
      <div class="top-benefits__section-title-wrapper">
        <h2 class="top-benefits__section-title section-title">
          BENEFITS
          <span class="section-title--jp">
            <span class="section-title--jp-first">制度・環境</span>を知る
          </span>
        </h2>
      </div>
      <div class="top-benefits__description">
        <p>当社では働く従業員とそのご家族が健やかに過ごせるよう、多様な研修、福利厚生を提供しています。</p>
      </div>
      <!-- benefitsカード2枚 -->
      <ul class="top-benefits__items benefits-cards">
        <li class="top-benefits__item">
          <!-- benefits-card -->
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('career'))); ?>" class="benefits-card" aria-label="研修制度とキャリアパスの詳細を見る">
            <div class="benefits-card__heading">
              <div class="benefits-card__contents-wrapper">
                <h3 class="benefits-card__titile benefits-card__title--en">
                  Training And Career
                </h3>
                <figure class="benefits-card__image">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/benefits-card-01.svg" alt="Training And Career" width="327" height="277">
                </figure>
                <!-- 円形ボタン（黒） -->
                <span class="benefits-card__circle-button circle-button circle-button--black"></span>
              </div>
              <h3 class="benefits-card__title benefits-card__title--ja">
                研修制度とキャリアパス
              </h3>
            </div>
            <div class="benefits-card__body">
              <p>
                個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。
              </p>
            </div>
          </a>
        </li>
        <li class="top-benefits__item">
          <!-- benefits-card -->
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('benefits'))); ?>" class="benefits-card" aria-label="福利厚生の詳細を見る">
            <div class="benefits-card__heading">
              <div class="benefits-card__contents-wrapper">
                <h3 class="benefits-card__titile benefits-card__title--en">
                  Employee Benefits
                </h3>
                <figure class="benefits-card__image">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/benefits-card-02.svg" alt="Employee Benefits" width="327" height="277">
                </figure>
                <!-- 円形ボタン（黒） -->
                <span class="benefits-card__circle-button circle-button circle-button--black"></span>
              </div>
              <h3 class="benefits-card__title benefits-card__title--ja">
                福利厚生
              </h3>
            </div>
            <div class="benefits-card__body">
              <p>
                TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。
              </p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- トップ採用BLOG -->
  <section class="top-blog js-fade-in fade-in">
    <div class="top-blog__inner inner">
      <!-- セクションタイトルとボタン -->
      <div class="top-blog__section-title-wrapper">
        <!-- セクションタイトル -->
        <h2 class="top-blog__section-title section-title">
          BLOG
          <span class="section-title--jp">
            採用ブログ
          </span>
        </h2>
        <!-- ボタン群 PCだけ表示 -->
        <div class="top-blog__button-wrapper top-blog__button-wrapper--pc">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="circle-button circle-button--white" aria-label="次へ"></a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="top-blog__view-more">VIEW MORE</a>
        </div>

      </div>
      <div class="top-blog__contents-wrapper">
        <div class="top-blog__description">
          <p>採用情報やイベント情報、社員の紹介など、<br>
            日々の現場の様子をご紹介します。</p>
        </div>
        <!-- blog-cards ブログカード群 -->
        <ul class="top-blog__items blog-cards">
          <?php
          // ▼ 最新の投稿を4件取得
          $blog_query = new WP_Query(array(
            'post_type'      => 'post',      // 投稿タイプ：通常の投稿
            'posts_per_page' => 4,           // 最新4件
            'orderby'        => 'date',      // 日付順
            'order'          => 'DESC'       // 新しい順
          ));

          // ▼ 投稿があればループ
          if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post();
          ?>
              <li class="top-blog__item">
                <article class="blog-card">
                  <figure class="blog-card__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <!-- 投稿のアイキャッチ画像 -->
                      <?php the_post_thumbnail('medium', array(
                        'alt'   => esc_attr(get_the_title()),
                        'class' => 'blog-card__thumb',
                        'width' => 300,
                        'height' => 200
                      )); ?>
                    <?php else: ?>
                      <!-- アイキャッチがない場合の代替画像 -->
                      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.png')); ?>" alt="<?php the_title(); ?>" width="300" height="200">
                    <?php endif; ?>
                  </figure>

                  <div class="blog-card__body">
                    <div class="blog-card__category">
                      <!-- カテゴリーの1つ目を表示 -->
                      <?php
                      $category = get_the_category();
                      if ($category) :
                        // カテゴリーに対応するアイコン画像を任意で設定
                        // アイコン固定の場合は下記を編集
                      ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/icon-note.png')); ?>" alt="" class="blog-card__icon" width="121" height="121">
                        <span><?php echo esc_html($category[0]->name); ?></span>
                      <?php endif; ?>
                    </div>

                    <!-- タイトル -->
                    <h2 class="blog-card__title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <!-- 日付 -->
                    <time class="blog-card__date" datetime="<?php echo get_the_date('c'); ?>">
                      <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                  </div>
                </article>
              </li>
          <?php
            endwhile;
          endif;
          // ▼ ループ後にクエリをリセット
          wp_reset_postdata();
          ?>
        </ul>

        <!-- ボタン群 SPだけ表示 -->
        <div class="top-blog__button-wrapper top-blog__button-wrapper--sp">
          <a href="blog.html" class="circle-button circle-button--white" aria-label="次へ"></a>
          <a href="blog.html" class="top-blog__view-more">VIEW MORE</a>
        </div>
      </div>
    </div>
  </section>
  <!-- トップ RECRUITMENT -->
  <section class="top-recruitment js-fade-in fade-in">
    <div class="top-recruitment__inner">
      <!-- セクションタイトル -->
      <h2 class="top-recruitment__section-title section-title">
        RECRUITMENT
        <span class="section-title--jp">
          採用情報
        </span>
      </h2>
      <div class="top-recruitment__description">
        <p>募集要項（職種、業務内容、応募条件、選考フロー）とよくある質問・会社概要などをまとめています。</p>
      </div>
      <!-- リクルート関連リンク -->
      <ul class="top-recruitment__items recruitment-links">
        <li class="top-recruitment__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('details'))); ?>" class="recruitment-link">
            募集要項
          </a>
        </li>
        <li class="top-recruitment__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>" class="recruitment-link">
            よくある質問
          </a>
        </li>
        <li class="top-recruitment__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>" class="recruitment-link">
            会社概要
          </a>
        </li>
      </ul>

    </div>
  </section>

  <?php get_footer(); ?>