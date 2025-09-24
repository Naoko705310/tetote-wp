<!-- スタッフ一覧（6人カード表示） -->
<?php get_header(); ?> <!-- ヘッダーを読み込み -->

<main>
  <!-- ▼ ファーストビュー部分（固定文言） -->
  <section class="page-fv">
    <div class="page-fv__inner inner">
      <div class="page-fv__contents">
        <div class="page-fv__texts">
          <!-- 英語タイトル -->
          <p class="page-fv__title-en page-fv__text">STAFF</p>
          <!-- 日本語タイトル -->
          <h1 class="page-fv__title-jp page-fv__text">社員について</h1>
          <!-- 説明文 -->
          <p class="page-fv__description page-fv__text">弊社社員のリアルな声を紹介しています。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ▼ スタッフ一覧カード（ループで表示される部分） -->
  <section class="page-staff__staff-list staff-list">
    <div class="staff-list__inner inner">
      <ul class="staff-list__items staff-cards">

        <?php if ( have_posts() ) : ?> 
          <!-- 投稿（スタッフ記事）が存在する場合にループ開始 -->
          <?php while ( have_posts() ) : the_post(); ?> 
            <!-- 1人分のスタッフカード -->
            <li class="staff-list__item">
              <!-- 各スタッフの詳細ページ（single-staff.php）へのリンク -->
              <a href="<?php the_permalink(); ?>" class="staff-card">

                <!-- ▼ 画像エリア -->
                <div class="staff-card__image">
                  <?php 
                  // ACFで設定した「スタッフ写真」フィールドを取得
                  // 返り値は「配列」に設定していることが前提
                  $photo = get_field('staff_photo'); 
                  if( $photo ): ?>
                    <!-- ACFの画像フィールドからURLとaltを呼び出して表示 -->
                    <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
                  <?php endif; ?>

                  <!-- スタッフの短いメッセージ（1行目・2行目） -->
                  <div class="staff-card__message">
                    <p class="staff-card__message-line1"><?php the_field('message_line1'); ?></p>
                    <p class="staff-card__message-line2"><?php the_field('message_line2'); ?></p>
                  </div>
                </div>

                <!-- ▼ テキストエリア -->
                <div class="staff-card__body">
                  <div class="staff-card__meta">
                    <!-- 職種（例: コンサルタント） -->
                    <p class="staff-card__job"><?php the_field('job_title'); ?></p>
                    <!-- 入社年度（例: 2011年入社） -->
                    <p class="staff-card__year"><?php the_field('entry_year'); ?></p>
                  </div>
                  <!-- 名前（投稿タイトルを利用） -->
                  <h3 class="staff-card__name"><?php the_title(); ?></h3>
                </div>

              </a>
            </li>
          <?php endwhile; ?>
          <!-- ループ終了 -->

        <?php endif; ?> 
        <!-- 投稿が存在しない場合は何も表示されない -->
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?> <!-- フッターを読み込み -->
