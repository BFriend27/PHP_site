<?php

include $_SERVER['DOCUMENT_ROOT'].'/src/core.php';

if (session_status() == 1) {
    session_start();
}

if (isset($_COOKIE['user_login'])){
    setcookie_a($_COOKIE['user_login']);
}

redirect();

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles.css" rel="stylesheet"> 
    <title>Project - ведение списков</title>
</head>
<body>
    <div class="header">
        <div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
                    
                    <!-- Вывод меню -->
        <?php showMenu($menu, '', 'sort', SORT_ASC)?>
    </div>
        <td class="right-collum-index-head"> 
            <ul class="project-folders-v">
                    
                    <!-- Проверка на логин -->
                <?php if (isset($_SESSION['user'])) {
                    // заменить сессию на id при подкл к БД
                    $indexAuth; ?>
                <li class="project-folders-v-active"><a href="/src/exitNsc.php">Выйти</a></li>  
                <li class="project-folders-v-active"><a href="/route/cabinet/">Личный кабинет</a></li>  
                <?php } else { ?>
                <li><a href="#">Забыли пароль?</a></li>
                <li><a href="./?test">Регистрация</a></li>
                <li class="project-folders-v-active"><a href="./?login=yes">Авторизация</a></li>
                <?php } ?>
            </ul>  
        </td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="left-collum-index">
                
                <!-- Заголовок по ссылке -->
                <h1><?=titleName($menu)?></h1>