<?php
include 'test.php';

// Функция добавления записи //
function add() {
    global $max_rec;
    global $file_gb;

    $recs = @file($file_gb) or $recs = array();

    $from = $_POST['msg_from'];
    $mail = $_POST['msg_mail'];
    $url =  $_POST['msg_url'];
    $message = $_POST['msg_message'];

    $from = str_replace ("|", "&brvbar;", $from);
    $from = htmlspecialchars($from, ENT_QUOTES);
    $mail = str_replace ("|","&brvbar;",$mail);
    if (strlen($message)>1000)  $message=substr($message,0,1000);
    $message = htmlspecialchars($message, ENT_QUOTES);
    $message = str_replace("|","&brvbar;",$message);
    $message = trim($message);
    $message = preg_replace ("/
/", "<br>", $message);

    array_unshift ($recs,"$from|$mail|".date("d M Y, H:i")."|$message\n");
    if (count($recs)>$max_rec) $recs=array_slice($recs,0,$max_rec);
    $count = count($recs);

    if (trim($_POST['msg_message'])!="" && trim($_POST['msg_from'])!=""){
    $f = fopen ($file_gb, "w");
        for ($i=0; $i<$count; $i++) {
            fwrite($f,$recs[$i]);
    }
    fclose($f);}
} // add()


//Функиция для вывода сообщения
function view(){
    global $file_gb;

    if (file_exists($file_gb)){
        $massages = file($file_gb); ?>

        <table  style="border-collapse: collapse; border: 2px solid lightgrey;" >
            <tr>
                <td width="100px" height="25px">Имя</td>
                <td>E-mail</td>
                <td>Дата</td>
                <td>Сообщение</td>
            </tr>
        <?php
        for ($i=0; $i < count ($massages); $i++){
            $massage = explode("|", $massages[$i]);
            echo "<tr>";
            for ($j=0; $j< count ($massage); $j++){
                echo '<td style=" border-collapse: collapse; border: 1px dashed lightgrey; padding: 4px;">';
                echo $massage[$j];
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}