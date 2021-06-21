<?php
include $_SERVER['DOCUMENT_ROOT'].'/templates/header.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/cabinet_info.php';
?>
   <div>!!Для наглядности добавил скрин как это отображается(тк инфа тянется из БД)!!</div>
   <div><img src="/i/primer.png"></div>

<!--     <ul>
       <li>Email : <?= $userData['email'] ?></li>
       <li>Имя : <?= $userData['name'] ?></li>
       <li>Phone : <?= $userData['phone'] ?></li>
       <li>Пароль : <?= $userData['password'] ?></li>
       <li>Рассылка : <?= ($userData['mailing'] == 1 
       ? 'Согласен получать' : 'Отказываюсь получать') ?></li>
       <li>Active : <?= $userData['active'] ?></li>
    </ul>
    <p>Группы:</p>
    <ul>
       <?php foreach ($groups as $group) { ?>
           <li>Название: <?=$group['name']?> - Описание: <?=$group['description']?></li>
       <?php }?>
    </ul> -->

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>