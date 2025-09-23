<!-- 応募フォームページ -->
<?php get_header(); ?>
<main>
    <!-- パンくずリスト -->
    <nav class="page-fv__breadcrumb breadcrumb page-entry__breadcrumb" aria-label="パンくずリスト">
      <div class="breadcrumb__inner">
        <a href="./index.html">TOP</a>
        <span class="page-fv__breadcrumb-separator">&gt;</span>
        <span class="page-fv__breadcrumb-current">ENTRY</span>
      </div>
    </nav>
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
          <form class="page-entry__title--entry-form entry-form" action="#" method="post" novalidate>
            <fieldset class="entry-form__fieldset">
              <!-- <legend class="visually-hidden">応募者情報</legend> -->
              <!-- お名前 -->
              <div class="entry-form__field">
                <label for="name" class="entry-form__label">お名前 <span aria-hidden="true">※</span></label>
                <input type="text" id="name" name="name" class="entry-form__input" placeholder="例：山田太郎" required aria-required="true">
              </div>
    
              <!-- お名前カナ -->
              <div class="entry-form__field">
                <label for="name-kana" class="entry-form__label">お名前カナ <span aria-hidden="true">※</span></label>
                <input type="text" id="name-kana" name="name-kana" class="entry-form__input" placeholder="例：ヤマダタロウ" required aria-required="true">
              </div>
    
              <!-- メールアドレス -->
              <div class="entry-form__field">
                <label for="email" class="entry-form__label">メールアドレス <span aria-hidden="true">※</span></label>
                <input type="email" id="email" name="email" class="entry-form__input" placeholder="例：tetote@gmail.com" required aria-required="true">
              </div>
    
              <!-- 電話番号 -->
              <div class="entry-form__field">
                <label for="tel" class="entry-form__label">電話番号 <span aria-hidden="true">※</span></label>
                <input type="tel" id="tel" name="tel" class="entry-form__input" placeholder="例：00-0000-0000" required aria-required="true">
              </div>
    
              <!-- 生年月日 -->
              <div class="entry-form__field entry-form__field--birth">
                <label for="birth-year" class="entry-form__label">生年月日 <span aria-hidden="true">※</span></label>
                <div class="entry-form__birth-wrapper">
                  <div class="entry-form__birth-item">
                    <input type="number" id="birth-year" name="birth-year" class="entry-form__input entry-form__input--year" placeholder="例：2000" required aria-required="true">
                    <span class="entry-form__birth-unit">年</span>
                  </div>
                
                  <div class="entry-form__birth-item">
                    <select id="birth-month" name="birth-month" 
                            class="entry-form__select" required aria-required="true">
                      <option value="">選択してください</option>
                      <option value="1">1月</option>
                      <option value="2">2月</option>
                      <option value="3">3月</option>
                      <option value="4">4月</option>
                      <option value="5">5月</option>
                      <option value="6">6月</option>
                      <option value="7">7月</option>
                      <option value="8">8月</option>
                      <option value="9">9月</option>
                      <option value="10">10月</option>
                      <option value="11">11月</option>
                      <option value="12">12月</option>
                    </select>
                    <span class="entry-form__birth-unit">月</span>
                  </div>
                
                  <div class="entry-form__birth-item">
                    <select id="birth-day" name="birth-day" 
                            class="entry-form__select" required aria-required="true">
                      <option value="">選択してください</option>
                      <option value="1">1日</option>
                      <option value="2">2日</option>
                      <option value="3">3日</option>
                      <option value="4">4日</option>
                      <option value="5">5日</option>
                      <option value="6">6日</option>
                      <option value="7">7日</option>
                      <option value="8">8日</option>
                      <option value="9">9日</option>
                      <option value="10">10日</option>
                      <option value="11">11日</option>
                      <option value="12">12日</option>
                      <option value="13">13日</option>
                      <option value="14">14日</option>
                      <option value="15">15日</option>
                      <option value="16">16日</option>
                      <option value="17">17日</option>
                      <option value="18">18日</option>
                      <option value="19">19日</option>
                      <option value="20">20日</option>
                      <option value="21">21日</option>
                      <option value="22">22日</option>
                      <option value="23">23日</option>
                      <option value="24">24日</option>
                      <option value="25">25日</option>
                      <option value="26">26日</option>
                      <option value="27">27日</option>
                      <option value="28">28日</option>
                      <option value="29">29日</option>
                      <option value="30">30日</option>
                      <option value="31">31日</option>
                    </select>
                    <span class="entry-form__birth-unit">日</span>
                  </div>
                </div>                
              </div>
    
              <!-- 希望職種 -->
              <div class="entry-form__field entry-form__field--job">
                <label class="entry-form__label entry-form__label--job">希望職種 <span aria-hidden="true">※</span></label>
                <div class="entry-form__radio-group">
                  <label>
                    <input type="radio" name="job" value="consultant" required aria-required="true">
                    <span>コンサルタント</span>
                  </label>
                  <label>
                    <input type="radio" name="job" value="sales">
                    <span>ソリューション営業</span>
                  </label>
                  <label>
                    <input type="radio" name="job" value="engineer">
                    <span>システムエンジニア</span>
                  </label>
                </div>
              </div>
    
              <!-- 自己PR -->
              <div class="entry-form__field">
                <label for="pr" class="entry-form__label">自己PR <span aria-hidden="true">※</span></label>
                <textarea id="pr" name="pr" class="entry-form__textarea" rows="8" placeholder="例：志望動機、自己PR" required aria-required="true"></textarea>
              </div>
    
              <!-- 当社を知ったきっかけ -->
              <div class="entry-form__field entry-form__field--source">
                <label class="entry-form__label entry-form__label--source">当社を知ったきっかけを教えて下さい。</label>
                <div class="entry-form__checkbox-group">
                  <label><input type="checkbox" name="source" value="twitter"> X(旧Twitter)</label>
                  <label><input type="checkbox" name="source" value="facebook"> Facebook</label>
                  <label><input type="checkbox" name="source" value="instagram"> Instagram</label>
                  <label><input type="checkbox" name="source" value="search"> 検索広告</label>
                  <label><input type="checkbox" name="source" value="friend"> 知人友人・親戚</label>
                  <label><input type="checkbox" name="source" value="other"> その他</label>
                </div>
              </div>
    
              <!-- 個人情報保護 -->
              <div class="entry-form__field entry-form__field--consent">
                <label>
                  <input type="checkbox" name="privacy" value="agree" required aria-required="true">
                  個人情報保護方針に同意する
                </label>
              </div>

              <!-- エラーメッセージ -->
              <!-- <div class="entry-form__error-message" style="display: none;" role="alert" aria-live="polite">
                必須項目に入力がありません
              </div> -->
    
              <!-- 送信 -->
              <div class="entry-form__actions">
                <button type="submit" class="entry-form__submit">送信する</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
