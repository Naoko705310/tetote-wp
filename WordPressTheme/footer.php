    <!-- 全ページ共通CTA -->
    <section class="cta <?php echo is_front_page() ? 'top-cta' : 'page-cta'; ?>">
      <div class="cta__inner">
        <picture class="cta__image">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/cta-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/cta-sp.jpg" alt="ビルを上ビジネスマンたち" width="375" height="250">
        </picture>
        <!-- entry-box -->
        <div class="cta__box entry-box">
          <p>
            わたしたちと一緒に働く仲間を募集中です。<br>
            少数精鋭のチームで、<br>
            あなたも会社も一緒に成長していきましょう。
          </p>
          <a href="<?php echo get_permalink(get_page_by_path('entry')); ?>" class="entry-box__button button button--entry cta__button">ENTRY</a>
        </div>
      </div>
    </section>
    </main>
    <footer id="footer" class="footer top-footer">
      <div class="footer__inner">
        <!-- contents-wrapper *PC時の背景色エリア -->
        <div class="footer__contents-wrapper">
          <!-- ナビとSNS -->
          <div class="footer__nav-wrapper">
            <!-- footer-nav -->
            <nav class="footer__nav footer-nav">
              <ul class="footer-nav__items">
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/about/')); ?>">TETOTEについて</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/staff/')); ?>">人を知る</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/career/')); ?>">研修制度とキャリアパス</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/benefits/')); ?>">福利厚生</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/blog/')); ?>">採用ブログ</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/details/')); ?>">募集要項</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/about/')); ?>">会社概要</a></li>
              </ul>
            </nav>
            <!-- footer__sns -->
            <ul class="footer__sns footer-sns__items">
              <li class="footer-sns__item">
                <a href="#" target="_blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-facebook.png" alt="Facebook" class="footer-sns__icon" width="24" height="24" loading="lazy">
                </a>
              </li>
              <li class="footer-sns__item">
                <a href="#" target="_blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-twitter.png" alt="Twitter" class="footer-sns__icon" width="24" height="24" loading="lazy">
                </a>
              </li>
              <li class="footer-sns__item">
                <a href="#" target="_blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-youtube.png" alt="YouTube" class="footer-sns__icon" width="24" height="24" loading="lazy">
                </a>
              </li>
            </ul>
          </div>
          <!-- ロゴとcopyright -->
          <div class="footer__logo-wrapper">
            <!-- footer ロゴ -->
            <div class="footer__logo footer-logo">
              <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-logo.png" alt="TETOTEロゴ" width="250" height="61">
              </a>
            </div>
            <!-- footer コピーライト -->
            <div class="footer__copyright copyright">
              <p>&copy;<?php echo date('Y'); ?> TETOTE All Right Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>