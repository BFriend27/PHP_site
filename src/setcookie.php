<?php
//Раздача печенек всем входящим и продление на хиты для авторизованного
function setcookie_a($global_massiv)
{
    setcookie('user_login', $global_massiv, time()+60*60*24*30, '/');
}