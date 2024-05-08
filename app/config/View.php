<?php

namespace config;

class View {
    public function vista($mi_vista, $datos){
        if(file_exists('./view/'.$mi_vista.'.view.php')){
            $mi_vista = './view/'.$mi_vista.'.view.php';
        }else{
            $mi_vista = './view/eror.view.php';
        }
        require_once $mi_vista;
    }
}




