<?php
/*------------------------------------------
 *  サムネ、メニュー、ブロックエディターを有効
 *------------------------------------------*/
add_action('after_setup_theme', function () {
  // サムネイル（アイキャッチ画像）を有効化
  add_theme_support('post-thumbnails');

  // ブロックエディタースタイルを有効化
  add_theme_support('wp-block-styles');

  // メニューをサポート
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
    'footer_nav' => 'フッターナビゲーション',
  ]);
});

/**
 * グローバルナビゲーションのサブタイトルの有効化
 */
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);

function description_in_nav_menu($item_output, $item, $depth, $args)
{
  if (!empty($item->description)) {
    $item_output = preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<span><br />{$item->description}</span><", $item_output);
  }
  return $item_output;
}

/*------------------------------------------
 *  ブロックエディタースタイルの読み込み
 *------------------------------------------*/
// function enqueue_block_library_styles()
// {
//   if (!is_admin()) {
//     // 基本的なブロックエディタースタイルを読み込む
//     wp_enqueue_style('wp-block-library');

//     // テーマ固有のブロックエディタースタイルを正しく読み込む
//     wp_enqueue_style('wp-block-library-theme', false, array('wp-block-library'), '1.0', 'all');
//   }
// }
// add_action('wp_enqueue_scripts', 'enqueue_block_library_styles');
// function enqueue_theme_styles()
// {
//   // テーマのスタイルシートを読み込む
//   wp_enqueue_style('theme-style', get_stylesheet_uri(), array('wp-block-library', 'wp-block-library-theme'), null, 'all');
// }
// add_action('wp_enqueue_scripts', 'enqueue_theme_styles');


/*------------------------------------------
 *  MW WP form 
 *------------------------------------------*/
////エラーメッセージの変更////
function validation_rule($validation, $data, $Data)
{
  $validation->set_rule('myname', 'noempty', array('message' => '※お名前を入力して下さい'));
  $validation->set_rule('myname_kana', 'noempty', array('message' => '※フリガナを入力して下さい'));
  $validation->set_rule('email', 'noempty', array('message' => '※メールアドレスを入力して下さい'));
  $validation->set_rule('phone', 'noempty', array('message' => '※電話番号を入力して下さい'));
  $validation->set_rule('birthday', 'noempty', array('message' => '※西暦を入力して下さい'));
  $validation->set_rule('birth-month', 'noempty', array('message' => '※選択して下さい'));
  $validation->set_rule('birth-date', 'noempty', array('message' => '※選択して下さい'));
  $validation->set_rule('position', 'required', array('message' => '※希望職種を選択してください'));
  $validation->set_rule('pr', 'noempty', array('message' => '※自己PRを入力して下さい'));
  $validation->set_rule('agree', 'required', array('message' => '※チェックしてください'));
  return $validation;
}
add_filter('mwform_validation_mw-wp-form-72', 'validation_rule', 10, 3);

//// MW WP form 自動で入る<br><p>削除 ////
function mvwpform_autop_filter()
{
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();


/*------------------------------------------
 * ブログカテゴリー表示（最下位のカテゴリ表示）
 *----------------------------------------*/

function get_term_descendants($post_id = '', $tax_name = 'category')
{
  $terms = get_the_terms($post_id, $tax_name);
  if (empty($terms))
    return false;
  $candidate = $terms;
  $count = count($terms);
  if ($count > 1):
    foreach ($terms as $key => $term):
      foreach ($terms as $term2):
        if (term_is_ancestor_of($term->term_id, $term2->term_id, $tax_name)) {
          unset($candidate[$key]);
          break;
        }
      endforeach;
    endforeach;
  endif;
  return $candidate;
}

/*------------------------------------------
 *  アーカイブページを有効にする
 *----------------------------------------*/
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog';
    $args['label'] = '投稿';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

//パーマリンク　投稿名の前にblog/を挿入

add_filter('post_type_archive_link', function ($link, $post_type) {
  if ('post' === $post_type) {
    $post_type_object = get_post_type_object('post');
    $slug = $post_type_object->has_archive;
    $link = get_home_url(null, '/' . $slug . '/');
  }
  return $link;
}, 10, 2);

function add_article_post_permalink($permalink)
{
  $permalink = '/blog' . $permalink;
  return $permalink;
}
add_filter('pre_post_link', 'add_article_post_permalink');
function add_article_post_rewrite_rules($post_rewrite)
{
  $return_rule = array();
  foreach ($post_rewrite as $regex => $rewrite) {
    $return_rule['blog/' . $regex] = $rewrite;
  }
  return $return_rule;
}
add_filter('post_rewrite_rules', 'add_article_post_rewrite_rules');



/*------------------------------------------
 * 投稿タイプ「スタッフ」追加
 *----------------------------------------*/
add_action('init', function () {
  register_post_type('staff', [
    'label' => 'スタッフ管理',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail', 'title', 'editor', 'custom-fields'],
    'show_in_rest' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'staff']
  ]);
});


