<!-- 採用情報トップページ -->
<?php get_header(); ?>
<main>
    <!-- 下層ページFV -->
    <section class="page-fv">
      <div class="page-fv__inner inner">
        <div class="page-fv__contents">
          <div class="page-fv__texts">
            <p class="page-fv__title-en page-fv__text">CAREER</p>
            <h1 class="page-fv__title-jp page-fv__text">研修制度とキャリアパス</h1>
            <p class="page-fv__description page-fv__text">キャリアパスを支える充実した、研修制度</p>
          </div>
        </div>
      </div>
    </section>
    <!-- パンくずリスト -->
    <nav class="page-fv__breadcrumb breadcrumb" aria-label="パンくずリスト">
      <div class="breadcrumb__inner">
        <a href="./index.html">TOP</a>
        <span class="page-fv__breadcrumb-separator">&gt;</span>
        <span class="page-fv__breadcrumb-current">CAREER</span>
      </div>
    </nav>
    <div class="page-career">
      <div class="page-career__inner inner">
        <!-- キャリアパスに沿った研修制度を用意 -->
        <section class="page-career__career-path career-path">
          <div class="career-path__inner">
            <h2 class="career-path__title">
              キャリアパスに沿った研修制度を用意
            </h2>
            <p class="career-path__text-intro">
              弊社では、コンサルタントのキャリアパスを、大きく4つのステージに分けています。
            </p>
            <div class="career-path__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/career/tetote-career-path.svg" alt="キャリアパスのフローチャート" width="980" height="734" loading="lazy">
            </div>
            <p class="career-path__text-after">
              TETOTE は、コンサルタントのキャリアパスを支えるために、以下の独自の研修制度を設けています。
            </p>
            <!-- キャリアパス研修について -->
            <ul class="career-path__trainings training-list">
              <li class="training-list__item">
                <h3 class="training-list__title">
                  <span class="training-list__number">1.</span>
                  ケーススタディ研修
                </h3>
                <p class="training-list__text">
                  TETOTE の過去のプロジェクト事例を活かしたケーススタディ研修を実施しています。<br>
                  この研修では、実際のプロジェクトで直面する課題を解決するために、分析力、問題解決能力、プレゼンテーション能力などを実践的に習得することができます。
                </p>
              </li>

              <li class="training-list__item">
                <h3 class="training-list__title">
                  <span class="training-list__number">2.</span>
                  クライアント対応研修
                </h3>
                <p class="training-list__text">
                  TETOTE は、クライアントとの信頼関係構築を重視しています。<br>
                  この研修では、クライアントとのコミュニケーションスキル、交渉スキル、プレゼンテーションスキルなどを習得し、クライアントの課題解決に貢献できるコンサルタントを育成します。
                </p>
              </li>

              <li class="training-list__item">
                <h3 class="training-list__title">
                  <span class="training-list__number">3.</span>
                  専門知識研修
                </h3>
                <p class="training-list__text">
                  財務、会計、IT など、コンサルタント業務に必要な専門知識を習得するための研修を実施しています。<br>
                  TETOTE は、幅広い領域の知識を持つコンサルタントを育成し、クライアントに最適なソリューションを提供できるようにしています。
                </p>
              </li>

              <li class="training-list__item">
                <h3 class="training-list__title">
                  <span class="training-list__number">4.</span>
                  マネジメント研修
                </h3>
                <p class="training-list__text">
                  プロジェクトマネジメント、リーダーシップ、チームビルディングなど、マネジメントスキルを習得するための研修を実施しています。<br>
                  TETOTE は、将来的にマネジメント層を担うコンサルタントを育成し、組織全体の成長を促進しています。
                </p>
              </li>

              <li class="training-list__item">
                <h3 class="training-list__title">
                  <span class="training-list__number">5.</span>
                  外部研修
                </h3>
                <p class="training-list__text">
                  社外で実施される研修にも積極的に参加することができます。<br>
                  TETOTE は、最新の知識やスキルを習得し、常に成長し続けるコンサルタントを育成します。
                </p>
              </li>
            </ul>
          </div>
        </section>
      </div>
    </div>
<?php get_footer(); ?>
