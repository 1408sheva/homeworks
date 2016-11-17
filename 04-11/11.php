<?php

$str = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

function formatString
{
    $length = mb_strlen($str);
    $res = mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1, 1);

    for ($i = 0; $i < $length; $i++) {
        if (mb_substr($str, $i, 1) == '.') {
            $res .= mb_strtoupper(mb_substr($str, $i + 2, 1));
        } else {
            $res .= mb_substr($str, $i + 2, 1);
        }
    }
    echo $res;
}
