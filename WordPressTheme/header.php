<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />

  <title>
    <?php
      if ( is_front_page() ) {
        // TOPページ: サイト名 | キャッチフレーズ（例: 株式会社TETOTE | 採用特設サイト）
        bloginfo('name');
        echo ' | ';
        bloginfo('description');
      } else {
        // 下層ページ: ページ名 | サイト名
        wp_title('|', true, 'right');
        bloginfo('name');
      }
    ?>
  </title>
  
  <?php if ( is_front_page() ) : // TOPページの場合のディスクリプションとキーワード ?>
    <meta name="description" content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。" />
    <meta name="keywords" content="TETOTE,採用,テクノロジー,AI,ビッグデータ,社会課題解決" />
  <?php else : // 下層ページの場合のディスクリプションとキーワード ?>
    <meta name="description" content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。このページでは、<?php the_title(); ?>について解説しています。" />
    <meta name="keywords" content="TETOTE,採用,テクノロジー,AI,ビッグデータ,社会課題解決" />
  <?php endif; ?>

  <meta property="og:title" content="採用特設サイト | 株式会社TETOTE" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>" />
  <meta property="og:image" content="<?php echo get_theme_file_uri('/assets/images/ogp.jpg'); ?>" />
  <meta property="og:site_name" content="株式会社TETOTE" />
  <meta property="og:description" content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。" />

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
// トップページか下層ページかでクラス・タグを分岐
$header_class = is_front_page() ? 'header top-header js-header' : 'header page-header js-header';
?>

<header class="<?php echo $header_class; ?>">
  <div class="header__inner">

    <!-- =============================
         ヘッダーロゴ
    ============================== -->
    <?php if ( is_front_page() ) : ?>
      <h1 class="header__logo header-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo__link">
          <!-- 白ロゴ（初期表示） -->
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/tetote-logo-white.svg')); ?>"
               alt="TETOTEロゴ"
               width="250"
               height="61"
               class="header-logo__img header-logo__img--white">
          <!-- 黒ロゴ（スクロール後／ハンバーガー開時） -->
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/tetote-logo.svg')); ?>"
               alt="TETOTEロゴ"
               width="250"
               height="61"
               class="header-logo__img header-logo__img--black">
        </a>
      </h1>
    <?php else : ?>
      <div class="header__logo header-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo__link">
          <!-- 下層ページは黒ロゴ固定 -->
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/tetote-logo.svg')); ?>"
               alt="TETOTEロゴ"
               width="250"
               height="61"
               class="header-logo__img">
        </a>
      </div>
    <?php endif; ?>
    <!-- /ヘッダーロゴ -->

    <!-- =============================
         ヘッダーボタン群（PC）
    ============================== -->
    <nav class="header__buttons header-buttons js-header-buttons">
      <ul>
        <li>
          <a href="<?php echo esc_url(home_url('/details')); ?>"
             class="button button--entry button--entry-black">募集要項</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/entry')); ?>"
             class="button button--entry button--entry-accent">ENTRY</a>
        </li>
      </ul>
    </nav>

    <!-- =============================
         ハンバーガーメニュー
    ============================== -->
    <button id="hamburger-menu"
            class="header__hamburger hamburger js-hamburger"
            aria-label="メニューを開く"
            aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
      <span class="hamburger-text">MENU</span>
    </button>
  </div><!-- /.header__inner -->

  <!-- =============================
       overlayナビゲーション
  ============================== -->
  <div class="header__nav header-nav js-header-nav" aria-hidden="true">
    <div class="header-nav__inner">
      <div class="header-nav__contents-wrapper">

        <!-- ナビ内ロゴ -->
        <div class="header-nav__logo-wrapper">
          <div class="header-nav__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/tetote-logo.svg')); ?>"
                   alt="TETOTEロゴ"
                   width="250"
                   height="61">
            </a>
          </div>
        </div>

        <!-- メニュー項目とボタン -->
        <div class="header-nav__nav-wrapper">

          <!-- メニュー項目 -->
          <ul class="header-nav__items">
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/about')); ?>" class="js-header-link">ABOUT US<span>TETOTEについて</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/staff')); ?>" class="js-header-link">STAFF<span>社員について</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/blog')); ?>" class="js-header-link">BLOG<span>採用ブログ</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/benefits')); ?>" class="js-header-link">BENEFITS<span>福利厚生について</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/career')); ?>" class="js-header-link">CARRER<span>研修制度とキャリアパス</span></a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/faq')); ?>" class="js-header-link">FAQ<span>よくある質問</span></a>
            </li>
          </ul>

          <!-- ボタン群 -->
          <ul class="header-nav__buttons">
            <li class="header-nav__button">
              <a href="<?php echo esc_url(home_url('/details')); ?>"
                 class="button button--entry button--entry-black js-header-link">募集要項</a>
            </li>
            <li class="header-nav__button">
              <a href="<?php echo esc_url(home_url('/entry')); ?>"
                 class="button button--entry button--entry-accent js-header-link">ENTRY</a>
            </li>
          </ul>

        </div><!-- /.header-nav__nav-wrapper -->
      </div><!-- /.header-nav__contents-wrapper -->
    </div><!-- /.header-nav__inner -->
  </div><!-- /.header__nav -->

</header>
