<?php

class Servicio{

    public static function headerServicio(){

        $page = '';
        $servicio = 'NOT FOUND';

        if(isset($_GET["page"])){

            $page = Globales::sanearData($_GET["page"]);

        }

        $key = ServicioModel::listaServicios('key');

        if(in_array($page, $key)){

            $name = ServicioModel::listaServicios('name');
            $servicio = $name[$page];

        }

        return $servicio;

    }

    public static function rutaServiciosController(){

        $page = '';

        if(isset($_GET["page"])){

            $page = Globales::sanearData($_GET["page"]);

        }

        $key = ServicioModel::listaServicios('key');

        if(in_array($page, $key)){

            $ruta = 'views/modules/servicios/'.$page.'.php';

            if(file_exists($ruta)){
                $ruta = 'views/modules/servicios/'.$page.'.php';
            }else{
                $ruta = 'views/modules/error404.php';
            }

        }else{

            $ruta = 'views/modules/error404.php';
        }

        

        include $ruta ;

    }


}