<?php

if(!Login::Logado()){
    Login::AcessoNegado();
}else{
    $smarty = new Template();

    if(isset($_POST['tasks']) AND isset($_POST['description'])){
        $tasks = $_POST['tasks'];
        $priority = $_POST['priority'];
        $status = $_POST['status'];
        $description = $_POST['description'];
        $date_expires = $_POST['date_expires'];
        $idtask = $_POST['idtask'];

        $task = new Tasks();
        $task->Editar($idtask,$tasks,$description,$date_expires,$priority,$status);

        echo '<div class="alert alert-success"><h3>SUCESSO</h3>
        <p class="lead">Tarefa Editada com Sucesso!</p></div>';
        Rotas::Redirecionar(2, Rotas::GetPagTasks());
    }

   
    $task = new Tasks();
    $idtask = $_POST['idtask'];
    $task->GetTaskUserId($idtask);

    $smarty->assign('TASK', $task->GetItens());
    $smarty->display('task_edit.tpl');

}