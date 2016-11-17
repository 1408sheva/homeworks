<?php
$dir = 'D:/oserver/openserver/domains/php-academy';

function listFilesInDirectory($dir)
{
    if ($handle = opendir($dir)) {
        echo "Файлы:<br>";

        while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
                echo "-- " . $file . "<br>";
            }
        }

        closedir($handle);
    }
}
listFilesInDirectory($dir);
?>