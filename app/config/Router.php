<?php

namespace config;

class Router {
    private const SERVER ="http://backend.val/";
    private const DEP_IMG = self::SERVER."public/img/";
    private const DEP_JS = self::SERVER."public/js/";
    private const DEP_CSS = self::SERVER."public/css/";
    private $controller;
    private $method;
    private $directorio;

    public function __construct(){
        
    }

    public function get($ruta, $metodo){
        $ruta_final = trim($ruta, '/');
        $this->directorio['GET'][$ruta_final] = $metodo;
    }

    public function route() {
        $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home';
        $metodo_envio_datos = $_SERVER['REQUEST_METHOD'];
        //GET, POST

        if(array_key_exists($metodo_envio_datos, $this->directorio)) {
            $mi_vista = $this->directorio[$metodo_envio_datos];
            //login
            if(array_key_exists($vista, $mi_vista)){
                $datos_vista = $mi_vista[$vista];
                require_once './app/controller/'.$datos_vista[0].'.php';
                $this->controller = $datos_vista[0];
                $this->method = $datos_vista[1];
                $metodo = $this->method;
                $controlador = new $this->controller();
                $controlador->$metodo();
            }
        } else {
            require_once './view/error.view.php';
        }
    }

    
    public function enlace($ruta){
        return self::SERVER . $ruta;
    }

    public function dep_css($archivo){
        return self::DEP_CSS.$archivo.'.css';
    }

    public function dep_js($archivo){
        return self::DEP_JS.$archivo.'.js';
    }

    public function dep_img($archivo){
        return self::DEP_IMG.$archivo.'.img';
    }

    public function redirigir($ruta){
        echo '<script>window.location="/'.$ruta.'";</script>';
    }
}





    // public function router2() {
    //     $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home';
    //     if (array_key_exists($vista, DIRECTORIO)) {
    //         require_once DIRECTORIO[$vista].'.view.php';
    //     } else {
    //         require_once DIRECTORIO['error'].'.view.php';
    //     }
    // }


    // if($_SERVER['REQUEST_METHOD'] == "GET"){
    //     echo print_r($this->directorio);
    //     echo "Este es un metodo get";
    // }

    // if(!is_array(DIRECTORIO[$vista])){
                
    // }else{
    //     require_once './app/controller/'.DIRECTORIO[$vista]['view'];
    // }