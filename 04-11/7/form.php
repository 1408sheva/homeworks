<!doctype html>
<html lang="en">
<head>
    <title>Document<title>..:: Гостевая книга ::..</title>
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="expires" content="0">
</head>
<body>
<form action="7.php" method="post">
    <table width="500" cellpadding="2"
           cellspacing="0" style="border: 1px solid rgb(0, 75, 151);" bgcolor="#d7ecff">
        <tbody><tr>
            <td align="right">
                * Имя:
            </td>
            <td align="left">
                <input type="text" name="msg_from" maxlength="40" size="30">
            </td>
        </tr>
        <tr>
            <td align="right">
                E-Mail:
            </td>
            <td align="left">
                <input type="email" name="msg_mail" maxlength="40" size="30">
            </td>
        </tr>
        <tr>
            <td align="right">
                * Сообщение:
            </td>
            <td align="left">
                <textarea cols="45" rows="7" name="msg_message"></textarea>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <input type="submit" name="msg_submit" value="Добавить">
                <input type="reset">
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                * Поля обязательные для заполнения<br>
            </td>
        </tr>
        </tbody></table>
</form>
</body>
</html>