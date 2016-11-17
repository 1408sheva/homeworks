<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        td{ width: 23px;
            height: 23px;}
        table {
            border-collapse:collapse;
        }
    </style>
</head>
<body>
<table border="1px">
    <?php
    $col = 10; //tr стовпцы
    $row = 10; //td строки


    for ($i=1; $i <= $col; $i++) {
        echo "<tr>";
        for ($a=1; $a <= 10; $a++) {
            echo "<td>".$i*$a."</td>";
        }
        echo "</tr>";
    }

    ?>
</table>
</body>
</html>