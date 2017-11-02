<?php
include 'lib/scripts.php'; // スクリプト関係の関数
include 'template-parts/widet-categorize.php'; // widetエリアのカテゴリ

//サムネイルサイズ
add_image_size('thumb320', 320, 180, true);
add_image_size('thumb150', 150, 150, true);
add_image_size('thumbnail_200_140', 200, 140, true);

// アイキャッチ有効
add_theme_support('post-thumbnails');

register_sidebar(array (
    'name' => 'サイドバーウェジェット',
    'id' => 'sidebar',
    'description' => '',
    'before_widget' => '<section id="widget" class="%2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
     ));

//本文抜粋を取得する関数
//使用方法：http://nelog.jp/get_the_custom_excerpt
function get_the_custom_excerpt($content, $length) {
  $length = ($length ? $length : 70);//デフォルトの長さを指定する
  $content =  preg_replace('/<!--more-->.+/is',"",$content); //moreタグ以降削除
  $content =  strip_shortcodes($content);//ショートコード削除
  $content =  strip_tags($content);//タグの除去
  $content =  str_replace("&nbsp;","",$content);//特殊文字の削除（今回はスペースのみ）
  $content =  mb_substr($content,0,$length);//文字列を指定した長さで切り取る
  return $content;
}
