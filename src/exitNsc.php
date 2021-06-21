<?php
// Кнопка выход

session_start();
session_destroy();
header("Location: /index.php"); 
exit();

?>
<div class="clearfix"></div>