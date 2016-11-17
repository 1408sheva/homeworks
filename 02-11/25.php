<?php
$arr = array();

for ($k = 0; $k < 10; $k++){
    $arr[$k] = rand();
}
print_r($arr);

$max = max($arr);
echo "<br>$max<br>";

$min = min($arr);
echo $min.'<br>';

foreach ($arr as $k => $v){
    if ($v == $min){
        $kmin = $k;
    }elseif($v == $max){
        $kmax = $k;
    }
}
list($arr[$kmin], $arr[$kmax]) = array ($arr[$kmax], $arr[$kmin]); echo '<br>';
print_r($arr);