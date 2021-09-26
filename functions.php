<?php 
/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

//タイトルのキャッチフレーズとサイト名の間に入る記号の変更
add_filter('document_title_separator','my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}
//topページの時にタイトル名を変更
add_filter('document_title_parts','my_document_title_parts');
function my_document_title_parts($title){
    if(is_home()){
        unset($title['tagline']);
        //テキストを変更
        $title['title'] = 'BISTRO CALMEは、カジュアルなワインバーよりなビストロです。';
    }
    return $title;
}

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');
/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');
