
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
// function remove_admin_bar() {
//     return false;
// }
// add_filter('show_admin_bar', 'remove_admin_bar');

// // 投稿を「ブログ」に変更
// function change_post_menu_label() {
//     global $menu, $submenu;
//     $menu[5][0] = 'ブログ'; // 投稿のメニュー名
//     $submenu['edit.php'][5][0] = 'ブログ一覧'; // 投稿一覧
//     $submenu['edit.php'][10][0] = '新規追加'; // 新規追加
//     $submenu['edit.php'][15][0] = 'カテゴリー'; // カテゴリー
//     $submenu['edit.php'][16][0] = 'タグ'; // タグ
// }
// add_action( 'admin_menu', 'change_post_menu_label' );

// function change_post_object_label() {
//     global $wp_post_types;
//     $labels = &$wp_post_types['post']->labels;
//     $labels->name = 'ブログ';
//     $labels->singular_name = 'ブログ';
//     $labels->add_new = '新規追加';
//     $labels->add_new_item = '新規ブログを追加';
//     $labels->edit_item = 'ブログを編集';
//     $labels->new_item = '新規ブログ';
//     $labels->view_item = 'ブログを表示';
//     $labels->search_items = 'ブログを検索';
//     $labels->not_found = 'ブログが見つかりません';
//     $labels->not_found_in_trash = 'ゴミ箱にブログはありません';
// }
// add_action( 'init', 'change_post_object_label' );

/* --------------------------------------------
/* ブログ投稿画面に「アイキャッチ画像」を追加
/* -------------------------------------------- */

// アイキャッチ画像（投稿サムネイル）を有効化
add_theme_support( 'post-thumbnails' );

// デフォルトのアイキャッチサイズ（ブログ詳細用）
set_post_thumbnail_size( 800, 500, true ); // 幅800px, 高さ500px, トリミングあり

// ブログカード用のサムネイルサイズを追加
add_image_size( 'blog-card-thumb', 400, 250, true ); // 幅400px, 高さ250px, トリミングあり

/* --------------------------------------------
/* 投稿記事を複製する
/* -------------------------------------------- */
// 投稿を複製するリンクを投稿一覧に追加
function add_duplicate_post_link( $actions, $post ) {
    if ( current_user_can( 'edit_posts' ) ) {
        $actions['duplicate'] = '<a href="' . wp_nonce_url(
            admin_url( 'admin.php?action=duplicate_post_as_draft&post=' . $post->ID ),
            basename(__FILE__),
            'duplicate_nonce'
        ) . '" title="この投稿を複製" rel="permalink">複製</a>';
    }
    return $actions;
}
add_filter( 'post_row_actions', 'add_duplicate_post_link', 10, 2 );

// 複製処理本体
function duplicate_post_as_draft() {
    global $wpdb;

    // IDが存在しない場合は終了
    if ( ! ( isset( $_GET['post'] ) || isset( $_POST['post'] ) ) ) {
        wp_die( '複製する投稿が指定されていません。' );
    }

    // 投稿ID取得
    $post_id = ( isset( $_GET['post'] ) ? intval( $_GET['post'] ) : intval( $_POST['post'] ) );
    $post = get_post( $post_id );

    // 投稿が存在する場合
    if ( $post ) {
        $new_post = array(
            'post_title'    => $post->post_title . '（複製）',
            'post_content'  => $post->post_content,
            'post_status'   => 'draft', // 下書きとして保存
            'post_author'   => get_current_user_id(),
            'post_type'     => $post->post_type,
            'post_excerpt'  => $post->post_excerpt,
            'post_category' => wp_get_post_categories( $post_id ),
        );

        // 新しい投稿を挿入
        $new_post_id = wp_insert_post( $new_post );

        // タクソノミーをコピー
        $taxonomies = get_object_taxonomies( $post->post_type );
        foreach ( $taxonomies as $taxonomy ) {
            $terms = wp_get_object_terms( $post_id, $taxonomy, array( 'fields' => 'slugs' ) );
            wp_set_object_terms( $new_post_id, $terms, $taxonomy, false );
        }

        // メタ情報をコピー
        $post_meta = $wpdb->get_results( $wpdb->prepare("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=%d", $post_id ) );
        if ( $post_meta ) {
            foreach ( $post_meta as $meta ) {
                if ( $meta->meta_key == '_wp_old_slug' ) continue;
                add_post_meta( $new_post_id, $meta->meta_key, maybe_unserialize( $meta->meta_value ) );
            }
        }

        // 編集画面にリダイレクト
        wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
        exit;
    } else {
        wp_die( '投稿の複製に失敗しました。' );
    }
}
add_action( 'admin_action_duplicate_post_as_draft', 'duplicate_post_as_draft' );

/* --------------------------------------------
/* カスタムパンくずリスト
/* -------------------------------------------- */
function my_breadcrumb() {
    echo '<a href="' . home_url() . '">TOP</a>';

    if (is_page() && !is_front_page()) {
        echo ' &gt; ';
        echo get_the_title();
    } elseif (is_single()) {
        echo ' &gt; ';
        $category = get_the_category();
        if ($category) {
        echo esc_html($category[0]->name);
        echo ' &gt; ';
        }
        echo get_the_title();
    } elseif (is_archive()) {
        echo ' &gt; ';
        echo post_type_archive_title();
    }
}


/* --------------------------------------------
/* // パンくずのラベルを英語に変換
/* -------------------------------------------- */

add_filter('bcn_breadcrumb_title', function($title, $type, $id){
    $replace = [
        'TETOTEについて' => 'ABOUT US',
        'TOPページ' => 'TOP',
        'エントリー' => 'ENTRY',
        'エントリー完了' => 'ENTRY',
        'よくある質問' => 'FAQ',
        '募集要項' => 'RECRUIT',
        '採用ブログ' => 'BLOG',
        '研修制度とキャリアパス' => 'CAREER',
        '福利厚生について' => 'BENEFITS',
        'スタッフ' => 'STAFF',
    ];

    if(array_key_exists($title, $replace)){
        return $replace[$title];
    }

    return $title;
}, 10, 3);

/* --------------------------------------------
/* パンくずの先頭（ホームリンク）だけ TOP にする
/* -------------------------------------------- */
add_filter('bcn_breadcrumb_title', function($title, $type, $id){
    // パンくずの "home" タイプを判定
    if (in_array('home', (array) $type, true)) {
        return 'TOP'; // 強制的に TOP に置き換え
    }
    return $title;
}, 10, 3);

