<?php

$smarty = new Template();

try{
    $tasks = new Tasks();
    $user_id = $_SESSION['USER']['iduser'];
    $tasks->GetTaskUser($user_id);

    $smarty->assign('TASKS', $tasks->GetItens());
    $smarty->assign('QUANTIDADE_TASKS', $tasks->TotalDados());
    $smarty->assign('TASK_EDIT', Rotas::GetPagEditTask());
    $smarty->assign('TASK_DEL', Rotas::GetPagTaskDel());
    
}catch(Exception $ex){
    exit('ERROR => ' . $ex->getMessage());
}

$smarty->display('tasks.tpl');

?>