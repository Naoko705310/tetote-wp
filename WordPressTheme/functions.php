<?php
/* --------------------------------------------
/* スクリプトとCSSを読み込む
/* -------------------------------------------- */
function add_custom_scripts()
{
    // ==============================================
    // 1. <head>タグ内に直接出力する要素
    // ==============================================

    // ファビコン（サイトのアイコン）
    // get_theme_file_uri()でテーマフォルダ直下からの絶対パスを取得しています
    echo '<link rel="icon" href="' . get_theme_file_uri('/assets/images/common/tetote-favicon.ico') . '">';

    // Google Fontsを高速に読み込むためのPreconnect（事前接続）設定
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';

    // Google Fonts: Noto Sans JP の読み込み
    echo '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">';
    // Google Fonts: Viga の読み込み
    echo '<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">';
    // Google Fonts: Poppins の読み込み
    echo '<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">';

    // ==============================================
    // 2. CSSファイルをWordPressの標準機能で読み込む
    // ==============================================
    // wp_enqueue_style( 'ハンドル名', 'ファイルのURL', '依存関係', 'バージョン' );

    // 外部ライブラリ Swiper のCSSを読み込む
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    
    // メインのテーマCSS (style.css) を読み込む
    wp_enqueue_style(
        'theme-style', // ハンドル名：このCSSを識別するための名前
        get_theme_file_uri('/assets/css/style.css'), // テーマフォルダからのパスを取得
        array('swiper'), // 依存関係：SwiperのCSSの後に読み込まれるように指定
        '250923_1253' // バージョン：ブラウザのキャッシュ対策
    );

    // ==============================================
    // 3. JavaScriptファイルをWordPressの標準機能で読み込む
    // ==============================================
    // wp_enqueue_script( 'ハンドル名', 'ファイルのURL', '依存関係', 'バージョン', 'footerで読み込むか' );
    
    // jQuery本体をCDNから読み込む (多くのJSが依存するため、まずこれを読み込む)
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);
    
    // Swiper のJavaScript本体を読み込む
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), null, true);
    
    // メインのテーマJS (script.js) を読み込む
    wp_enqueue_script(
        'theme-script', // ハンドル名：このJSを識別するための名前
        get_theme_file_uri('/assets/js/script.js'), // テーマフォルダからのパスを取得
        array('jquery', 'swiper-js'), // 依存関係：jQueryとSwiperの後に読み込まれるように指定
        '250923_1253', // バージョン：ブラウザのキャッシュ対策
        true // </body>直前（フッター）で読み込む設定
    );

    // ==============================================
    // 4. PHPの情報をJavaScriptに渡す（ローカライズ）
    // ==============================================
    // wp_localize_script( 'ターゲットのハンドル名', 'JS変数名', '渡したいデータ配列' );
    
    // 'theme-script' に対して、テーマURLを 'themeUrl' というオブジェクト名で渡す
    // JavaScript内では 'themeUrl.url' としてテーマパスにアクセスできるようになる
    wp_localize_script(
        'theme-script', // ターゲットのJS：テーマのスクリプトに対して変数を定義
        'themeUrl',     // JSでアクセスするオブジェクト名
        array(
            'url' => get_theme_file_uri() // 渡したいデータ。キー 'url' の値としてテーマの基本URLを設定
        )
    );
}
// WordPressに「wp_enqueue_scripts」というアクション（処理のタイミング）で実行するよう登録
add_action('wp_enqueue_scripts', 'add_custom_scripts');

/* --------------------------------------------
/* 管理画面の黒いバーが邪魔なので消す
/* -------------------------------------------- */
function remove_admin_bar()
{
    return false;
}
add_filter('show_admin_bar', 'remove_admin_bar');

/* --------------------------------------------
/* ブログ投稿画面に「アイキャッチ画像」を追加
/* -------------------------------------------- */

// アイキャッチ画像（投稿サムネイル）を有効化
add_theme_support('post-thumbnails');

// デフォルトのアイキャッチサイズ（ブログ詳細用）
set_post_thumbnail_size(800, 500, true); // 幅800px, 高さ500px, トリミングあり

// ブログカード用のサムネイルサイズを追加
add_image_size('blog-card-thumb', 400, 250, true); // 幅400px, 高さ250px, トリミングあり

/* --------------------------------------------
/* 投稿記事を複製する
/* -------------------------------------------- */
// 投稿を複製するリンクを投稿一覧に追加
function add_duplicate_post_link($actions, $post)
{
    if (current_user_can('edit_posts')) {
        $actions['duplicate'] = '<a href="' . wp_nonce_url(
            admin_url('admin.php?action=duplicate_post_as_draft&post=' . $post->ID),
            basename(__FILE__),
            'duplicate_nonce'
        ) . '" title="この投稿を複製" rel="permalink">複製</a>';
    }
    return $actions;
}
add_filter('post_row_actions', 'add_duplicate_post_link', 10, 2);

