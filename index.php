<?php

if(!isset($_SESSION)){
    session_start();
}

require "./lib/autoload.php";

$smarty = new Template();

try{
    $smarty->assign('HOME', Rotas::GetSiteHome());
    $smarty->assign('TEMA', Rotas::GetSiteTema());
    $smarty->assign('REGISTER', Rotas::GetPagRegister());
    $smarty->assign('LOGIN', Rotas::GetPagLogin());
    $smarty->assign('LOGOUT', Rotas::GetPagLogout());
    $smarty->assign('ONLINE', Login::Logado());
    $smarty->assign('NEW_PASS', Rotas::GetPagUserNewPass());
    $smarty->assign('NEW_TASK' , Rotas::GetPagNewTask());
    $smarty->assign('TASKS', Rotas::GetPagTasks());
    
}catch(Exception $ex){
    exit('Error => ' . $ex->getMessage());
}

$smarty->display('index.tpl');