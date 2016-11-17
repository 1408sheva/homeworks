<?php

$days = array( 1 => 'Понедельник' , 'Вторник' , 'Среда' , 'Четверг' , 'Пятница' , 'Суббота' , 'Воскресенье' );
$sub = 6;
$vos = 7;

foreach ($days as $k => $v) {
    echo '<pre>';
    if ($sub == $k || $vos == $k) {
        echo '<b style="color: red; font-size: 2em">' . $v . '</b>';
    } else {
        echo $v;
    }
}