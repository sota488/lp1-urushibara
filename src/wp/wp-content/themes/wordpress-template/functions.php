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
 * Blog ====================================================
 */
add_action('init', 'my_custom_blog');
function my_custom_blog()
{
  $labels = array(
    'name' => _x('ブログ', 'post type general name'),
    'singular_name' => _x('blog', 'post type singular name'),
    'add_new' => _x('新しくブログを書く', 'blog'),
    'add_new_item' => __('ブログ記事を書く'),
    'edit_item' => __('ブログ記事を編集'),
    'new_item' => __('新しいブログ記事'),
    'view_item' => __('ブログ記事を見る'),
    'search_staff' => __('ブログ記事を探す'),
    'not_found' =>  __('ブログ記事はありません'),
    'not_found_in_trash' => __('ゴミ箱にブログ記事はありません'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array(
      "slug" => "blog",
      "with_front" => false
    ),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','excerpt','thumbnail','revisions'),
    'has_archive' => true
  );
  register_post_type('blog',$args);
}
/** ---- ブログタクソノミー追加 ---- **/
add_action ('init','create_blogcat_taxonomy','0');
function create_blogcat_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('blogcat','post type general name'),
	'singular_name' => _x('blogcat','post type singular name'),
	'search_items' => __('blogcat'),
	'all_items' => __('blogcat'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('ブログカテゴリーを編集'),
	'add_new_item' => __('ブログカテゴリーを書く'),
	'menu_name' => __( 'ブログカテゴリー' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'blogcat' )
	);
	register_taxonomy('blogcat','blog',$args);
}
