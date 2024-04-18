<?php
    // echo 'estas en view';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <main>
        <img src="./public/img/logo.jpg" width="200px" height="200px">
        <form action="home" method="POST" id="login-form">
            <div class="input-form">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Escribe tu email" />
            </div>
            <div class="input-form">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Introduce tu contraseña" />
            </div>
            <button type="submit" class="btn btn-success">Login</button>
            <p>
                ¿No tienes usuario? Entonces puedes crear una cuenta <a href="registro" class="white">aquí</a>
            </p>
        </form>
    </main>
    <script src="../public/js/login-validation.js"></script>
</body>
</html>
