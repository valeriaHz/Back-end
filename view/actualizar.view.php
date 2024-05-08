<?php
use config\Router;
use controller\Login;

$id_usuario = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevos_datos = [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    header("Location: usuarios");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
</head>
<body>
    <h1>Actualizar Usuario</h1>
    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $datos_usuario['email']; ?>" required><br><br>

        <label for="password">Passwprd:</label>
        <input type="password" name="password" id="password" value="<?= $datos_usuario['password']; ?>" required><br><br>
        
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
