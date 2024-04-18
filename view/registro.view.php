<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $resultado = "Todos los campos son obligatorios.";
    } else {
        $resultado = "Registro exitoso.";
    }

    echo $resultado;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>
<body>
    <main>
        <img src="../public/img/logo.jpg" width="200px" height="200px">
        <form action="registro" method="POST" id="register-form">
            <?php
            if (isset($resultado)) {
            } else {
            ?>
                <div class="input-form">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Escribe tu email" required>
                </div>
                <div class="input-form">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Introduce tu contraseña" required>
                </div>
                <button type="submit">Registrar</button>
            <?php
            }
            ?>
            <br>
            <a href="login" class="go-back-button">Volver</a>
        </form>
    </main>
    <script src="../public/js/for-validation.js"></script>
</body>
</html>