// 複製処理本体
function duplicate_post_as_draft()
{
    global $wpdb;

    // IDが存在しない場合は終了
    if (! (isset($_GET['post']) || isset($_POST['post']))) {
        wp_die('複製する投稿が指定されていません。');
    }

    // 投稿ID取得
    $post_id = (isset($_GET['post']) ? intval($_GET['post']) : intval($_POST['post']));
    $post = get_post($post_id);

    // 投稿が存在する場合
    if ($post) {
        $new_post = array(
            'post_title'    => $post->post_title . '（複製）',
            'post_content'  => $post->post_content,
            'post_status'   => 'draft', // 下書きとして保存
            'post_author'   => get_current_user_id(),
            'post_type'     => $post->post_type,
            'post_excerpt'  => $post->post_excerpt,
            'post_category' => wp_get_post_categories($post_id),
        );

        // 新しい投稿を挿入
        $new_post_id = wp_insert_post($new_post);

        // タクソノミーをコピー
        $taxonomies = get_object_taxonomies($post->post_type);
        foreach ($taxonomies as $taxonomy) {
            $terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
            wp_set_object_terms($new_post_id, $terms, $taxonomy, false);
        }

        // メタ情報をコピー
        $post_meta = $wpdb->get_results($wpdb->prepare("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=%d", $post_id));
        if ($post_meta) {
            foreach ($post_meta as $meta) {
                if ($meta->meta_key == '_wp_old_slug') continue;
                add_post_meta($new_post_id, $meta->meta_key, maybe_unserialize($meta->meta_value));
            }
        }

        // 編集画面にリダイレクト
        wp_redirect(admin_url('post.php?action=edit&post=' . $new_post_id));
        exit;
    } else {
        wp_die('投稿の複製に失敗しました。');
    }
}
add_action('admin_action_duplicate_post_as_draft', 'duplicate_post_as_draft');

/* --------------------------------------------
/* カスタムパンくずリスト
/* -------------------------------------------- */
function my_breadcrumb()
{
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
/* パンくずのラベルを英語に変換
/* -------------------------------------------- */
add_filter('bcn_breadcrumb_title', function ($title, $type, $id) {
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
        // 修正点: カスタム投稿タイプの現在の日本語ラベルを追加
        'スタッフ情報' => 'STAFF', 
    ];

    if (array_key_exists($title, $replace)) {
        return $replace[$title];
    }

    return $title;
}, 10, 3);

/* --------------------------------------------
/* パンくずの先頭（ホームリンク）だけ TOP にする
/* -------------------------------------------- */
add_filter('bcn_breadcrumb_title', function ($title, $type, $id) {
    // パンくずの "home" タイプを判定
    if (in_array('home', (array) $type, true)) {
        return 'TOP'; // 強制的に TOP に置き換え
    }
    return $title;
}, 10, 3);

/* --------------------------------------------
/* パンくずの最終項目をスラッグに変換
/* -------------------------------------------- */
add_filter('bcn_breadcrumb_title', 'convert_staff_title_to_slug', 9, 3);

function convert_staff_title_to_slug($title, $type, $id) {
    // カスタム投稿タイプ 'staff' の個別記事ページの場合のみ実行
    if (get_post_type($id) === 'staff' && in_array('post', $type)) {
        // 投稿スラッグを取得
        $slug = get_post_field('post_name', $id);
        
        // 大文字に変換して返す (例: nishimura -> NISHIMURA)
        return strtoupper($slug);
    }
    
    return $title;
}

/* --------------------------------------------
/* Contact Form 7で自動挿入されるPタグ、brタグを削除
/* -------------------------------------------- */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

/* --------------------------------------------
/* 「投稿」メニュー名を「採用ブログ」に変更
/* -------------------------------------------- */
function change_post_menu_label() {
    global $menu;
    global $submenu;
    
    // メインメニューの変更
    $menu[5][0] = '採用ブログ';
    
    // サブメニュー（投稿一覧、新規追加など）の変更
    $submenu['edit.php'][5][0]  = '採用ブログ一覧';
    $submenu['edit.php'][10][0] = '採用ブログを追加';
    $submenu['edit.php'][16][0] = 'タグ'; // タグ名も変更が必要な場合はここで
}
add_action( 'admin_menu', 'change_post_menu_label' );

/* 投稿（Post Type）のラベル名も変更 */
function change_post_object_label() {
    global $wp_post_types;
    $name = '採用ブログ';
    $singular_name = '採用ブログ';
    
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $singular_name;
    $labels->add_new = _x('追加', $singular_name);
    $labels->add_new_item = $singular_name.'の追加';
    $labels->edit_item = $singular_name.'の編集';
    $labels->new_item = '新規'.$singular_name;
    $labels->view_item = $singular_name.'を表示';
    $labels->search_items = $singular_name.'を検索';
    $labels->not_found = '採用ブログが見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$singular_name.'は見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );

/* --------------------------------------------
/* Contact Form 7の管理メニュー名を変更
/* -------------------------------------------- */
add_action('admin_menu', 'rename_cf7_menu');

function rename_cf7_menu() {
    // Contact Form 7 のメニューをフックし、ラベル名を変更
    global $menu;

    foreach ($menu as $key => $value) {
        // メニューのスラッグが 'wpcf7' で始まる項目を探す
        if (strpos($value[2], 'wpcf7') !== false) {
            // ラベル名を 'エントリーフォーム' に変更
            $menu[$key][0] = 'エントリーフォーム'; 
        }
    }
}

/* --------------------------------------------
/* All-in-One WP Migration のインポートサイズ制限を緩和
/* -------------------------------------------- */
@ini_set( 'upload_max_filesize', '128M' ); // 最大アップロードサイズを128MBに設定
@ini_set( 'post_max_size', '128M' );     // POSTの最大サイズを128MBに設定
@ini_set( 'memory_limit', '256M' );      // メモリ制限を256MBに設定
@ini_set( 'max_execution_time', '300' ); // 実行時間を300秒に延長