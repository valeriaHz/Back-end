<?php
require_once './app/controller/Productos.php';

use controller\Productos;

if (!isset($_SESSION['datos_usuario'])) {
    header("Location: login");
    exit;
}


$productos = Productos::obtener_productos();
$limitProductos = Productos::limit();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tabla de Productos</title>
    <style>
        .navbar {
            background-color: rgba(64, 179, 255, 0.5);
            border-radius: 10px;
            margin-top: 10px;
            border: 1px solid rgba(76, 168, 253, 0.685);
        }

        .navbar-nav {
            margin-left: 75%;
        }

        #logo {
            width: 50px;
            height: 50px;
        }

        #titulo {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-contener-center">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                    <div class="container-fluid">
                        <img id="logo" src="../public/img/inicio.png" alt="">
                        <a class="navbar-brand" href="#">Home</a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="./productos">Tabla Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="./precios">Precios</a>
                                </li>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <br>

    <h2 id="titulo">Listado de Productos</h2>
    <table class="table table-dark table-hover" style="width: 50%;">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($productos as $producto) { ?>
            <tr>
                <td><?= $producto['id_producto'] ?></td>
                <td><?= $producto['nombre'] ?></td>
                <td><?= $producto['precio'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <h2 id="titulo">Productos filtrados</h2>
    <table class="table table-dark table-striped" style="width: 20%;">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($limitProductos as $producto) { ?>
            <tr>
                <td><?= $producto['id_producto'] ?></td>
                <td><?= $producto['nombre'] ?></td>
                <td><?= $producto['precio'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>