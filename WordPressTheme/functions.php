
<?php
/* --------------------------------------------
/* スクリプトとCSSを読み込む
/* -------------------------------------------- */
function add_custom_scripts() {
    // ファビコン
    echo '<link rel="icon" href="' . get_theme_file_uri('/assets/images/common/tetote-favicon.ico') . '">';

    // Google Fonts Preconnect
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';

    // Google Fonts: Noto Sans JP
    echo '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">';
    // Google Fonts: Viga
    echo '<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">';
    // Google Fonts: Poppins
    echo '<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">';

    // CSS
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style(
        'theme-style',
        get_theme_file_uri('/assets/css/style.css'),
        array('swiper'),
        '250923_1253'
    );

    // JavaScript
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script(
        'theme-script',
        get_theme_file_uri('/assets/js/script.js'),
        array('jquery', 'swiper-js'),
        '250923_1253',
        true
    );
}
add_action('wp_enqueue_scripts', 'add_custom_scripts');

/* --------------------------------------------
/* 管理画面の黒いバーが邪魔なので消す
/* -------------------------------------------- */
function remove_admin_bar() {
    return false;
}
add_filter('show_admin_bar', 'remove_admin_bar');
