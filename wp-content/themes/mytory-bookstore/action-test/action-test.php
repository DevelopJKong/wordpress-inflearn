<?php
$action_list = [];

function add_action($tag,$function) {
    global $action_list;
    $action_list[$tag][] = $function;
}

function do_action($tag) {
    global $action_list;

    if(!empty($action_list[$tag])) {
        foreach($action_list[$tag] as $function) {
            call_user_func($function);
        }
    }
}

var_dump($action_list);

add_action('5지점진입직전',function() {
    echo '4.5';
    echo '<br/>';
});

add_action('5지점진입직후',function() {
    echo '4.7';
    echo '<br/>';
});

echo 1;
echo '<br/>';
echo 2;
echo '<br/>';
echo 3;
echo '<br/>';
echo 4;
echo '<br/>';
do_action('5지점진입직전');
echo 5;
echo '<br/>';
do_action('5지점진입직후');
echo 6;
echo '<br/>';
echo 7;
echo '<br/>';
echo 8;
echo '<br/>';
echo 9;
echo '<br/>';
echo 10;
