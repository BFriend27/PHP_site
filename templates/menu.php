<?php
//Вывод меню с обрезкой, который потом добавляется в showMenu для сортировки
?>
   <ul class="main-menu <?=$class?>">
       <?php foreach ($menu as $item) { ?>
           <li><a style="<?=($_SERVER['REQUEST_URI'] == $item['path'])
           ?'text-decoration: underline;':''?>" href="<?=$item['path']?>">
           <?=cutString($item['title'])?></a></li> 
       <?php } ?>
   </ul>
   <?php