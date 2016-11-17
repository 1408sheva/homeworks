<!doctype html>
<html lang="en">
<head><title>Document</title></head>
<body>
<form action="#" method="post">
    <label >Введіть текст<input type="text" name="str"></label><br>
    <input type="submit" value="отправить"><br>
    Зворотнє значення
</form>
</body>
</html>

<?php

$str = $_POST['str'];
function strRever($str){
    $arr = str_split($str);
    krsort($arr);
    foreach ($arr as $v){
        $res .= $v;
    }
    echo $res;
}
strRever($str);