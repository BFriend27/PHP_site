<?php
//Ядро сайта
$chekPost = (!isset($_POST));
$indexAuth = false;
$failAuth = true;

include $_SERVER['DOCUMENT_ROOT'].'/main_menu.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/connect.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/auth.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/redirect.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/setcookie.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/cutString.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/arraySort.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/showMenu.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/titleName.php';