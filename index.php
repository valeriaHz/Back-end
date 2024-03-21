<?php

require_once realpath('./vendor/autoload.php');
require_once './app/config/Config.php';

class Router {
    private $rutas;

    public function __construct() {
        $this->rutas = new Rutas(); 
    }

    public function vista() {
        $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home';
        $rutaVista = $this->rutas->rutaVista($vista);

        require_once $rutaVista;
    }
}

$router = new Router();
$router->vista();



/* function vista(){
    $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home';
    if(array_key_exists($vista,DIRECTORIO)){
        require_once DIRECTORIO[$vista].'.view.php';
    }else{
        require_once DIRECTORIO['error'].'.view.php';

    }
}

 */



    /* use controller\Personas;
    require_once realpath('./vendor/autoload.php');
    //echo print_r(Personas::insertar_datos());
    //echo print_r(Personas::eliminar_datos());
    //echo print_r(Personas::contar_personas());
    echo print_r(Personas::max());
    echo "<br>";
    echo print_r(Personas::min());
    echo "<br>";
    echo print_r(Personas::avg());
    echo "<br>";
    echo print_r(Personas::like());
    echo "<br>";
    echo print_r(Personas::sum());
    //echo print_r(Personas::obtener_datos_elemento());
    //echo print_r(Personas::actualizar_datos()); 
    function login(){
    $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'login';
    if(array_key_exists($vista,DIRECTORIO)){
        require_once DIRECTORIO[$vista].'.view.php';
    }else{
        require_once DIRECTORIO['error'].'.view.php';

    }
}
    */
