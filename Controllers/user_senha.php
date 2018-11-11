<?php

$smarty = new Template();

if(isset($_POST['pass_atual']) and isset($_POST['pass_new'])){
    $pass_atual = md5($_POST['pass_atual']);
    $pass = $_POST['pass_new'];
    $email = $_SESSION['USER']['email'];

    if($pass_atual != $_SESSION['USER']['pass']){
        echo '<div class="alert alert-danger">A senha atual informada está inválida!</div>';
        Rotas::Redirecionar(2, Rotas::GetPagUserNewPass());
        exit();
    }

    $user = new User();
    $user->SenhaUpdate(md5($pass), $email);

    echo '<div class="alert alert-success"><h3>SUCESSO</h3>
    <p class="lead">Estamos fazendo logout para válidar sua nova senha</p></div>';
    Rotas::Redirecionar(3, Rotas::GetPagLogout());
}else{
    $smarty->display('user_newpass.tpl');
}