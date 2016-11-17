<?php

function test() {

    if (trim($_POST['msg_from'])=="") {
        echo "<p align=\"center\">Вы не ввели своё имя. Повторите ввод.</p>\n";
        return(false);
    }
    if (trim($_POST['msg_message'])=="") {
        echo "<p align=\"\">Вы не ввели сообщение. Повторите ввод.</p>\n";
        return(false);
    }
    return(true);
}
