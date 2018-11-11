<?php


class Tasks extends Conexao{

    public function __construct(){
        parent::__construct();
    }


    public function SaveTask($tasks,$description,$date_expires,$priority,$status,$user_id){
        $retorno = FALSE;

        $query = "INSERT INTO {$this->prefix}tasks(tasks,description,date_expires,priority,status,user_id,created_at) ";
        $query .= "VALUES(:tasks,:description,:date_expires,:priority,:status,:user_id, NOW())";

        $params = array(
            ':tasks' => $tasks,
            ':description' => $description,
            ':date_expires' => $date_expires,
            ':priority' => $priority,
            ':status' => $status,
            ':user_id' => (int)$user_id,
            
        );
        $this->ExecuteSQL($query, $params);
        $retorno = TRUE;
        return $retorno;
    }

    public function Editar($id, $tasks, $description, $date_expires, $priority, $status){
        $retorno = FALSE;

        $query = "UPDATE {$this->prefix}tasks SET tasks = :tasks, description = :description , date_expires = :date_expires, ";
        $query .= "priority = :priority, status = :status, update_at = NOW() ";
        $query .= "WHERE idtask = :idtask";

        $params = array(
            ':idtask' => (int)$id,
            ':tasks' => $tasks,
            ':description' => $description,
            ':date_expires' => $date_expires,
            ':priority' => $priority,
            ':status' => $status
        );
        $this->ExecuteSQL($query, $params);
        $retorno = TRUE;
        return $retorno;
    }

    public function TaskDelete($id){
        $query = "DELETE FROM {$this->prefix}tasks WHERE idtask = :idtask";
        $params = array(
            ':idtask' => (int)$id
        );
        $this->ExecuteSQL($query, $params);
    }


    public function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()){
            $this->itens[$i] = array(
                'idtask' => $lista['idtask'],
                'tasks' => $lista['tasks'],
                'description' => $lista['description'],
                'date_expires' => Sistema::DataAtualUS($lista['date_expires']),
                'priority' => $lista['priority'],
                'status' => $lista['status'],
                'user_id' => $lista['user_id'],
                'created_at' => $lista['created_at']
            );
            $i++;
        }
    }

    public function GetTaskUserId($id){
        $query = "SELECT * FROM {$this->prefix}tasks t INNER JOIN {$this->prefix}users u ON t.user_id = u.iduser ";
        $query .= " AND idtask = :id";

        $params = array(
            ':id' => (int)$id
        );

        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    public function GetTaskId($id){
        $query = "SELECT * FROM {$this->prefix}tasks WHERE idtask = :idtask";
        $query .= " ORDER BY idtask DESC";
        $params = array(':idtask' => (int)$id);
        $this->ExecuteSQL($query, $params);
        $this->GetLista(); 
    }

    public function GetTaskUser($user = NULL){
        $query = "SELECT * FROM {$this->prefix}tasks t INNER JOIN {$this->prefix}users u ";
        $query .= "ON t.user_id = u.iduser ";
        if($user != NULL){
            $user_id = (int)$user;
            $query .= "WHERE t.user_id = {$user_id} ";
            $query .= "ORDER BY t.idtask DESC";
        }
        $this->ExecuteSQL($query);
        $this->GetLista();
    }


}