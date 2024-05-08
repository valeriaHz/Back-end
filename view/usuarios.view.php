<?php
use config\Router;
use controller\Login;
if (!isset($_SESSION['datos_usuario'])) {
    header("Location: login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Usuarios</title>
</head>
<body>
    <div class="container">
        <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach ($datos as $dato) { ?>
                <td><?=$dato['id_usuario']; ?></td>
                <td><?=$dato['email'];?></td>
                <td><?=$dato['password']; ?></td>
                <td><a href="actualizar<?= $dato['id_usuario']; ?>" class="btn btn-primary">Actualizar</a></td>
                <td><a href="eliminar<?= $dato['id_usuario']; ?>" class="btn btn-danger">Eliminar</a></td>
            </tr>
            </tr>
        </tbody>
        <?php } ?>
    </table>
        <a href="registro" class="btn btn-success">Registrar Nuevo Usuario</a>
        <a class="btn btn-danger" href="login">Cerrar sesión</a>
        <?php session_destroy() ?>
    </div>
</body>
</html>
