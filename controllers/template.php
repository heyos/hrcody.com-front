<?php

Class Template{

    public static function templateController(){

        include 'views/template.php';

    }

    public static function titleTemplate(){

        if(isset($_GET["page"])){

            $action = Globales::sanearData($_GET["page"]);

            if(strpos($action,"-")){
                $action = str_replace("-", " ", $action);
            }

        }else{

            $action = 'inicio';
        }

        $action = ucwords($action);

        define('TITLE', $action);
    }

    public static function baseUrl(){

        $base = dirname($_SERVER["SCRIPT_NAME"]);
        $base = str_replace('\\','/',$base);
        
        if ($base == '/') { 
            $base = NULL; 
        }

        define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].$base.'/');
    }

    public static function rutaController(){

        if(isset($_GET["action"])){

            $action = Globales::sanearData($_GET["action"]);

        }else{

            $action = 'inicio';
        }

        $respuesta = TemplateModel::rutaModel($action);

        include $respuesta ;

    }

    

}