<?php

class TemplateModel{

    public static function rutaModel($datos){

        if($datos == 'productos' ||
            $datos == 'servicios'||
            $datos == 'contacto'){

            $ruta = 'views/modules/'.$datos.'.php';

            if(file_exists($ruta)){
                $ruta = 'views/modules/'.$datos.'.php';
            }else{
                $ruta = 'views/modules/error404.php';
            }
            

        }elseif($datos == 'inicio'){

            $ruta = 'views/modules/Inicio/inicio.php';

        }else{

            $ruta = 'views/modules/error404.php';
        }

        return $ruta;

    }

    public static function rutaServicioModel($datos){

        if($datos == 'productos' ||
            $datos == 'servicios'||
            $datos == 'contacto'){

            $ruta = 'views/modules/'.$datos.'.php';

            if(file_exists($ruta)){
                $ruta = 'views/modules/'.$datos.'.php';
            }else{
                $ruta = 'views/modules/error404.php';
            }
            

        }elseif($datos == 'inicio'){

            $ruta = 'views/modules/Inicio/inicio.php';

        }else{

            $ruta = 'views/modules/error404.php';
        }

        return $ruta;

    }
}