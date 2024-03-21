<?php

namespace controller;

use model\TablaPersona;

require_once realpath('.../../vendor/autoload.php');
class Personas
{
    public static function obtener_datos(){
        $persona = new TablaPersona();
        echo json_encode($persona->consulta());
    }
    public static function contar_personas(){
        $persona = new TablaPersona();
        return $persona->consulta()->count()->where('nombre', 'Juan')->all();
    }
    public static function max(){
        $persona = new TablaPersona();
        return $persona->consulta()->max('id_persona')->all();
    }
    public static function min(){
        $persona = new TablaPersona();
        return $persona->consulta()->min('id_persona')->all();
    }
    public static function sum(){
        $persona = new TablaPersona;
        return $persona->consulta()->sum('id_persona')->all();
    }
    public static function avg(){
        $persona = new TablaPersona;
        return $persona->consulta()->avg('id_persona')->all();
    }
    public static function like(){
        $persona = new TablaPersona;
        return $persona->consulta()->where('nombre')->like()->all();
    }
    public static function limit(){
        $persona = new TablaPersona();
        return $persona->consulta()->limit(6)->all();
    }
    public static function obtener_datos_elemento(){
        $persona = new TablaPersona();
        //return $persona->consulta()->limit(6)->all();
        return $persona->consulta()->where('nombre', 'Monica')->all();
        //para el or ->where("nombre", "Monica")->where('id_persona', 3)->all()
        /* TablaUsuario::consulta()->where("id","i")->where("rol","admin"); */
    }
    public static function insertar_datos(){
        $persona = new TablaPersona();
        return $persona->insercion(['nombre'=>'Duran', 'apellido'=>'Meza', 'email'=>'duran@email.com',]);
    }
    public static function actualizar_datos(){
        $persona = new TablaPersona();
        return $persona->actualizar(['nombre'=>'Maria', 'apellido'=>'Fonseca', 'email', 'mari@email.com'])->where('id_persona', '3')->get();
        //where('id_persona', '3')
    }
    public static function eliminar_datos(){
        $persona = new TablaPersona();
        return $persona->eliminar('')->where('id_persona', '2')->get();
    }
}

?>