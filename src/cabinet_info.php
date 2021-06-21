<?php
//Личный кабинет и вся информация из БД в виде текста.

// $id = mysqli_real_escape_string(connect(), $_SESSION['id']);

// $userInfo = mysqli_query(
//     connect(), 
//     "SELECT * FROM users WHERE id = '$id';");
// $userData = mysqli_fetch_array($userInfo);

// $dbUserGroups = mysqli_query(
//     connect(), 
//     "SELECT groups.name, groups.description FROM group_user
//         LEFT JOIN users ON group_user.user_id = users.id
//         LEFT JOIN groups ON group_user.group_id = groups.id
//     WHERE users.id = '$id';");

// $groups = [];
// while ($group = mysqli_fetch_assoc($dbUserGroups)) {
//     $groups[] = $group;
// }