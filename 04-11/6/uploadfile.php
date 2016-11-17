<?php

$dir = 'gallery/';
if (isset($_FILES["filename"]["tmp_name"]) && ($_FILES["filename"]["tmp_name"] != '')){
    for ($i = 0; $i < count($_FILES ["filename"]["name"]); $i++){
        move_uploaded_file($_FILES ["filename"]["tmp_name"][$i], $dir.$_FILES ["filename"]["name"][$i]);
    }

}else{
    echo 'False';
}


// функиця для избавления от лишних файлов
function excess ($files){
    for ($i = 0; $i < count($files); $i++) {
        if ($files[$i] != '.' && $files[$i] != '..') $result[] = $files[$i];
    }
    return $result;
}

$files = scandir($dir);
$files = excess($files);
//print_r($files);


//include '6.php';