/*------------------------------------------
 * アイキャッチ定義
 *----------------------------------------*/
/*アイキャッチ画像がなければ、標準画像を取得する */
function get_eyecatch_with_default()
{
  if (has_post_thumbnail()):
    // アイキャッチ画像が設定されている場合
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    // アイキャッチ画像が設定されていない場合、デフォルト画像を指定
    $img = array(get_template_directory_uri() . '/images/eyecatch-default.jpg', 156, 180); // パスを指定してURLを生成
  endif;

  return $img;
}

/*------------------------------------------
 * スタッフ情報を取得する関数
 *----------------------------------------*/
function get_staff_meta($post_id)
{
  return array(
    'firstmessage' => get_post_meta($post_id, 'スタッフメッセージ１行目', true),
    'secondmessage' => get_post_meta($post_id, 'スタッフメッセージ２行目', true),
    'position' => get_post_meta($post_id, '職種名', true),
    'staffname' => get_post_meta($post_id, '名前', true),
    'year' => get_post_meta($post_id, '入社年度', true),
    'profile' => get_post_meta($post_id, 'プロフィール', true),
  );
}

/*------------------------------------------
 * パンくずリストカスタム
 *----------------------------------------*/
function my_static_breadcrumb_adder($breadcrumb_trail)
{
  if (is_post_type_archive('post')) { // デフォルトの投稿一覧ページの場合
    $item = new bcn_breadcrumb('BLOG', null, array('post'));
  } elseif (get_post_type() === 'post') { // デフォルトの投稿ページの場合
    $item = new bcn_breadcrumb('BLOG', null, array('post'), home_url('blog/'), null, true);
  } elseif (is_post_type_archive('staff')) { // スタッフのアーカイブページの場合
    $item = new bcn_breadcrumb('STAFF', null, array('staff'));
  } elseif (get_post_type() === 'staff') { // スタッフの投稿ページの場合
    $item = new bcn_breadcrumb('STAFF', null, array('staff'), home_url('staff/'), null, true);
  }

  // HOMEのパンくずを一時退避して、追加のパンくずを挿入
  $stuck = array_pop($breadcrumb_trail->breadcrumbs);
  if (isset($item)) {
    $breadcrumb_trail->breadcrumbs[] = $item;
  }
  $breadcrumb_trail->breadcrumbs[] = $stuck; // HOMEを戻す
}

add_action('bcn_after_fill', 'my_static_breadcrumb_adder');


/*------------------------------------------
 * 表示する文字数制限
 *----------------------------------------*/
// ブログタイトル18文字まで表示(ブログ投稿ページの下層のget_previous_post,get_next_post)
function trim_post_title($title, $limit = 20)
{
  if (mb_strlen($title) > $limit) {
    return mb_substr($title, 0, $limit) . '…';
  } else {
    return $title;
  }
}

/**
 * タイトルを指定した最大文字数に短縮し、省略記号を追加
 *
 * @param string $title タイトル
 * @param int $max_length 最大文字数
 * @return string 短縮されたタイトル
 */
function get_truncated_title($title, $max_length = 21)
{
  if (mb_strlen($title) > $max_length) {
    $title = mb_substr($title, 0, $max_length) . '...';
  }
  return $title;
}

/**
 * 30文字までに短縮したタイトルを取得(ブログblog-contents-box)
 *
 * @param string $title 
 * @return string 
 */
function get_truncated_title_30($title)
{
  return get_truncated_title($title, 30);
}

/**
 * 40文字までに短縮したタイトルを取得 (TOP最新の記事）
 *
 * @param string $title 
 * @return string 
 */
function get_truncated_title_40($title)
{
  return get_truncated_title($title, 40);
}


