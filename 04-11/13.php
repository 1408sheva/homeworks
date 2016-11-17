<?php

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

function countWord ($string){
    $arr = explode(' ', $string);
    $arr = array_unique($arr);
    $arrCount = [];
    foreach ($arr as $k => $v) {
        $count = substr_count($string, $v);
        $arrCount += [$count => "$v употреблялось $count раз"];
    }
    ksort($arrCount);
    foreach ($arrCount as $v) {
        echo $v . '<br>';
    }
}

countWord($string);