<?php
    namespace controller;
    use config\View;

    class Error extends View{
        public function index(){
            return parent::vista('error', '');
        }
    }
    $controlador = new Error();
?>