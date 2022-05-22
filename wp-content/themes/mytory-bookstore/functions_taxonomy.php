<?php

function mbs_custom_taxonomy()
{
    register_taxonomy('book_author','book',[
        'label' => '저자'
    ]);

    register_taxonomy('book_translator','book',[
        'label' => '역자'
    ]);

    register_taxonomy('book_subject','book',[
        'label' => '주제'
    ]);
}

add_action('init','mbs_custom_taxonomy');
