<?php 

    require_once realpath('./vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable('./');
    $dotenv->load();

    
    $host = $_ENV['HOST'];
    $conexion;
    $puerto = $_ENV['PUERTO'];
    $db = $_ENV['DB'];
    $usuario = $_ENV['USUARIO'];
    $pass = $_ENV['PASS'];

    $conexion = new mysqli($host,$usuario,$pass,$db,$puerto);

    if($conexion->connect_error){
        echo ("Error en la conexion a la base de datos");
    }else{
        echo ("Conexion exitosa a la base de datos");
    }

?>