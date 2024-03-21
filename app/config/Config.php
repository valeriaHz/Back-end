<?php

class Rutas {
    const SERVER = 'http://back-end.local/';
    const DEP_IMG = self::SERVER . "public/img/";
    const DEP_JS = self::SERVER . "public/js/";
    const DEP_CSS = self::SERVER . "public/css/";

    private $directorio = array(
        'home' => 'view/home',
        'login' => 'view/login',
        'error' => 'view/error'
    );


    public function rutaVista($vista) {
        if (array_key_exists($vista, $this->directorio)) {
            return $this->directorio[$vista] . '.php';
        } else {
            return $this->directorio['error'] . '.php';
        }
    }
}

$recursos = new Rutas();
echo $recursos->rutaVista('home') . "\n";



    /* define('SERVER','http://back-end.local/');
    define('DEP_IMG',SERVER."public/img/");
    define('DEP_JS',SERVER."public/js/");
    define('DEP_CSS',SERVER."public/css/");

    define('DIRECTORIO',array(
        'home'=>'view/home',
        'login'=>'view/login',
        'error'=>'view/error'
    ));
    
    public function obtenerImgUrl($nombreImagen) {
        return self::DEP_IMG . $nombreImagen;
    }

    public function obtenerJsUrl($nombreJs) {
        return self::DEP_JS . $nombreJs;
    }

    public function obtenerCssUrl($nombreCss) {
        return self::DEP_CSS . $nombreCss;
    }
      */