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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/main.css">
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
