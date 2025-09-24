<!-- スタッフ詳細（共通テンプレート、スラッグで個別化） -->
<?php get_header(); ?>
<main>
  <!-- 下層ページFV -->
  <section class="page-fv staff-details-fv">
    <div class="page-fv__inner inner staff-details-fv__inner ">
      <div class="staff-details-fv__contents-wrapper">
        <div class="staff-details-fv__body">
          <div>
            <h2 class="staff-details-fv__title">
              <?php the_field('message_line1'); // メッセージ1 ?>
            </h2>
          </div>
          <div>
            <h3 class="staff-details-fv__sub-title">
              <?php the_field('message_line2'); // メッセージ2 ?>
            </h3>
          </div>
          <p class="staff-details-fv__position">
            <?php the_field('job_title'); // 役職 ?>
          </p>
          <div class="staff-details-fv__name-wrapper">
            <p class="staff-details-fv__name">
              <?php the_title(); // 投稿タイトル＝氏名 ?>
            </p>
            <p class="staff-details-fv__year">
              <?php the_field('entry_year'); // 入社年 ?>
            </p>
          </div>
          <p class="staff-details-fv__profile">
            <?php the_field('profile'); // プロフィール文 ?>
          </p>
        </div>
        <div class="staff-details-fv__image">
          <?php 
          // アイキャッチ（スタッフ写真）
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium', array(
              'class' => 'staff-details-fv__photo',
              'alt'   => get_the_title() // 氏名をaltに
            ));
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb'); ?>

  <!-- <nav class="breadcrumb" aria-label="パンくずリスト">
    <div class="breadcrumb__inner">
      <a href="./index.html">TOP</a>
      <span class="breadcrumb__separator">&gt;</span>
      <a href="./staff.html">STAFF</a>
      <span class="breadcrumb__separator">&gt;</span>
      <span class="breadcrumb__current">NISHIMURA</span>
    </div>
  </nav> -->
  <!-- スタッフインタビュー本文＆目次 -->
  <div class="page-staff-details__contents-wrapper">
    <!-- スタッフインタビュー本文 -->
    <section class="page-staff-details__main staff-interview">
      <article class="staff-interview__section" id="section1">
        <h2 class="staff-interview__title">普段の業務内容について</h2>
        <div class="staff-interview__text">
          <?php the_field('work_details'); // 普段の業務内容 ?>
        </div>
      </article>

      <article class="staff-interview__section" id="section2">
        <h2 class="staff-interview__title">学生時代に力を入れたことは？</h2>
        <div class="staff-interview__text">
          <?php the_field('student_experience'); // 学生時代に力を入れたこと ?>
        </div>
      </article>

      <article class="staff-interview__section" id="section3">
        <h2 class="staff-interview__title">TETOTEを志望した理由は？</h2>
        <div class="staff-interview__text">
          <?php the_field('reason_to_join'); // 志望理由 ?>
        </div>
      </article>

      <article class="staff-interview__section" id="section4">
        <h2 class="staff-interview__title">やりがいを感じる瞬間は？</h2>
        <div class="staff-interview__text">
          <?php the_field('motivation'); // やりがい ?>
        </div>
      </article>

      <article class="staff-interview__section" id="section5">
        <h2 class="staff-interview__title">どんな人と一緒に働きたい？</h2>
        <div class="staff-interview__text">
          <?php the_field('ideal_colleague'); // 理想の同僚像 ?>
        </div>
      </article>

      <article class="staff-interview__section" id="section6">
        <h2 class="staff-interview__title">応募者へのメッセージ</h2>
        <div class="staff-interview__text">
          <?php the_field('message_for_applicants'); // 応募者へのメッセージ ?>
        </div>
      </article>
    </section>
    <!-- スタッフインタビュー目次 -->
    <aside class="page-staff-details__sidebar interview-sidebar">
      <h2 class="interview-sidebar__title">目次</h2>
      <nav class="interview-sidebar__nav">
        <ul class="interview-sidebar__list">
          <li class="interview-sidebar__item">
            <a href="#section1" class="interview-sidebar__link">普段の業務内容について</a>
          </li>
          <li class="interview-sidebar__item">
            <a href="#section2" class="interview-sidebar__link">学生時代に力を入れたことは？</a>
          </li>
          <li class="interview-sidebar__item">
            <a href="#section3" class="interview-sidebar__link">TETOTEを志望した理由は？</a>
          </li>
          <li class="interview-sidebar__item">
            <a href="#section4" class="interview-sidebar__link">やりがいを感じる瞬間は？</a>
          </li>
          <li class="interview-sidebar__item">
            <a href="#section5" class="interview-sidebar__link">どんな人と一緒に働きたい？</a>
          </li>
          <li class="interview-sidebar__item">
            <a href="#section6" class="interview-sidebar__link">応募者へのメッセージ</a>
          </li>
        </ul>
      </nav>
    </aside>
  </div>
  <!-- その他のメンバー -->
  <section class="page-staff-details__other-members other-members">
    <div class="other-members__innter inner">
      <!-- セクションタイトル -->
      <h2 class="other-members__title">その他のメンバー</h2>

      <!-- メンバーリスト -->
      <ul class="other-members__items">
        <?php
        // ▼ 今表示しているスタッフ記事のIDを取得
        $current_id = get_the_ID();

        // ▼ ランダムで3件取得するクエリ条件を設定
        $args = array(
          'post_type'      => 'staff',   // カスタム投稿タイプ「staff」
          'posts_per_page' => 3,         // 3件だけ表示
          'orderby'        => 'rand',    // ランダム順（リロードごとに順番が変わる）
          'post__not_in'   => array($current_id), // 今表示しているスタッフ本人を除外
        );

        // ▼ WP_Query を使ってデータを取得
        $other_staff = new WP_Query($args);

        // ▼ 投稿が存在すればループ開始
        if ($other_staff->have_posts()) :
          while ($other_staff->have_posts()) : $other_staff->the_post();
        ?>
          <li class="other-members__item">
            <a href="<?php the_permalink(); ?>" class="staff-card">
              <div class="staff-card__image">
                <?php 
                // ▼ ACFのスタッフ写真フィールドから画像を取得
                $photo = get_field('staff_photo');
                if ($photo): ?>
                  <img src="<?php echo esc_url($photo['url']); ?>" 
                      alt="<?php echo esc_attr($photo['alt']); ?>" 
                      width="300" height="379">
                <?php endif; ?>

                <div class="staff-card__message">
                  <!-- ▼ ACFで入力したメッセージを表示 -->
                  <p class="staff-card__message-line1"><?php the_field('message_line1'); ?></p>
                  <p class="staff-card__message-line2"><?php the_field('message_line2'); ?></p>
                </div>
              </div>
              <!-- 本文 -->
              <div class="staff-card__body">
                <div class="staff-card__meta">
                  <!-- ▼ ACFで入力した職種と入社年を表示 -->
                  <p class="staff-card__job"><?php the_field('job_title'); ?></p>
                  <p class="staff-card__year"><?php the_field('entry_year'); ?></p>
                </div>
                <!-- ▼ 投稿タイトル（スタッフ名）を表示 -->
                <h3 class="staff-card__name"><?php the_title(); ?></h3>
              </div>
            </a>
          </li>
        <?php
          endwhile;
          // ▼ ループを抜けたら WordPress のクエリをリセット
          wp_reset_postdata();
        endif;
        ?>
      </ul>
    </div>
  </section>


<?php get_footer(); ?>

