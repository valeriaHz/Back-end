<?php
namespace config;
use config\Router;
require_once realpath('./vendor/autoload.php');

$router = new Router();

$router->post("/validar", ['Login', 'iniciarSesion']);
$router->get("/home", ['Login', 'home']);
$router->get("/login",['Login', 'index']);
$router->get("/productos", ['Login', 'productos']);
$router->get("/precios", ['Login', 'precios']);
$router->run();

?>