"use strict";

jQuery(function ($) {

  /* --------------------------------------------
     共通機能（全ページ共通）
  -------------------------------------------- */

  /* --------------------------------------------
     ハンバーガーメニュー（トップ・下層共通）
  -------------------------------------------- */
  $('.js-hamburger').on('click', function () {
    $(this).toggleClass('is-active');           // ハンバーガー自身のON/OFF
    $('.js-header-nav').toggleClass('is-active'); // ナビ開閉
    $('.js-header').toggleClass('is-active');     // ヘッダー全体の状態
    $('body').toggleClass('is-fixed');            // 背景スクロール制御

    // ロゴ差し替え（SP・PC共通）
    var $logoImg = $('.header__logo img');
    if ($('.js-header').hasClass('is-active')) {
      $logoImg.attr('src', themeUrl.url + '/assets/images/common/tetote-logo.svg'); // 黒ロゴ **<= 修正**
    } else {
      $logoImg.attr('src', themeUrl.url + '/assets/images/common/tetote-logo-white.svg'); // 白ロゴ **<= 修正**
    }
  });

  // ナビ内のリンクをクリックしたらメニューを閉じる
  $('.js-header-link').on('click', function () {
    $('.js-hamburger').removeClass('is-active');
    $('.js-header-nav').removeClass('is-active');
    $('.js-header').removeClass('is-active');
    $('body').removeClass('is-fixed'); // 背景スクロール解除

    // ロゴを白に戻す（SP・PC共通）
    $('.header__logo img').attr('src', themeUrl.url + '/assets/images/common/tetote-logo-white.svg'); // 白ロゴ **<= 修正**
  });

  /* --------------------------------------------
     トップページ専用
     FVを過ぎたらpage-header風デザインに切替
  -------------------------------------------- */
  if ($('#top-fv').length) {
    var $header   = $('.js-header');
    var $topFv    = $('#top-fv');
    var $logoImg  = $('.header__logo img');
    var fvHeight  = $topFv.outerHeight(); // FVセクションの高さを取得

    $(window).on('scroll', function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > fvHeight) {
        $header.addClass('is-scrolled');
        $logoImg.attr('src', themeUrl.url + '/assets/images/common/tetote-logo.svg'); // 黒ロゴ **<= 修正**
      } else {
        $header.removeClass('is-scrolled');
        $logoImg.attr('src', themeUrl.url + '/assets/images/common/tetote-logo-white.svg'); // 白ロゴ **<= 修正**
      }
    });
  }

  /* --------------------------------------------
     index.html(topページ)専用機能
  -------------------------------------------- */

  // 各セクションの要素をふわっと表示
  $(function () {
    if ($('#top-fv').length) {
      var $fadeElements = $('.js-fade-in');
      var checkFadeIn = function () {
        $fadeElements.each(function () {
          var $element = $(this);
          var elementTop = $element.offset().top;
          var elementBottom = elementTop + $element.outerHeight();
          var windowTop = $(window).scrollTop();
          var windowBottom = windowTop + $(window).height();
          if (elementBottom > windowTop && elementTop < windowBottom) {
            $element.addClass('is-animated');
          }
        });
      };
      checkFadeIn();
      $(window).on('scroll', checkFadeIn);
    }
  });

  // FVスライダー(12.0.2に変更)
  // FVスライダー
  $(function () {
    if ($('#top-fv').length) {
      var topFvSwiper = new Swiper('.js-top-fv-swiper', {
        loop: false, // ループ無効
        autoplay: { 
          delay: 4000, 
          disableOnInteraction: false 
        },
        effect: 'fade',
        fadeEffect: { 
          crossFade: true 
        },
        speed: 800
      });
    }
  });







  // FVスライダー
// $(window).on('load', function () { 
//   if ($('#top-fv').length) {
//     var topFvSwiper = new Swiper('.js-top-fv-swiper', {
//       loop: true,
//       autoplay: { delay: 4000, disableOnInteraction: false },
//       effect: 'fade',
//       fadeEffect: { crossFade: true },
//       speed: 800,
//       pagination: { el: '.swiper-pagination', clickable: true },
//       navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }
//     });
    
//     // -----------------------------------------------------------------
//     // 【修正・追加】初期化後にオートプレイを強制的にリスタート
//     // -----------------------------------------------------------------
//     // Swiperインスタンスが正しく作成されたことを確認（念のため）
//     if (topFvSwiper.autoplay) {
//       topFvSwiper.autoplay.stop(); // 一度停止
      
