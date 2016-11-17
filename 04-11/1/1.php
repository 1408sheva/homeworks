<?php

include '1.html';
$a = $_POST[a];
$b = $_POST[b];

function getCommonWords ($a, $b){
    $a = explode(' ', $a);
    $b = explode(' ', $b);

    for ($i = 0; $i < count($a); $i++){
        for ($j = 0; $j < count($b); $j++){
            if ($a[$i] === $b[$j]){
                $result[] = $a[$i];
            }
        }
    }
    return $result;
}

print_r(getCommonWords($a, $b));