<?php

class ServicioModel{

    public static function listaServicios($datos){

        $serviciosKey = array('desarrollo-web','apps-moviles','software-a-medida','desarrollo-de-api','tiendas-virtuales','facturacion-electronica');
        $servicioName = array('desarrollo-web' => 'Desarrollo y Diseño Web',
                                'apps-moviles'=>'Apps Moviles',
                                'software-a-medida'=>'Software a Medida',
                                'desarrollo-de-api'=>'Desarrollo de Api',
                                'tiendas-virtuales'=>'Tiendas Virtuales',
                                'facturacion-electronica'=>'Facturación Electrónica');

        switch ($datos) {
            case 'key':
                return $serviciosKey;
                break;
            case 'name':
                return $servicioName;
                break;
            default:
                # code...
                break;
        }

    }

}