<?php
namespace config;
use config\Router;
require_once realpath('./vendor/autoload.php');

$router = new Router();

$router->post("/validar", ['Login', 'iniciarSesion']);
$router->get("/home", ['Login', 'home']);
$router->get("/login",['Login', 'index']);
$router->get("/registro", ['Login', 'registro']);
$router->get("/usuarios", ['Login', 'usuarios']);
$router->post("/actualizar", ['Login', 'actualizar']);
$router->post("/eliminar", ['Login', 'eliminar']);
$router->run();

?>