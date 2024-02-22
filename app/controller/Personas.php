<?php

namespace controller;

use model\TablaPersona;

require_once realpath('.../../vendor/autoload.php');



class Personas
{
    public static function obtener_datos()
    {
        $persona = new TablaPersona();
        echo json_encode($persona->consulta());
    }
    public static function obtener_datos_elemento(){
        $persona = new TablaPersona();
        return $persona->consulta(['id_persona', 'nombre'])->where('id_persona', '2');
    }
    public static function insertar_datos()
    {
        $persona = new TablaPersona();
        echo json_encode($persona->insercion(['nombre'=>'Cristo', 'edad'=>24, 'sexo'=>'Masculino',] ));
    }
    public static function actualizar_datos(){
        $persona = new TablaPersona();
        echo json_encode($persona->actualizar(['nombre'=>'PacoMemo', 'edad'=>110, 'id_persona'=>4]));
    }
    public static function eliminar_datos(){
        $persona = new TablaPersona();
        echo json_encode($persona->eliminar(['id_persona'=>8]));
    }
}

?>