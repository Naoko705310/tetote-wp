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
    <nav class="page-fv__breadcrumb breadcrumb" aria-label="パンくずリスト">
      <div class="breadcrumb__inner">
        <a href="./index.html">TOP</a>
        <span class="page-fv__breadcrumb-separator">&gt;</span>
        <span class="page-fv__breadcrumb-current">FAQ</span>
      </div>
    </nav>
    <div class="page-faq">
      <div class="page-faq__inner inner">
        <!-- FAQカテゴリ -->
        <nav class="page-faq__category-tag category-tag" aria-label="FAQカテゴリ">
          <ul class="category-tag__list">
            <li class="category-tag__item">
              <a href="#job-application" class="category-tag__link">
                <span class="category-tag__text">応募・選考について</span>
              </a>
            </li>
            <li class="category-tag__item">
              <a href="#job-career" class="category-tag__link">
                <span class="category-tag__text">キャリアについて</span>
              </a>
            </li>
            <li class="category-tag__item">
              <a href="#job-benefits" class="category-tag__link">
                <span class="category-tag__text">福利厚生について</span>
              </a>
            </li>
          </ul>
        </nav>
    
        <!-- 応募・選考について -->
        <section id="job-application" class="page-faq__section faq-section">
          <h2 class="faq-section__title">応募・選考について</h2>
          <ul class="faq-section__list faq-list">
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
                応募資格はありますか？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">特別な資格はありません。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
応募方法は？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">採用情報サイトからエントリーしてください。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
選考フローは？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">書類選考 → 面接（複数回） → 内定となります。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
選考にかかる期間は？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">2～3週間を目安としています。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
面接では何を聞かれますか？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">人柄や意欲を重視します。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
面接官はどんな人ですか？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">人事担当者と現場の責任者が面接官となります。リラックスしてご参加ください。</div>
            </li>
          </ul>
        </section>
    
        <!-- キャリアについて -->
        <section id="job-career" class="page-faq__section faq-section">
          <h2 class="faq-section__title">キャリアについて</h2>
          <ul class="faq-section__list faq-list">
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
自分の希望するキャリアパスに進むことはできますか？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">はい。面談を通じてキャリアプランをサポートします。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
転勤はありますか？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">勤務地の希望に応じて、転勤が発生する場合があります。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
転勤の希望は出せますか？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">希望は考慮しますが、業務の必要性に応じて決定されます。転勤希望がある場合は面談でお聞かせください。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
ワークライフバランスは？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">残業時間を抑制し、柔軟な働き方を推奨しています。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
具体的にはどのような制度がありますか？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">社会保険完備、住宅手当、資格取得支援制度などがあります。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
育児休業制度はありますか？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">育児・介護休暇制度を整備しています。</div>
            </li>
          </ul>
        </section>
    
        <!-- 福利厚生について -->
        <section id="job-benefits" class="page-faq__section faq-section">
          <h2 class="faq-section__title">福利厚生について</h2>
          <ul class="faq-section__list faq-list">
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
どのような福利厚生制度がありますか？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">社会保険完備、住宅手当、資格取得支援制度などがあります。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
財形貯蓄制度の内容は？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">財形貯蓄を支援する制度です。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
社内イベントの内容は？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">定期的に懇親会や社内イベントを実施しています。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
部活動について教えてください。
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">確定拠出年金制度を導入しています。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
                資格取得支援制度はいくら補助が出ますか？
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">平均80%以上の取得率です。</div>
            </li>
            <li class="faq-list__item">
              <button class="faq-list__question" aria-expanded="false">
                年次有給休暇について教えてください
                <span class="faq-list__icon">
                  <span></span>
                  <span></span>
                </span>
              </button>
              <div class="faq-list__answer">入社時から10日付与され、年次に応じて最大20日まで取得可能です。取得率は80%以上を維持しています。</div>
            </li>
          </ul>
        </section>
      </div>
    </div>
<?php get_footer(); ?>
