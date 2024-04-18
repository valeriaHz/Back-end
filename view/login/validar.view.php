<?php
    use controller\Login;
    require_once realpath('./vendor/autoload.php');
    $login = new Login();
    $login->iniciarSesion();
?>