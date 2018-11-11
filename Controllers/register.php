<?php

$smarty = new Template();

if(isset($_POST['user_reg']) and isset($_POST['email_reg']) and isset($_POST['pass_reg'])){
    if($_POST['pass_reg'] === $_POST['pass_reg_dos']){
        $username = $_POST['user_reg'];
        $email = $_POST['email_reg'];
        $pass = $_POST['pass_reg'];

        $register = new User();
        $register->Prepare($username, $pass, $email);
        $register->Register();

        $smarty->assign('NOME', $username);
        $smarty->assign('EMAIL', $email);
        $smarty->assign('SITE', Config::SITE_NAME);

        $mail = new EnviarEmail();
        $assunto = ' Cadastro Efetuado - ' . Config::SITE_NAME;
        $msg = $smarty->fetch('email_cadastro.tpl');
        $dest = array($email, Config::EMAIL_USER);
        $mail->Enviar($assunto, $msg, $dest);

        echo '<div class="alert alert-success"><h3>SUCESSO!</h3>
        <p class="lead">Usuario registrado com sucesso</p></div>';
        Rotas::Redirecionar(3, Rotas::GetPagLogin());
    }else{
        echo '<div class="alert alert-danger"><h3>ERROR</h3>
        <p class="lead">As senhas não conhecidem</p></div>';
    }
}else{
    $smarty->display('register.tpl');
}


?>