<?php

use config\Router;

require_once realpath('./vendor/autoload.php');
$router = new Router();
$router->route();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$router->dep_css("main")?>">
    <title>Document</title>
</head>
<body>
    <!-- <a href="<?= $router->enlace("login"); ?>">Login</a> -->
</body>
</html>