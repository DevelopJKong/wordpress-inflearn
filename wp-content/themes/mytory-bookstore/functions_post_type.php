<?php
function getHelloWorld()
{
    return "<h1>Hello World</h1>";
}

function mbs_register_post_type() {
    $args = array(
        'public' => true,
        'labels' => array(
            'name'                  => '책',
            'singular_name'         => '책',
            'menu_name'             => '책',
            'name_admin_bar'        => '책',
            'add_new'               => '새 책 추가',
            'add_new_item'          => '새 책을 추가 합니다',
            'new_item'              => '새 책',
            'edit_item'             => '책 수정',
            'view_item'             => '책 보기',
            'all_items'             => '책 목록',
            'search_items'          => '책 검색',
            'parent_item_colon'     => '상위 책:',
            'not_found'             => '현재 입력한 책이 없습니다',
            'not_found_in_trash'    => '휴지통에 책이 없습니다',
        ),
        'menu_position' => 3,
        'menu_icon' => 'dashicons-book',
        'has_archive' => true

    );
    register_post_type('book',$args);
}
add_action('init','mbs_register_post_type');

add_action('wp_enqueue_scripts',function() {
    wp_enqueue_style('mbs-style',get_stylesheet_uri());
});

add_action('after_setup_theme',function() {
    add_theme_support('title-tag');
});

