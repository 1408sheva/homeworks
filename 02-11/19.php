<?php

$days = array( 1 => 'Понедельник' , 'Вторник' , 'Среда' , 'Четверг' , 'Пятница' , 'Суббота' , 'Воскресенье' );
$d = date(N);

foreach ($days as $k => $v) {
    echo '<pre>';
    if ($d == $k) {
        $day = $v;
        echo '<b style="color: red; font-size: 20px">' . $day . '</b>';
    } else {
        echo $v;
    }
}