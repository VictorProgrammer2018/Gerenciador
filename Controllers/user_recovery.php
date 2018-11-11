<?php

$smarty = new Template();

$user = new User();

if(isset($_POST['email_reco'])){
    $user->setEmail($_POST['email_reco']);

    if($user->GetIssetEmail($user->getEmail()) > 0){
        $new_pass = Sistema::GerarSenha();
        $user->SenhaUpdate(md5($new_pass), $user->getEmail());

        $mail = new EnviarEmail();
        $assunto = 'Recuperação de Senha - ' .Config::SITE_NAME;
        $msg = 'Olá cliente, está é sua nova senha '.$new_pass . ' <br/>
        faça login com ela e depois troque se necessário';
        $dest = array($user->getEmail(), Config::EMAIL_HOST);
        $mail->Enviar($assunto, $msg, $dest);

        echo '<div class="alert alert-success"><h3>SUCESSO</h3>
        <p class="lead">Uma nova senha foi enviado para o e-mail solicitado!</p></div>';
        Rotas::Redirecionar(3, Rotas::GetPagLogin());

    }else{
        echo '<div class="alert alert-danger"><h3>ERROR</h3>
        <p class="lead">E-mail não cadastrado em nossa base de dados</p></div>';
        Rotas::Redirecionar(3, Rotas::GetPagUserRecovery());
    }
}else{
    $smarty->display('user_recovery.tpl');
}