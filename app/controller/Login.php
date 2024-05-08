<?php

namespace controller;
use model\TablaLogin;
use config\Router;
use config\View;
use model\TablaProductos;

session_start();
class Login extends View{
    public function iniciarSesion(){
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
        return parent::vista('login',$datos);
    }

    public function registro(){
        $datos = new TablaLogin;
        return parent::vista('registro', $datos);
    }

    public function home(){
        $datos = ["1","respuesta"];
        return parent::vista('home',$datos);
    }

    public function usuarios(){
        $consulta = new TablaLogin;
        $datos = $consulta->consulta()->all();
        return parent::vista('usuarios', $datos);
    }

    public function actualizar(){
        $id_usuario = $_GET['id'] ?? null;
        if ($id_usuario && $_SERVER["REQUEST_METHOD"] == "POST") {
            $nuevos_datos = [
                'id' => $id_usuario, 
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];
            $login = new TablaLogin;
            $login->actualizar($nuevos_datos);
            header("Location: usuarios");
            exit;
        } else {
            echo "Solicitud no válida";
        }
    }

    public function eliminar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = new TablaLogin;
            $datos->eliminar();
            header('Location: /login'); 
            exit;
        }
        header('Location: /error'); 
        exit;
    }

    public function productos(){
        $consulta = new TablaProductos();
        echo json_encode($consulta->consulta()->all());
    }

}

$controlador = new Login();

?>