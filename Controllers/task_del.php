<?php

$task = new Tasks();
if(isset($_POST['idtask'])){
    $idtask = $_POST['idtask'];
    $task->TaskDelete($idtask);
    Rotas::Redirecionar(0, Rotas::GetPagTasks());
}


?>