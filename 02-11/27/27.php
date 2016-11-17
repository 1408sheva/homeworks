<!DOCTYPE html>
<html>
<head>
    <?php require_once ('/index.php'); ?>
    <title></title>
    <style type="text/css">
        td{ width: 50px;
            height: 25px;}
        table {
            border-collapse:collapse;
        }
    </style>
</head>
<body>
<table border="1px">

    <?php
    for ($i = 1; $i < $cols; $i++){
        echo "<tr>";
        for ($a=1; $a < $row; $a++):?>
            <td style='background-color:<?=$colors[rand(0, 6)]?>'><?=rand(0, 9999)?></td>
        <?php endfor;
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>

