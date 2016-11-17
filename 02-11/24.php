<?php

$numb = 442158755745;
$arr= preg_split('//', $numb, -1, PREG_SPLIT_NO_EMPTY); // розбиввает число на элементы масива

$n = 5;

foreach ($arr as $v){
    if ($v == $n){
       $result += 1;
    }
}
echo $result;