<?php

class User extends Conexao{

    private $username, $email, $pass;

    public function __construct(){
        parent::__construct();
    }

    private function getUsername(){
        return $this->username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPass(){
        return $this->pass;
    }


    public function setUsername($username){
        if(strlen($username) < 3){
            echo '<div class="alert alert-danger " id="erro_mostrar">Username muito curto, 
            minimo de 3 caractres ';
                Sistema::VoltarPagina();
            echo '</div>';
        }else{
            $this->username = $username;
        }
    }

    public function setEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo '<div class="alert alert-danger">Formato de E-mail inválido';
                Sistema::VoltarPagina();
            echo '</div>';
        }else{
            $this->email = $email;
        }
    }

    public function setPass($pass){
        $this->pass = md5($pass);
    }

    public function GetIssetEmail($email){
        $query = "SELECT * FROM {$this->prefix}users WHERE email = :email";
        $params = array(':email' => $email);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();
    }

    public function Prepare($username, $pass, $email){
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setPass($pass);
    }

    public function Register(){
        if($this->GetIssetEmail($this->getEmail()) > 0 && $this->getEmail() != $_SESSION['USER']['email']){
            echo '<div class="alert alert-danger " id="erro_mostrar"> Este Email já esta cadastrado ';
            Sistema::VoltarPagina();
            echo '</div>';
            exit();
        }

        $query = "INSERT INTO {$this->prefix}users(username, pass, email, created_at) ";
        $query .= "VALUES(:username, :pass, :email, NOW())";
        $params = array(
            ':username' => $this->getUsername(),
            ':email' => $this->getEmail(),
            ':pass' => $this->getPass()
        );

        $this->ExecuteSQL($query, $params);
    }

    public function SenhaUpdate($pass, $email){
        $query = "UPDATE {$this->prefix}users SET pass = :pass WHERE email = :email";
        $this->setEmail($email);
        $this->setPass($pass);
        $params = array(
            ':email' => $email,
            ':pass' => $pass
        );
        $this->ExecuteSQL($query, $params);
    }
}