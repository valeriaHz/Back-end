<?php
use config\Router;
use controller\Login;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Login</title>
</head>

<body>
    <main>
        <img src="./public/img/logo.jpg" width="200px" height="200px">
        <form action="validar" method="POST" id="login-form">
            <div class="input-form">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Escribe tu email" />
            </div>
            <div class="input-form">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Introduce tu contraseña" />
            </div>
            <button type="submit">Login</button>
        </form>
    </main>
    <hr>
    <table class="table table-dark table-striped" style="width: 50%;">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach ($datos as $dato) { ?>
                <td><?=$dato['id_usuario']; ?></td>
                <td><?=$dato['email'];?></td>
                <td><?=$dato['password']; ?></td>
            </tr>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <script src="../public/js/login-validation.js"></script>
</body>

</html>