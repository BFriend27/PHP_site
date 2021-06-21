<?php

if(isset($_GET['login']) && ($_GET['login'] === 'yes')) {
    $indexAuth = true;
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';?>

				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
            </td>  
            <td class="right-collum-index">

                <?php                 
                if(!$failAuth) {
                    include $_SERVER['DOCUMENT_ROOT'] . '/include/error_message.php';
                }
                if (($chekPost) && ($failAuth)) { 
                    include $_SERVER['DOCUMENT_ROOT'] . '/include/success_message.php';
                    setcookie_a($_POST['login']);
                    $indexAuth; 
                } elseif (isset($_SESSION['user'])) {
                    // заменить сессию на id при подкл к БД
                    $indexAuth;
                } else { ?>
                <div class="index-auth">
                    <form action="./?login=yes" method="post">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="iat">
                                    <label for="login_id">Ваш e-mail:</label>
                                    <input id="login_id" size="30" name="login"
                                    value=<?=isset($_COOKIE['user_login']) ? $_COOKIE['user_login'] : ''?>
                                    <?=isset($_POST['login']) ? $_POST['login'] : ''?>>
                                </td>
                            </tr>
                            <tr>
                                <td class="iat">
                                    <label for="password_id">Ваш пароль:</label>
                                    <input id="password_id" size="30" name="password" type="password" value=
                                    "<?=isset($_POST['password']) ? $_POST['password'] : '';?>">
                                </td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="enter" value="Войти"></td>
                            </tr>
                        </table>
                    </form>
                </div> 
            </td>
        </tr>
    </table>
<?php } 
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';?>

