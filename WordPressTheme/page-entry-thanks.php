<!-- 応募完了ページ -->
<?php get_header(); ?>
<main>
    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>
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

