<?php
$text = 'jglfs/ s fds/ gjfs; lgjsh sjgg slgs hjfdsgh 21 slgs/ slgs';
$text = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/","",$text);
$textArr = explode(' ', $text);
$t = array_unique($textArr);
print_r($t);
$res = count($t);



echo "Количество уникальных слов равно ".$res;