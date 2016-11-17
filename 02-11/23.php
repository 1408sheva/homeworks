<?php

if (isset($_POST['number'])){
    $number = $_POST['number'];
    $digits = preg_split('//', $number, -1, PREG_SPLIT_NO_EMPTY); // розбиввает число на элементы масива

    foreach ($digits as $k => $v){
        $res += $v;
    }
    $str = "Результат сумы равен $res";
}
else{
    $number = 0;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сумирование</title>
</head>
<body>

<form action="#" method="post">
    <input type="text" value="<?=$number?>" name="number" size="6">
    <input type="submit" value="Отправить"><br>
   <pre> <?=$str?> </pre>
</form>
</body>
</html>
