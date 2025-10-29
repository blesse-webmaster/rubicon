<?php

add_action('wp_print_scripts','notimport_script',100);
function notimport_script() {
  if (!is_admin()) {
    wp_deregister_script('jquery'); 
  }
}

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

// Breadcrumb
if (!function_exists('the_breadcrumb')) :
function the_breadcrumb() {

  if (!is_home()) {
    echo '<nav aria-label="breadcrumb" class="breadcrumb-scroller mb-4 mt-2 py-2 px-3 bg-light rounded">';
    echo '<ol class="breadcrumb mb-0">';
    echo '<li class="breadcrumb-item"><a href="' . home_url() . '">' . '<i class="fa-solid fa-house"></i>' . '</a></li>';
    // display parent category names with links
    if (is_category() || is_single()) {
      $cat_IDs = wp_get_post_categories(get_the_ID());
      foreach ($cat_IDs as $cat_ID) {
        $cat = get_category($cat_ID);
        echo '<li class="breadcrumb-item"><a href="' . get_term_link($cat->term_id) . '">' . $cat->name . '</a></li>';
      }
    }
    // display current page name
    if (is_page() || is_single()) {
      echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
    }
    echo '</ol>';
    echo '</nav>';
  }
}
add_filter('breadcrumbs', 'breadcrumbs');
endif;
// Breadcrumb END

/* 投稿者名のアーカイブページ */
add_filter( 'author_rewrite_rules', '__return_empty_array' );
function disable_author_archive() {
  if( isset($_GET['author']) ){
    if( $_GET['author'] || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
      wp_redirect( home_url( '/404.php' ) );
      exit;
    }
  }
}
add_action('init', 'disable_author_archive');

function bootstrap_pagination () {
  $args = ['type' => 'list','prev_text' => ('≪'), 'next_text' => ('≫'), ];
  $paginate = paginate_links( $args );
  $replace = [
    "<ul class='page-numbers'>" => '<ul class="pagination justify-content-center page-navi">',
    "<li>" => '<li class="page-item">',
    "page-numbers" => 'page-link',
    '<li class="page-item"><span aria' => '<li class="page-item active"><span aria',
  ];
  $paginate = str_replace(array_keys($replace), array_values($replace), $paginate);
  echo $paginate;
}

function adjust_category_paged( $query = []) {
  if (isset($query['name'])
   && $query['name'] === 'page'
   && isset($query['page'])
   && isset($query['category_name'])) {
    $query['paged'] = intval($query['page']); // 念のため整数化しておく
    unset($query['name']);
    unset($query['page']);
  }
  return $query;
}
add_filter('request', 'adjust_category_paged');
add_shortcode('root', 'shortcode_root');
	function shortcode_root() {
	return home_url( '/' );
}

add_shortcode('template', 'shortcode_template');
	function shortcode_template() {
	return get_template_directory_uri();
}

add_shortcode('uploads', 'shortcode_up');
	function shortcode_up() {
	$upload_dir = wp_upload_dir();
	return $upload_dir['baseurl'];
}

// サイト名を取得
add_shortcode('site_name', 'get_site_name');
function get_site_name() {
    return get_bloginfo('name');
}

/**
 * 一般設定に項目追加
 */
function add_contact_info_field( $whitelist_options ) {
	$whitelist_options['general'][] = 'site_title';
	$whitelist_options['general'][] = 'client_name';
	return $whitelist_options;
}
add_filter( 'whitelist_options', 'add_contact_info_field' );

function regist_contact_info_field() {
	add_settings_field( 'site_title', 'サイトタイトル', 'display_blog_title', 'general' );
	add_settings_field( 'client_name', 'クライアント名', 'display_catch_phrase', 'general' );
}
add_action( 'admin_init', 'regist_contact_info_field' );

function display_blog_title() {
	$site_title = get_option( 'site_title' );
?>
	<input name="site_title" type="text" id="site_title" value="<?php echo esc_html( $site_title ); ?>" class="regular-text">
<?php
}

function display_catch_phrase() {
	$client_name = get_option( 'client_name' );
?>
	<input name="client_name" type="text" id="client_name" value="<?php echo esc_html( $client_name ); ?>" class="regular-text">
<?php
}