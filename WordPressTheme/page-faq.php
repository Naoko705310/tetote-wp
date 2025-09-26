<!-- FAQページ -->
<?php get_header(); ?>
<main>
  <!-- 下層ページFV -->
  <section class="page-fv">
    <div class="page-fv__inner inner">
      <div class="page-fv__contents">
        <div class="page-fv__texts">
          <p class="page-fv__title-en page-fv__text">FAQ</p>
          <h1 class="page-fv__title-jp page-fv__text">よくある質問</h1>
          <p class="page-fv__description page-fv__text">皆様からよく頂くご質問にお答えします。</p>
        </div>
      </div>
    </div>
  </section>

    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>

  <div class="page-faq">
    <div class="page-faq__inner inner">
      <!-- FAQカテゴリタグ -->
      <nav class="page-faq__category-tag category-tag" aria-label="FAQカテゴリ">
        <ul class="category-tag__list">
          <li class="category-tag__item"><a href="#job-application" class="category-tag__link"><span class="category-tag__text">応募・選考について</span></a></li>
          <li class="category-tag__item"><a href="#job-career" class="category-tag__link"><span class="category-tag__text">キャリアについて</span></a></li>
          <li class="category-tag__item"><a href="#job-benefits" class="category-tag__link"><span class="category-tag__text">福利厚生について</span></a></li>
        </ul>
      </nav>

      <?php
      $page_id = get_queried_object_id(); // FAQ固定ページのID

      // 応募・選考
      $faq_application = SCF::get('faq_application', $page_id);
      if (!empty($faq_application)) :
      ?>
        <section id="job-application" class="page-faq__section faq-section">
          <h2 class="faq-section__title">応募・選考について</h2>
          <ul class="faq-section__list faq-list">
            <?php foreach ($faq_application as $item) : ?>
              <li class="faq-list__item">
                <button class="faq-list__question" aria-expanded="false">
                  <?php echo esc_html($item['question_app']); ?>
                  <span class="faq-list__icon"><span></span><span></span></span>
                </button>
                <div class="faq-list__answer">
                  <?php echo wp_kses_post($item['answer_app']); ?>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </section>
      <?php endif; ?>

      <?php
      // キャリア
      $faq_career = SCF::get('faq_career', $page_id);
      if (!empty($faq_career)) :
      ?>
        <section id="job-career" class="page-faq__section faq-section">
          <h2 class="faq-section__title">キャリアについて</h2>
          <ul class="faq-section__list faq-list">
            <?php foreach ($faq_career as $item) : ?>
              <li class="faq-list__item">
                <button class="faq-list__question" aria-expanded="false">
                  <?php echo esc_html($item['question_career']); ?>
                  <span class="faq-list__icon"><span></span><span></span></span>
                </button>
                <div class="faq-list__answer">
                  <?php echo wp_kses_post($item['answer_career']); ?>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </section>
      <?php endif; ?>

      <?php
      // 福利厚生
      $faq_benefits = SCF::get('faq_benefits', $page_id);
      if (!empty($faq_benefits)) :
      ?>
        <section id="job-benefits" class="page-faq__section faq-section">
          <h2 class="faq-section__title">福利厚生について</h2>
          <ul class="faq-section__list faq-list">
            <?php foreach ($faq_benefits as $item) : ?>
              <li class="faq-list__item">
                <button class="faq-list__question" aria-expanded="false">
                  <?php echo esc_html($item['question_benefits']); ?>
                  <span class="faq-list__icon"><span></span><span></span></span>
                </button>
                <div class="faq-list__answer">
                  <?php echo wp_kses_post($item['answer_benefits']); ?>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </section>
      <?php endif; ?>

    </div>
  </div>
<?php get_footer(); ?>
