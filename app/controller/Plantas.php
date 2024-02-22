<?php

    namespace controller;
    use model\TablaPlantas;

    require_once realpath(".../../vendor/autoload.php");

    class Plantas{
        public static function obtener_datos(){
            $planta = new TablaPlantas();
            echo json_encode($planta->consulta());
        }
        public static function insercion_datos(){
            $planta = new TablaPlantas();
            echo json_encode($planta->insercion(['nombre' => 'rosa', 'color'=>'rojo', 'id_planta'=>'']));
        }
        public static function actualizar_datos(){
            $planta = new TablaPlantas();
            echo json_encode($planta->actualizar(['nombre' => 'margarita',  'id_planta'=>1]));
        }
        public static function eliminar_datos(){
            $planta = new TablaPlantas();
            echo json_encode($planta->eliminar(['id_planta'=>1]));
        }

    }

?>