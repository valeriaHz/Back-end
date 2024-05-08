<?php
session_start();

$resultado = $_SESSION['resultado'] ?? '';
unset($_SESSION['resultado']); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Registro</title>
</head>
<body>
    <?php if ($resultado): ?>
        <div class="alert alert-info">
            <?php echo $resultado; ?>
        </div>
    <?php endif; ?>
    <a href="registro">Regresar</a>
</body>
</html>
