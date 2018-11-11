<?php

class Rotas extends Config{

    public static $pag;
    private static $pasta_view = 'Views';

    static function GetPagina(){
        if(isset($_GET['pag'])){
            $pagina = $_GET['pag'];

            self::$pag = explode('/',$pagina);
            $pagina = 'Controllers/' . self::$pag[0] . '.php';
            if(file_exists($pagina)){
                include $pagina;
            }else{
                include 'error.php';
            }
        }
    }

    static function GetSiteHome(){
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    static function GetSiteRaiz(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }

    static function GetSiteTema(){
        return self::GetSiteHome() . '/' . self::$pasta_view;
    }

    static function Redirecionar($tempo, $pagina){
		$url = '<meta http-equiv="refresh" content="'.$tempo.'; url='. $pagina .'">';
		echo $url;
	}

    static function GetPagRegister(){
        return self::GetSiteHome() . '/register';
    }

    static function GetPagLogin(){
        return self::GetSiteHome() . '/login';
    }

    static function GetPagLogout(){
        return self::GetSiteHome() . '/logout';
    }

    static function GetPagUserRecovery(){
        return self::GetSiteHome() . '/user_recovery';
    }

    static function GetPagUserNewPass(){
        return self::GetSiteHome() . '/user_senha';
    }

    static function GetPagNewTask(){
        return self::GetSiteHome() . '/task_new';
    }

    static function GetPagTasks(){
        return self::GetSiteHome() . '/tasks';
    }

    static function GetPagEditTask(){
        return self::GetSiteHome() . '/task_edit';
    }

    static function GetPagTaskDel(){
        return self::GetSiteHome() . '/task_del';
    }
}