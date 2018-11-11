<?php



if(!Login::Logado()){
    Login::AcessoNegado();
}else{
    $smarty = new Template();
    if(isset($_POST['tasks']) AND isset($_POST['description']) AND isset($_POST['date_expires'])){

        $tasks = $_POST['tasks'];
        $description = $_POST['description'];
        $date_expires = Sistema::Fdata($_POST['date_expires']);
        $priority = $_POST['priority'];
        $status = $_POST['status'];
        $user_id = $_SESSION['USER']['iduser'];

        $task = new Tasks();
        $task->SaveTask($tasks,$description,$date_expires,$priority,$status,$user_id);
       
        $idtask = $task->lastInsertId();
        
        $smarty->assign('TASK', $task->GetTaskId($idtask));
        $smarty->assign('SITE_NOME', Config::SITE_NAME);
        $smarty->assign('SITE_HOME', Rotas::GetSiteHome());
        $smarty->assign('NOME_CLIENTE', $_SESSION['USER']['username']);

        $email = $_SESSION['USER']['email'];
        $mail = new EnviarEmail();
        $assunto = 'Cadastro da Tarefa - ' . Config::SITE_NAME;
        $msg = $smarty->fetch('cadastro_task.tpl');
        $dest = array($email, Config::EMAIL_USER);
        $mail->Enviar($assunto, $msg, $dest);

        echo '<div class="alert alert-success"><h3>SUCESSO!</h3>
        <p class="lead">Tarefa cadastrada com Sucesso</p></div>';
        Rotas::Redirecionar(2, Rotas::GetPagTasks());
        
    }else{
        $smarty->display('task_new.tpl');
    }
}


?>