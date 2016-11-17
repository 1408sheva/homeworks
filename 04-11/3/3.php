<?php
include '3.html';

$n = $_POST[a];

$file = file_get_contents('text.txt');
$arr = (explode(' ', $file));
$count = count($arr);
//print_r($arr);

for ($i = 0; $i < $count; $i++){
    if (mb_strlen($arr[$i]) > $n){
        unset($arr[$i]);
    }
}

file_put_contents('new-text.txt', implode(' ', $arr));