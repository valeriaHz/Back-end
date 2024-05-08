<?php 
if (!isset($_SESSION['datos_usuario'])) {
    header("Location: login");
    exit;
}
?>

<div class="container">
    <div class="row justify-contener-center">
        <div class="col">
            <h1>Estas en Home</h1>
            <a href="./usuarios">Usuarios</a>
        </div>
    </div>
</div>