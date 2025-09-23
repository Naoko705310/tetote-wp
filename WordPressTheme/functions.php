
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

// 投稿を「ブログ」に変更
function change_post_menu_label() {
    global $menu, $submenu;
    $menu[5][0] = 'ブログ'; // 投稿のメニュー名
    $submenu['edit.php'][5][0] = 'ブログ一覧'; // 投稿一覧
    $submenu['edit.php'][10][0] = '新規追加'; // 新規追加
    $submenu['edit.php'][15][0] = 'カテゴリー'; // カテゴリー
    $submenu['edit.php'][16][0] = 'タグ'; // タグ
}
add_action( 'admin_menu', 'change_post_menu_label' );

function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'ブログ';
    $labels->singular_name = 'ブログ';
    $labels->add_new = '新規追加';
    $labels->add_new_item = '新規ブログを追加';
    $labels->edit_item = 'ブログを編集';
    $labels->new_item = '新規ブログ';
    $labels->view_item = 'ブログを表示';
    $labels->search_items = 'ブログを検索';
    $labels->not_found = 'ブログが見つかりません';
    $labels->not_found_in_trash = 'ゴミ箱にブログはありません';
}
add_action( 'init', 'change_post_object_label' );
