<?php
// Переадресация на авторизацию, если не авторизован (заменить сессию на id при подкл к БД)
function redirect()
{
    if (!isset($_SESSION['user']) && ($_SERVER['REQUEST_URI'] !== "/?login=yes")) {
        header("Location: /?login=yes"); 
        exit();
    }
}