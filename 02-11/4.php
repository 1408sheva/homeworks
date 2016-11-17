<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $v){
    echo $v.'<br>';
}

echo '<br>';
foreach ($arr as $k => $v){
    echo $k.'<br>';
}