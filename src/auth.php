<?php
// Если введены логин и пароль(сравнение совпадением связки логин+пароль(хеш))
if (isset($_POST['login'], $_POST['password'])) {
    $chekPost = true;
    require_once $_SERVER['DOCUMENT_ROOT'] . '/data/users.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/data/passwords.php';
    $index = array_search($_POST['login'], $userLogin);
    if ($index !== false && (password_verify($_POST['password'], $userPass[$index]) == true )) {
        session_start();
        $_SESSION['user'] = $_POST['login'];

    } else {
        $failAuth = false;
    }
}

// Если введены логин и пароль(сравнение хеша с БД)
// if (isset($_POST['login'], $_POST['password'])) {
//     $chekPost = true;
//     if(mysqli_connect_errno()) {
//     echo mysqli_connect_error();
//     } else {
//         $login = mysqli_real_escape_string(connect(), $_POST['login']);
//         $result = mysqli_query(
//             connect() ,
//             "SELECT id,password FROM users WHERE email = '$login' LIMIT 1");
//         $hashedpass = mysqli_fetch_array($result);
//         if (mysqli_num_rows($result) > 0) {
//             if (password_verify($_POST['password'], $hashedpass["password"])) {
//                 $failAuth = true;
//                 session_start();
//                 $email = mysqli_real_escape_string(connect(), $_POST['login']);
//                 $result = mysqli_query(
//                     connect(), 
//                     "SELECT id FROM users WHERE email = '$email' LIMIT 1");
//                 while ($res = mysqli_fetch_array($result)){
//                     $ress = $res;
//                 }
//                 $_SESSION['id'] = $ress["id"];
//             } else {
//                 $failAuth = false;
//             }
//         } else {
//             $failAuth = false;
//         } 
//     }
// }

