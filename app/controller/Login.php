<?php

namespace controller;

use model\TablaLogin;
use config\Router;
use config\View;
use model\TablaProductos;

session_start();
class Login extends View
{
    public function iniciarSesion()
    {
        if (!isset($_POST['email']) || !isset($_POST['password'])) {
            echo "Por favor, asegúrate de llenar ambos campos: email y contraseña.";
            return;
        }

        $login = new TablaLogin();
        $usuario = $login->consulta()->where('email', $_POST['email'])->first();
        if ($usuario) {
            if ($usuario['password'] == $_POST['password']) {
                $_SESSION['datos_usuario'] = $usuario;
                header("Location: ./home");
                exit;
            } else {
                echo "Contraseña incorrecta. <a href='login'>Intenta nuevamente</a>";
            }
        } else {
            echo "No se encontró un usuario con ese email. <a href='login'>Intenta nuevamente</a>";
        }
    }

    public function index(){
        $consulta = new TablaLogin;
        $datos = $consulta->consulta()->all();
        return parent::vista('login', $datos);
    }

    public function home(){
        $datos = ["1", "respuesta"];
        return parent::vista('home', $datos);
    }

    public function productos(){
        $consulta = new TablaProductos();
        $datos = $consulta->consulta()->all();
        return parent::vista('productos', $datos);
    }

    public function precios(){
        $datos = new TablaProductos();
        return parent::vista('precios', $datos);
    }

}

$controlador = new Login();
