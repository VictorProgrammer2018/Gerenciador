<?php


class Conexao extends Config{
    
    private $host,$user,$pass,$banco;
    protected $obj, $prefix, $itens = array();

    public function __construct(){
        $this->host = self::DB_HOST;
        $this->user = self::DB_USER;
        $this->pass = self::DB_PASS;
        $this->banco = self::DB_NAME;
        $this->prefix = self::DB_PREFIX;

        try{
            if($this->Conectar() == NULL){
                $this->Conectar();
            }
        }catch(Exception $ex){
            exit("Erro ao se conectar com o banco de dados " . $ex->getMessage());
        }


    }

    private function Conectar(){
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $connect = new PDO("mysql:dbhost={$this->host};dbname={$this->banco}",$this->user, $this->pass, $options);
        return $connect;
    }

    public function ExecuteSQL($query, array $params = NULL){
        $this->obj = $this->Conectar()->prepare($query);
        if($params && count($params) > 0){
            foreach($params as $key => $value){
                $this->obj->bindvalue($key, $value);
            }
        }
        return $this->obj->execute();
    }

    public function ListarDados(){
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    public function TotalDados(){
        return $this->obj->rowCount();
    }

    public function getItens(){
        return $this->itens;
    }

    public function lastInsertId(){
        return $this->obj = $this->Conectar()->lastInsertId();
    }
}