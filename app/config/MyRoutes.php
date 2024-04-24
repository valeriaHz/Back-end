<?php
namespace config;
use config\Router;
require_once realpath('./vendor/autoload.php');

$router = new Router();



$router->get("/validarLogin", ['Login', 'iniciarSesion']);
$router->get("/home", ['Home', 'index']);
$router->get("/login",['Login', "index"]);
//crear rutas con respectivos metodos

$router->route();

?>