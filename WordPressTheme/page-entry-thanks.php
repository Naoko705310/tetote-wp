<!-- 応募完了ページ -->
<?php get_header(); ?>
<main>
    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>

    <!-- <nav class="page-fv__breadcrumb breadcrumb page-entry-thanks__breadcrumb" aria-label="パンくずリスト">
      <a href="./index.html">TOP</a>
      <span class="page-fv__breadcrumb-separator">&gt;</span>
      <span class="page-fv__breadcrumb-current">ENTRY</span>
    </nav> -->
    <!-- 送信ありがとうございました -->
    <div class="page-entry-thanks">
      <div class="page-entry-thanks__inner inner">
        <div class="page-entry-thanks__contents-wrapper">
          <div class="thanks-message">
            <h2 class="thanks-message__title">送信ありがとうございました。</h2>
            <p class="thanks-message__text">
              3営業日以内に人事担当者より<br class="u-mobile">ご連絡させていただきます。
            </p>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>

