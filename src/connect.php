<?php
//Статичное подключение к БД sql
function connect()
{
    $host = 'хост';
    $user = 'логин';
    $password = 'пароль';
    $dbname = 'название БД';

    static $connection = null;

    if (null === $connection) {
        $connection = mysqli_connect($host, $user, $password, $dbname) 
        or die('connection Error');
    }

    return $connection;
}