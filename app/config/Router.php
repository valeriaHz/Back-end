<?php

namespace config;
class Router {
    private const SERVER ="http://backend.val/";
    private const DEP_IMG = self::SERVER."public/img/";
    private const DEP_JS = self::SERVER."public/js/";
    private const DEP_CSS = self::SERVER."public/css/";
    private const ERROR = ['Error', 'index'];
    
    private $controller;
    private $method;
    private $ruta2 = [];
    private $routes = [];
    private $importacion;

    public function __construct(){
        $this->importacion;
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

    public function get($ruta, $metodo){
        $ruta_final = trim($ruta, '/');
        $this->routes['GET'][$ruta_final] = $metodo;
    }

    public function post($ruta, $metodo) {
        $ruta_final = trim($ruta, '/');
        $this->routes['POST'][$ruta_final] = $metodo;
    }

    public function put($ruta, $metodo) {
        $ruta_final = trim($ruta, '/');
        $this->routes['PUT'][$ruta_final] = $metodo;
    }

    public function delete($ruta, $metodo) {
        $ruta_final = trim($ruta, '/');
        $this->routes['DELETE'][$ruta_final] = $metodo;
    }

    public function match_route($ruta, $method){
        //valida si tiene 1 o mas valores
        if(preg_match('/[a-zA-Z0-9_-]\/[a-zA-Z0-9_-]/', $ruta)){
            $this->ruta2 = explode('/',$ruta);
            $this->controller = array_key_exists($this->ruta2[0],$this->routes
            [$method]) ? $this->routes[$method][$this->ruta2[0]] : self::ERROR;
        }else{
            $this->controller = array_key_exists($ruta,$this->routes[$method]) ?
            $this->routes[$method][$ruta] : self::ERROR;
        }
        $this->method = $this->controller[1];
        require_once './app/controller/'. $this->controller[0].'.php';
        $this->importacion = $controlador;
    }

    public function run() {
        $ruta = $_SERVER['REQUEST_URI'];
        $ruta = trim($ruta, '/');
        $this->match_route($ruta,$_SERVER['REQUEST_METHOD']);
        $metodo = $this->method;
        $this->importacion->$metodo();
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

    // $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home';
    //     $metodo_envio_datos = $_SERVER['REQUEST_METHOD'];
    //     //GET, POST

    //     if(array_key_exists($metodo_envio_datos, $this->directorio)) {
    //         $mi_vista = $this->directorio[$metodo_envio_datos];
    //         //login
    //         if(array_key_exists($vista, $mi_vista)){
    //             $datos_vista = $mi_vista[$vista];
    //             require_once './app/controller/'.$datos_vista[0].'.php';
    //             $this->controller = $datos_vista[0];
    //             $this->method = $datos_vista[1];
    //             $metodo = $this->method;
    //             $controlador = new $this->controller();
    //             $controlador->$metodo();
    //         }
    //     } else {
    //         require_once './view/error.view.php';
    //     }