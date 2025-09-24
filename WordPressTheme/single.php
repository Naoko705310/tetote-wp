<!-- 投稿の詳細ページ（ブログ詳細用） -->
<?php get_header(); ?>
<main>
    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>

    <!-- <nav class="page-fv__breadcrumb page-blog-details__breadcrumb breadcrumb" aria-label="パンくずリスト">
      <div class="breadcrumb__inner">
        <a href="./index.html">TOP</a>
        <span class="page-fv__breadcrumb-separator">&gt;</span>
        <a href="./blog.html">BLOG</a>
        <span class="page-fv__breadcrumb-separator">&gt;</span>
        <span class="page-fv__breadcrumb-current">新入社員向けに、入社前研修を行いました。</span>
      </div>
    </nav> -->
    <!-- ブログ記事詳細 -->
    <section class="page-blog-details__blog-article blog-article">
      <div class="blog-article__inner inner">
        <article class="blog-article__contents-wrapper">
          <div class="blog-article__heading">
            <div class="blog-card__category blog-article__meta">
              <img src="./assets/images/common/icon-note.png" alt="" class="blog-card__icon" width="121" height="121" >
              <span>社内研修</span>
              <time class="blog-article__date" datetime="2023-03-25">2023.03.25</time>
            </div>
            <h1 class="blog-article__title">新入社員向けに、入社前研修を行いました。</h1>
          </div>
          
          <figure class="blog-article__image">
            <img src="./assets/images/blog/blog-article-01.jpg" alt="入社前研修の様子" width="800" height="500">
          </figure>
          
          <div class="blog-article__contents">
            <p>2023年3月25日、新入社員を対象とした入社前研修を実施しました。<br>
              今回の研修では、社会人としての基礎知識やビジネスマナー、当社の事業内容や社風について学びました。</p>
            
            <h2>研修内容</h2>
            <ul>
              <li>挨拶・自己紹介</li>
              <li>社会人としての心構え</li>
              <li>ビジネスマナー</li>
              <li>当社の事業内容</li>
              <li>社風</li>
              <li>グループワーク</li>
              <li>懇親会</li>
            </ul>
            
            <h2>研修の様子</h2>
            <p>研修は、座学とグループワーク、懇親会を通して行いました。<br>
              座学では、社会人としての心構えやビジネスマナーについて学びました。<br>
              グループワークでは、チームで課題に取り組むことで、コミュニケーション能力や問題解決能力を向上させました。<br>
              懇親会では、社員同士が交流を深め、親睦を図りました。<br>
              社員との交流を通して、当社の雰囲気にも馴染むことができたようです。
            </p>
            
            <h2>今後の期待</h2>
            <p>
              今回の研修で学んだことを活かして、新入社員の皆さんが、一人前の社会人として成長し ていくことを期待しています。<br>
              当社は、新入社員の皆さんが、自分の能力を最大限に発揮できる環境を提供します。<br>
              ぜひ、積極的にチャレンジし、自分自身を成長させてください！
            </p>
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
          <a href="#" class="blog-page-nav__link">
            <img src="./assets/images/blog/page-nav-left.png" class="blog-page-nav__icon blog-page-nav__icon--prev" alt="previous矢印" width="24" height="24">
            <div class="blog-page-nav__meta">
              <p class="blog-page-nav__title">内定者向け研修を行いました</p>
              <time class="blog-page-nav__date" datetime="2024-08-25">2024.08.25</time>
            </div>
          </a>
        </div>

        <!-- 区切り線 -->
        <div class="blog-page-nav__divider" aria-hidden="true"></div>

        <!-- 次の記事 -->
        <div class="blog-page-nav__next">
          <a href="#" class="blog-page-nav__link">
            <div class="blog-page-nav__meta">
              <p class="blog-page-nav__title">【新卒採用2024】エントリー受付中！</p>
              <time class="blog-page-nav__date" datetime="2024-08-25">2024.08.25</time>
            </div>
            <img src="./assets/images/blog/page-nav-right.png" class="blog-page-nav__icon blog-page-nav__icon--prev" alt="previous矢印" width="24" height="24">
          </a>
        </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
