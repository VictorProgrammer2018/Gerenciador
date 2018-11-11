<?php

class Login extends Conexao{
    
    private $email, $pass;

    public function __construct(){
        parent::__construct();
    }

    private function getEmail(){
        return $this->email;
    }

    private function getPass(){
        return $this->pass;
    }


    private function setEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo '<div class="alert alert-danger">
            <p class="lead">E-mail inválido!</p>
            '.Sistema::VoltarPagina() . '</div>';
        }else{
            $this->email = $email;
        }
    }

    private function setPass($pass){
        $this->pass = md5($pass);
    }

    public function Login($email, $pass){
        $this->setEmail($email);
        $this->setPass($pass);

        $query = "SELECT * FROM {$this->prefix}users WHERE email = :email AND pass = :pass ";
        $params = array(
            ':email' => $this->getEmail(),
            ':pass' => $this->getPass()
        );
        $this->ExecuteSQL($query, $params);

        if($this->TotalDados() > 0){
            $lista = $this->ListarDados();

            $_SESSION['USER']['iduser'] = $lista['iduser'];
            $_SESSION['USER']['username'] = $lista['username'];
            $_SESSION['USER']['pass'] = $lista['pass'];
            $_SESSION['USER']['email'] = $lista['email'];

           Rotas::Redirecionar(0, Rotas::GetSiteHome());
        }else{
            echo "<script> window.alert('Dados Incorretos'); </script>";
        }
    }

    static function Logout(){
        unset($_SESSION['USER']);
        echo '<div class="alert alert-warning">
        <p class="lead">Saindo...</p></div>';
        Rotas::Redirecionar(2, Rotas::GetPagLogin());
    }

    static function Logado(){
        if(isset($_SESSION['USER']['email']) and isset($_SESSION['USER']['iduser'])){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    static function AcessoNegado(){
        echo '<div class="alert alert-danger"><h3>ACESSO NEGADO</h3>
        <p class=""lead>Para Acessar está aréa faça login</p>
        <a href="'.Rotas::GetPagLogin() . '">Login</a>/div>';
    }
}