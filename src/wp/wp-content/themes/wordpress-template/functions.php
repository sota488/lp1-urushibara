<?php
/**
 * プラグインの追加作業等の処理を禁止にする
 */
// define('DISALLOW_FILE_EDIT', true);
// define('DISALLOW_FILE_MODS', true);

/**
 * 更新通知を非表示
 */
function update_nag_hide() {
	remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action( 'admin_init', 'update_nag_hide' );

/**
 * メニューの非表示
 */
function remove_menus () {
	global $menu;
	unset($menu[5]);  // 投稿
	unset($menu[25]); // コメント
	// unset($menu[65]); // プラグイン
	// unset($menu[70]); // プロフィール
	// unset($menu[75]); // ツール
	// unset($menu[80]); // 設定
	// unset($menu[90]); // メニューの線3
}
add_action('admin_menu', 'remove_menus');

/**
 * ログイン時の管理ツールバーを非表示
 */
show_admin_bar( false );


/**
 * Yoastでtitleタグ表示処理
 */
add_theme_support( 'title-tag' );

/**
 * RSSフィードの有効化
 */
add_theme_support( 'automatic-feed-links' );

/**
 * アイキャッチ画像の入力表示
 */
add_theme_support( 'post-thumbnails' );

/**
 * the_excerptの改修
 */
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Yoast WordPress SEOからのCanonicalを無効に
 */
add_filter( 'wpseo_canonical', '__return_false' );


/**
 * News ====================================================
 */
add_action('init', 'my_custom_news');
function my_custom_news()
{
  $labels = array(
    'name' => _x('ニュース', 'post type general name'),
    'singular_name' => _x('news', 'post type singular name'),
    'add_new' => _x('新しくニュースを書く', 'news'),
    'add_new_item' => __('ニュース記事を書く'),
    'edit_item' => __('ニュース記事を編集'),
    'new_item' => __('新しいニュース記事'),
    'view_item' => __('ニュース記事を見る'),
    'search_staff' => __('ニュース記事を探す'),
    'not_found' =>  __('ニュース記事はありません'),
    'not_found_in_trash' => __('ゴミ箱にニュース記事はありません'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array(
      "slug" => "news",
      "with_front" => false
    ),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','excerpt','thumbnail','revisions'),
    'has_archive' => true
  );
  register_post_type('news',$args);
}
/** ---- ニュースタクソノミー追加 ---- **/
add_action ('init','create_newscat_taxonomy','0');
function create_newscat_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('newscat','post type general name'),
	'singular_name' => _x('newscat','post type singular name'),
	'search_items' => __('newscat'),
	'all_items' => __('newscat'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('ニュースカテゴリーを編集'),
	'add_new_item' => __('ニュースカテゴリーを書く'),
	'menu_name' => __( 'ニュースカテゴリー' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'newscat' )
	);
	register_taxonomy('newscat','news',$args);
}


/**
 * Artist ====================================================
 */
add_action('init', 'my_custom_artist');
function my_custom_artist()
{
  $labels = array(
    'name' => _x('アーティスト', 'post type general name'),
    'singular_name' => _x('artist', 'post type singular name'),
    'add_new' => _x('新しくアーティストを書く', 'artist'),
    'add_new_item' => __('アーティスト記事を書く'),
    'edit_item' => __('アーティスト記事を編集'),
    'new_item' => __('新しいアーティスト記事'),
    'view_item' => __('アーティスト記事を見る'),
    'search_staff' => __('アーティスト記事を探す'),
    'not_found' =>  __('アーティスト記事はありません'),
    'not_found_in_trash' => __('ゴミ箱にアーティスト記事はありません'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array(
      "slug" => "artist",
      "with_front" => false
    ),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','excerpt','thumbnail','revisions'),
    'has_archive' => true
  );
  register_post_type('artist',$args);
}
/** ---- アーティストタクソノミー追加 ---- **/
add_action ('init','create_artistcat_taxonomy','0');
function create_artistcat_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('artistcat','post type general name'),
	'singular_name' => _x('artistcat','post type singular name'),
	'search_items' => __('artistcat'),
	'all_items' => __('artistcat'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('アーティストカテゴリーを編集'),
	'add_new_item' => __('アーティストカテゴリーを書く'),
	'menu_name' => __( 'アーティストカテゴリー' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'artistcat' )
	);
	register_taxonomy('artistcat','artist',$args);
}


/**
 * Event ====================================================
 */
add_action('init', 'my_custom_event');
function my_custom_event()
{
  $labels = array(
    'name' => _x('イベント', 'post type general name'),
    'singular_name' => _x('event', 'post type singular name'),
    'add_new' => _x('新しくイベントを書く', 'event'),
    'add_new_item' => __('イベント記事を書く'),
    'edit_item' => __('イベント記事を編集'),
    'new_item' => __('新しいイベント記事'),
    'view_item' => __('イベント記事を見る'),
    'search_staff' => __('イベント記事を探す'),
    'not_found' =>  __('イベント記事はありません'),
    'not_found_in_trash' => __('ゴミ箱にイベント記事はありません'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array(
      "slug" => "event",
      "with_front" => false
    ),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','excerpt','thumbnail','revisions'),
    'has_archive' => true
  );
  register_post_type('event',$args);
}
/** ---- イベントタクソノミー追加 ---- **/
add_action ('init','create_eventcat_taxonomy','0');
function create_eventcat_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('eventcat','post type general name'),
	'singular_name' => _x('eventcat','post type singular name'),
	'search_items' => __('eventcat'),
	'all_items' => __('eventcat'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('イベントカテゴリーを編集'),
	'add_new_item' => __('イベントカテゴリーを書く'),
	'menu_name' => __( 'イベントカテゴリー' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'eventcat' )
	);
	register_taxonomy('eventcat','event',$args);
}

/**
 * Report ====================================================
 */
add_action('init', 'my_custom_report');
function my_custom_report()
{
  $labels = array(
    'name' => _x('レポート', 'post type general name'),
    'singular_name' => _x('report', 'post type singular name'),
    'add_new' => _x('新しくレポートを書く', 'report'),
    'add_new_item' => __('レポート記事を書く'),
    'edit_item' => __('レポート記事を編集'),
    'new_item' => __('新しいレポート記事'),
    'view_item' => __('レポート記事を見る'),
    'search_staff' => __('レポート記事を探す'),
    'not_found' =>  __('レポート記事はありません'),
    'not_found_in_trash' => __('ゴミ箱にレポート記事はありません'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array(
      "slug" => "report",
      "with_front" => false
    ),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','excerpt','thumbnail','revisions'),
    'has_archive' => true
  );
  register_post_type('report',$args);
}
/** ---- レポートタクソノミー追加 ---- **/
add_action ('init','create_reportcat_taxonomy','0');
function create_reportcat_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('reportcat','post type general name'),
	'singular_name' => _x('reportcat','post type singular name'),
	'search_items' => __('reportcat'),
	'all_items' => __('reportcat'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('レポートカテゴリーを編集'),
	'add_new_item' => __('レポートカテゴリーを書く'),
	'menu_name' => __( 'レポートカテゴリー' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'reportcat' )
	);
	register_taxonomy('reportcat','report',$args);
}