//       // わずかな遅延後に強制的に開始
//       setTimeout(function() {
//         topFvSwiper.autoplay.start(); 
//         console.log('Swiper Autoplayを強制開始');
//       }, 50); // 50ミリ秒程度のわずかな遅延
//     }

//     // 以前提案した強制アップデートも残しておくことを推奨します
//     setTimeout(function() {
//       topFvSwiper.update();
//       $(window).trigger('resize');
//     }, 100); 
//     // -----------------------------------------------------------------
//   }
// });

  // 1枚目だけ表示されたが動かないコード
  // 【変更点】DOM Ready ( $(function()) ) から Window Load ( $(window).on('load', ...) ) に変更
  // $(window).on('load', function () { 
  //   if ($('#top-fv').length) {
  //     var topFvSwiper = new Swiper('.js-top-fv-swiper', {
  //       loop: true,
  //       autoplay: { delay: 4000, disableOnInteraction: false },
  //       effect: 'fade',
  //       fadeEffect: { crossFade: true },
  //       speed: 800,
  //       pagination: { el: '.swiper-pagination', clickable: true },
  //       navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }
  //     });
      
  //     // 解決しない場合に備えて、念のため強制アップデートを100ms後に実行する
  //     setTimeout(function() {
  //       topFvSwiper.update();
  //       // window.resizeも同時にトリガー
  //       $(window).trigger('resize');
  //     }, 100); 
  //   }
  // });

  // 最初のコード
  // $(function () {
  //   if ($('#top-fv').length) {
  //     var topFvSwiper = new Swiper('.js-top-fv-swiper', {
  //       loop: true,
  //       autoplay: { delay: 4000, disableOnInteraction: false }, // 例: 4秒待機
  //       // autoplay: { delay: 3000, disableOnInteraction: false },
  //       effect: 'fade',
  //       fadeEffect: { crossFade: true },
  //       speed: 800, // 修正：トランジション速度を標準的な値に短縮
  //       // speed: 5000,
  //       pagination: { el: '.swiper-pagination', clickable: true },
  //       navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }
  //     });
  //   }
  // });

  // メッセージスワイパー
  $(function () {
    if ($('#top-fv').length) {
      var topMessageSwiper = new Swiper('.js-top-message-swiper', {
        loop: true,
        autoplay: { delay: 0, disableOnInteraction: false, reverseDirection: false },
        speed: 8000,
        freeMode: { enabled: true, momentum: false },
        slidesPerView: 'auto',
        spaceBetween: 34,
        pagination: { el: '.top-message__pagination', clickable: true },
        allowTouchMove: false
      });
    }
  });

  // スタッフカードスワイパー
  $(function () {
    if ($('#top-fv').length) {
      var $swiperWrapper = $('.js-top-member-swiper .swiper-wrapper');
      var $slides = $swiperWrapper.children('.swiper-slide');
      var shuffledSlides = $slides.toArray().sort(function () {
        return Math.random() - 0.5;
      });
      $swiperWrapper.empty().append(shuffledSlides);

      var topMemberSwiper = new Swiper('.js-top-member-swiper', {
        loop: true,
        loopAdditionalSlides: 2,
        autoplay: { delay: 4000, disableOnInteraction: false },
        speed: 1000,
        slidesPerView: 'auto',
        spaceBetween: 23,
        centeredSlides: false,
        freeMode: { enabled: true },
        navigation: { nextEl: '.top-member__next', prevEl: '.top-member__prev' },
        breakpoints: {
          768: { slidesPerView: 2.5, spaceBetween: 30 },
          1024: { slidesPerView: 2.5, spaceBetween: 35 },
          1440: { slidesPerView: 3.5, spaceBetween: 43 }
        }
      });
    }
  });

  /* --------------------------------------------
     staff-details.html(スタッフ紹介ページ)専用機能
  -------------------------------------------- */

  // サイドバー目次のハイライト
  $(function () {
    if ($('.staff-interview__section').length) {
      var $sidebarLinks = $('.interview-sidebar__link');
      var $sections = $('.staff-interview__section');

      $sidebarLinks.on('click', function (e) {
        e.preventDefault();
        var targetId = $(this).attr('href');
        var $targetSection = $(targetId);
        if ($targetSection.length) {
          $sections.removeClass('has-scroll-margin');
          $targetSection.addClass('has-scroll-margin');
          $('html, body').animate({ scrollTop: $targetSection.offset().top - 121 }, 800);
        }
      });

      $(window).on('scroll', function () {
        var scrollTop = $(window).scrollTop();
        var windowHeight = $(window).height();
        var offset = windowHeight / 3;
        var currentSection = '';
        $sections.each(function () {
          var $section = $(this);
          var sectionTop = $section.offset().top;
          var sectionHeight = $section.outerHeight();
          if (scrollTop + offset >= sectionTop && scrollTop + offset < sectionTop + sectionHeight) {
            currentSection = $section.attr('id');
          }
        });
        $sidebarLinks.removeClass('is-active');
        if (currentSection) {
          $sidebarLinks.filter('[href="#' + currentSection + '"]').addClass('is-active');
        }
      });

      $(window).trigger('scroll');
    }
  });

  // other-members__list をランダム表示
  $(function () {
    if ($('.other-members__items').length) {
      var $otherMembersList = $('.other-members__items');
      var $memberItems = $otherMembersList.children('.other-members__item');
      var shuffledItems = $memberItems.toArray().sort(function () {
        return Math.random() - 0.5;
      });
      $otherMembersList.empty().append(shuffledItems);
    }
  });

  /* --------------------------------------------
     details.html, faq.html (募集要項とFAQ)専用機能
  -------------------------------------------- */

  // カテゴリータグクリックでスクロール
  $(function () {
    if ($('.category-tag__link').length) {
      var $categoryLinks = $('.category-tag__link');
      var headerHeight = $('.js-header').outerHeight() || 100;
      $categoryLinks.on('click', function (e) {
        e.preventDefault();
        var targetId = $(this).attr('href');
        var $targetSection = $(targetId);
        if ($targetSection.length) {
          $('html, body').animate({
            scrollTop: $targetSection.offset().top - headerHeight - 20
          }, 800);
        }
      });
    }
  });

  // FAQアコーディオン
  $(function () {
    if ($('.faq-list__question').length) {
      var $faqQuestions = $('.faq-list__question');
      $faqQuestions.on('click', function () {
        var $question = $(this);
        var $answer = $question.next('.faq-list__answer');
        var isExpanded = $question.attr('aria-expanded') === 'true';
        if (isExpanded) {
          $question.attr('aria-expanded', 'false');
          $answer.slideUp(300);
        } else {
          $question.attr('aria-expanded', 'true');
          $answer.slideDown(300);
        }
      });
    }
  });

  /* --------------------------------------------
     entry.html (エントリーページ)専用機能
  -------------------------------------------- */

  // フォームのバリデーション
  $(function () {
    if ($('.entry-form').length) {
      var $form = $('.entry-form');
      var $submitBtn = $('.entry-form__submit');
      var $requiredFields = $form.find('[required]');
      var $errorMessage = $('.entry-form__error-message');

      var checkRequiredFields = function () {
        var isValid = true;
        $requiredFields.each(function () {
          var $field = $(this);
          var value = $field.val().trim();
          if (value === '') {
            isValid = false;
            return false;
          }
          if ($field.attr('type') === 'radio') {
            var $radioGroup = $field.closest('.entry-form__radio-group');
            if ($radioGroup.find('input[type="radio"]:checked').length === 0) {
              isValid = false;
              return false;
            }
          }
          if ($field.attr('type') === 'checkbox') {
            if (!$field.is(':checked')) {
              isValid = false;
              return false;
            }
          }
        });

        $submitBtn.prop('disabled', !isValid);
        if (isValid) {
          $errorMessage.hide();
        } else {
          $errorMessage.show();
        }
      };

      $submitBtn.prop('disabled', true);
      $requiredFields.on('input change', checkRequiredFields);
      $form.find('input[type="radio"], input[type="checkbox"]').on('change', checkRequiredFields);
      checkRequiredFields();

      $form.on('submit', function (e) {
        e.preventDefault();
        if (!$submitBtn.prop('disabled')) {
          window.location.href = 'entry-thanks.html';
        } else {
          $errorMessage.show();
        }
      });
    }
  });

}); // ←これで全体のjQuery(function($){ ... }); を閉じる