<?php

namespace controller;
use model\TablaProductos;
require_once realpath('.../../vendor/autoload.php');

class Productos{

    public static function contar_productos(){
        $producto = new TablaProductos();
        return $producto->consulta()->count()->all();
    }

    public static function obtener_productos(){
        $producto = new TablaProductos();
        return $producto->consulta()->where('id_producto')->all();
    }

    public static function obtener_producto(){
        $producto = new TablaProductos();
        return $producto->consulta()->first();
    }

    public static function limit(){
        $producto = new TablaProductos();
        return $producto->consulta()->limit(3)->all();
    }

    public static function like(){
        $producto = new TablaProductos;
        return $producto->consulta()->where('id_producto')->like()->all();
    }

    public static function eliminar_producto(){
        $producto = new TablaProductos();
        return $producto->eliminar('')->where('id_producto', '2')->get();
    }

}

?>