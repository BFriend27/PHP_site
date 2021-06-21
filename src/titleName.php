<?php
//Заголовок внутри меню привязывается к ссылке на которой находишься 
function titleName($name) 
{
    $title = '';
    for($i = 0; $i < count($name); $i++) {
        if (array_search($_SERVER['REQUEST_URI'], $name[$i]) == true) {
            $title = $name[$i]['title']; 
        }
    }
    return $title;
}