<!-- 福利厚生ページ -->
<?php get_header(); ?>
<main>
    <!-- 下層ページFV -->
    <section class="page-fv">
      <div class="page-fv__inner inner">
        <div class="page-fv__contents">
          <div class="page-fv__texts">
            <p class="page-fv__title-en page-fv__text">BENEFITS</p>
            <h1 class="page-fv__title-jp page-fv__text">福利厚生について</h1>
            <p class="page-fv__description page-fv__text">充実した福利厚生制度を設けています。</p>
          </div>
        </div>
      </div>
    </section>
    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>
    <div class="page-benefits">
      <div class="page-benefits__inner inner">
        <!-- 各種制度 -->
        <section class="page-benefits benefits-list">
          <div class="benefits-list__inner">
            <h2 class="benefits-list__title">各種制度</h2>
            <!-- 各種制度のリスト -->
            <dl class="benefits-list__items">
              <div class="benefits-list__item">
                <dt class="benefits-list__term">手当</dt>
                <dd class="benefits-list__desc">
                  <ul class="benefits-list__desc-list">
                    <li>通勤手当（上限月5万円）</li>
                    <li>時間外割増手当</li>
                    <li>役職手当</li>
                    <li>退職金</li>
                  </ul>
                </dd>
              </div>

              <div class="benefits-list__item">
                <dt class="benefits-list__term">制度</dt>
                <dd class="benefits-list__desc">財形貯蓄</dd>
              </div>

              <div class="benefits-list__item">
                <dt class="benefits-list__term">保険</dt>
                <dd class="benefits-list__desc">社会保険完備</dd>
              </div>

              <div class="benefits-list__item">
                <dt class="benefits-list__term">施設</dt>
                <dd class="benefits-list__desc">
                  <ul class="benefits-list__desc-list">
                    <li>社員向けジム</li>
                    <li>社内託児所</li>
                  </ul>
                </dd>
              </div>

              <div class="benefits-list__item">
                <dt class="benefits-list__term">休暇・休日</dt>
                <dd class="benefits-list__desc">
                  <ul class="benefits-list__desc-list">
                    <li>完全週休2日制</li>
                    <li>年次有給休暇（初年度10日／年度途中入社は比例付与）</li>
                    <li>年末年始休暇（12月29日〜1月3日：6日間）</li>
                    <li>夏季休暇（6月〜9月中：5日間）</li>
                    <li>慶弔休暇</li>
                    <li>産前産後休暇</li>
                    <li>リフレッシュ休暇（3年勤務で5日／以降5年勤務ごとに5日支給）</li>
                  </ul>
                </dd>
              </div>
            </dl>
          </div>
        </section>
        <!-- 制度利用者の声 -->
        <section class="page-benefits__users-voice users-voice">
          <div class="users-voice__inner">
            <h2 class="users-voice__title">
              制度利用者の声
            </h2>
            <ul class="users-voice__items">
              <li class="users-voice__item">
                <p class="users-voice__year">2013年入社</p>
                <p class="users-voice__name">堀内 優</p>
                <p class="users-voice__text">
                  資格取得のための費用を会社が負担してくれる制度を利用して、念願の応用技術者資格を取得できました。
                  この制度は、自己啓発を支援してくれるので、とても助かります。今後は、さらにスキルアップを目指して、他の資格も取得していきたいと思っています。
                  会社が成長を支援してくれるので、安心して仕事に取り組むことができます。
                </p>
              </li>
              <li class="users-voice__item">
                <p class="users-voice__year">2015年入社</p>
                <p class="users-voice__name">神凪 理沙</p>
                <p class="users-voice__text">
                  出産後、育休を取得して、現在は短時間勤務で働いています。会社が育児に理解があるので、安心して仕事に集中できます。
                  特に、社内託児所があるので、子供を預けながら安心して働けるのは助かります。また、短時間勤務制度も充実しているので、自分のペースで仕事復帰することができました。
                  今後は、子供の成長に合わせて、勤務時間を調整しながら、長く働き続けたいと思っています。
                </p>
              </li>
            </ul>
            <figure class="users-voice__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/benefits/benefits-user-voices.jpg" alt="男女の社員" width="980" height="560" loading="lazy">
            </figure>
          </div>
        </section>
      </div>
    </div>
<?php get_footer(); ?>
