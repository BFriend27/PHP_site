<?php
//Вывод меню в шапке и хвосте с сортировкой по необходимым параметрам.
function showMenu($menu, $class = '', $key, $sort = SORT_ASC)
{
    
    $menu = arraySort($menu, $key, $sort);

    include $_SERVER['DOCUMENT_ROOT'].'/templates/menu.php';
}