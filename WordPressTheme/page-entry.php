<!-- 応募フォームページ -->
<?php get_header(); ?>
<main>
    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>
    <!-- エントリーフォーム -->
    <div class="page-entry">
      <div class="page-entry__inner inner">
        <div class="page-entry__contents-wrapper">
          <h2 class="page-entry__title--en">ENTRY FORM</h2>
          <div class="page-entry__heading-wrapper">
            <div class="page-entry__heading">
              <h3 class="page-entry__title"><span class="page-entry__title--color">新卒・中途採用</span><br class="u-mobile">エントリーフォーム</h3>
              <p class="page-entry__note">
                当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。<br>
                <span class="page-entry__required-note">※は必須項目になります。</span>
              </p>
            </div>
          </div>
          <!-- エントリーフォーム -->
          <?php echo do_shortcode('[contact-form-7 id="6eae13c" title="エントリーフォーム"]'); ?>
          
        </div>
      </div>
    </div>
<?php get_footer(); ?>
