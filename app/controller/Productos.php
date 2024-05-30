<?php

namespace controller;
use model\TablaProductos;
require_once realpath('.../../vendor/autoload.php');

class Productos{

    
    public static function obtener_productos(){
        $producto = new TablaProductos();
        return $producto->consulta()->where('id_producto')->all();
    }

    public static function limit(){
        $producto = new TablaProductos();
        return $producto->consulta()->limit(3)->all();
    }


}

?>