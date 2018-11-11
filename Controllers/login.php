<?php

$smarty = new Template();

if(isset($_POST['user_login']) AND isset($_POST['pass_login'])){
    $username = $_POST['user_login'];
    $pass = $_POST['pass_login'];
    

    $login = new Login();
    $login->Login($username, $pass);
}

$smarty->assign('USER_RECOVERY', Rotas::GetPagUserRecovery());

$smarty->display('login.tpl');

?>