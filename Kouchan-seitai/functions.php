<?php  

// サムネイル機能を有効化
function mytheme_setup(){
  add_theme_support('post-thumbnails');//サムネイル(アイキャッチ画像)を有効にする
}

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
    'rewrite' => array('slug' => 'voices'),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' =>array('title','editor','thumbnail'),
  );
 
  register_post_type('voices',$args);

  // カテゴリーとタグを追加
  register_taxonomy_for_object_type('category','voices');
  register_taxonomy_for_object_type('post_tag','voices');
}

add_action('after_setup_theme','mytheme_setup');
add_action('init','custom_post_type_voices');
?>