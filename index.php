<?php
    use controller\Personas;
    require_once realpath('./vendor/autoload.php');
    print_r (Personas::obtener_datos_elemento());
?>