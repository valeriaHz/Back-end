<?php
require_once './app/controller/Productos.php'; 

use controller\Productos;
$resultado = Productos::eliminar_producto();


$productos = Productos::obtener_productos();
$primerProducto = Productos::obtener_producto();
$limitProductos = Productos::limit();
$likeProductos = Productos::like();
$totalProductos = Productos::contar_productos();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Productos</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h2>Listado de Productos</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Caducidad</th>
        </tr>
        <?php foreach ($productos as $producto) { ?>
            <tr>
                <td><?php echo htmlspecialchars($producto['id_producto']); ?></td>
                <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                <td><?php echo htmlspecialchars($producto['precio']); ?></td>
                <td><?php echo htmlspecialchars($producto['caducidad']); ?></td>
            </tr>
        <?php } ?>
    </table>

    <h2>Mostrar un Producto</h2>
    <p><?php echo htmlspecialchars($primerProducto['nombre']); ?></p>

    <h2>Mostrar 3 productos</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        <?php foreach ($limitProductos as $producto) { ?>
            <tr>
                <td><?php echo htmlspecialchars($producto['id_producto']); ?></td>
                <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
            </tr>
        <?php } ?>
    </table>

    <h2>Productos Filtrados</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        <?php foreach ($likeProductos as $producto) { ?>
            <tr>
                <td><?php echo htmlspecialchars($producto['id_producto']); ?></td>
                <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
            </tr>
        <?php } ?>
    </table>
    <p><?php echo 'Resultado de eliminar producto: ' . ($resultado ? 'Éxito' : 'Fallo'); ?></p>

</body>
</html>



