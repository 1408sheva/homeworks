<?php

$arr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $v){
    if ($v % 3 == 0){
        echo $v.' ';
    }
    else{
        echo $v.', ';
    }
}