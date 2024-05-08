<?php

use controller\Login;

require_once realpath('./vendor/autoload.php');
$datos = new Login();
$datos->eliminar();
?>