<?php

$file_gb = "guestbook.txt";
$max_rec = 128; // максимальное количество записей в файле
$rec_page = 6;
require_once 'func.php';

if (!empty($_POST)) {add(); test();}

view();
include "form.php";
