<?php

$n = 1000;
$i=1;

while($n > 50){
    echo $i++.'<br>';
    $num = $n;
    $n /= 2;

}

echo $num;
