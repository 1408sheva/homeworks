<?php

$m = array("1"=>"Январь","2"=>"Февраль","3"=>"Март","4"=>"Апрель","5"=>"Май", "6"=>"Июнь", "7"=>"Июль","8"=>"Август","9"=>"Сентябрь","10"=>"Октябрь","11"=>"Ноябрь","12"=>"Декабрь");
$x = date(m);

foreach ($m as $k => $v){
    echo '<pre>';
    if ($x == $k){
        $moonth = $v;
        echo '<b style="color: red; font-size: 2em">'.$moonth.'</b>';
    }else{
        echo $v;
    }
}




