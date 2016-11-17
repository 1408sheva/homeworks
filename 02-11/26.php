<?php

$arr = array();

for ($k = 0; $k < 10; $k++){
    $arr[$k] = rand(0,100);
}
echo '<pre>';
print_r($arr);

foreach ($arr as $k => $v){
    if ($k % 2 == 1 && $k != 0){
        echo $v.",   ";
    }
}
