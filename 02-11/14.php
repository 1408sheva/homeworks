<?php

$arr = [4, 2, 5, 19, 13, 0, 10];

foreach ($arr as $v){
    if ($v >= 2 && $v <= 4){
        if ($e == $v){
            echo "Есть!";
        }else{
            echo "Нет!";
            break;
        }
    }
}