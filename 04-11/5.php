<?php
$dir = 'D:/oserver/openserver/domains/php-academy';
$search = '1';

if ($handle = opendir("$dir")) {
    while ($entry = readdir($handle)) {
        if (strpos($entry, $search) === 0) {
            echo '-- '.$entry."<br>";
        }
    }
    closedir($handle);
}

?>