<?php  

// サムネイル機能を有効化
function mytheme_setup(){
  add_theme_support('post-thumbnails');//サムネイル(アイキャッチ画像)を有効にする
}

// お知らせ
function custom_post_type_news(){
  $labels = array(
    'name' => 'お知らせ',
    'singular_name' => 'お知らせ',
    'menu_name' => 'お知らせ',
    'name_admin_bar' => 'お知らせ',
    'add_new' => '新規追加',
    'add_new_item' => '新しいお知らせを追加',
    'edit_item' => 'お知らせの編集',
    'new_item' => '新しいお知らせ',
    'view_item' => 'お知らせを見る',
    'all_items' => '全てのお知らせ',
    'search_items' => 'お知らせを検索',
    'not_found' => 'お知らせが見つかりませんでした',
    'not_found_in_trash' => 'ゴミ箱にお知らせはありません'
  );

   $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'news'),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 6,
    'supports' => array('title','editor','thumbnail'),
   );

   register_post_type('news',$args);
}
add_action('init','custom_post_type_news');

// お客様の声の投稿
function custom_post_type_voices(){
  $labels = array(
    'name' => 'お客様の声',
    'singular_name' => 'お客様の声',
    'menu_name' => 'お客様の声',
    'name_admin_bar' => 'お客様の声',
    'add_new' => '新規追加',
    'add_new_item' => '新しいお客様の声を追加',
    'edit_item' => 'お客様の声の編集',
    'new_item' => 'お客様の声',
    'view_item' => 'お客様の声を見る',
    'all_items' => '全てのお客様の声',
    'search_items' => 'お客様の声を検索',
    'not_found' => 'お客様の声が見つかりません',
    'not_found_in_trash' => 'ゴミ箱にお客様の声はありません'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => [
            'slug' => 'voices', // カスタム投稿タイプのスラッグ
            'with_front' => false, // 前にベーススラッグを付けるかどうか
        ],
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' =>array('title','editor','thumbnail','custom-fields'),
  );
  register_post_type('voices',$args);

// カテゴリーとタグを追加
  register_taxonomy_for_object_type('category','voices');
  register_taxonomy_for_object_type('post_tag','voices');
}

//ブログの投稿
function custom_post_type_blogs(){
  $labels = array(
    'name' => 'ブログ',
    'singular_name' => 'ブログ',
    'menu_name' => 'ブログ',
    'name_admin_bar' => 'ブログ',
    'add_new' => '新規追加',
    'add_new_item' => '新しいブログを追加',
    'edit_item' => 'ブログの編集',
    'new_item' => '新しいブログ',
    'view_item' => 'ブログを見る',
    'all_items' => '全てのブログ',
    'search_items' => 'ブログを検索',
    'not_found' => 'ブログが見つかりません',
    'not_found_in_trash' => 'ゴミ箱にブログはありません',
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => [
      'slug' => 'blogs',
      'with_front' => false,
    ],
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 7,
    'supports' => array('title','editor','thumbnail','custom-fields'),
  );
  register_post_type('blogs',$args);

  // カテゴリーとタグを追加
  register_taxonomy_for_object_type('category','blogs');
  register_taxonomy_for_object_type('post_tag','blogs');
}

function set_custom_post_type_archive_posts_per_page($query){
  if(!is_admin()  && $query->is_main_query() && is_post_type_archive('voices')){
    $query->set('posts_per_page',12);
  }
  if(is_post_type_archive('blogs')){
    $query->set('posts_per_page',1);
  }
}



add_action('after_setup_theme','mytheme_setup');
add_action('init','custom_post_type_voices');
add_action('init','custom_post_type_blogs');
add_action('pre_get_posts','set_custom_post_type_archive_posts_per_page');

?>

