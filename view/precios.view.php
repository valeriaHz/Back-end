<?php 
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
    <title>Precios</title>
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

        #card {
            background-color: rgba(61, 135, 247, 0.120);
            height: 350px;
            width: 200px;
            align-items: center;
            margin-bottom: 2rem;
            margin-top: 2rem;
        }

        .card img {
            width: 80%;
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
                        <a class="navbar-brand" href="./home">Home</a>
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
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/top-ml.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">top ml para mujer</h5>
                        <p><strong>$260 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/top-rosa.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">top rosa para mujer</h5>
                        <p><strong>$280 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/sudadera-top.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">sudadera top para mujer</h5>
                        <p><strong>$320 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/crop-top.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">crop top para mujer</h5>
                        <p><strong>$130 MNX</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/bermuda-cargo.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">bermuda cargo para hombre</h5>
                        <p><strong>$238 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/camisa.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">camisa para hombre</h5>
                        <p><strong>$265 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/sudadera2.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sudadera con capucha para hombre</h5>
                        <p><strong>$542 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/bermuda.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">bermuda para hombre</h5>
                        <p><strong>$280 MNX</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/lentes.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">lentes transparentes</h5>
                        <p><strong>$80 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/tenis.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">tenis nike bota</h5>
                        <p><strong>$380 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/gafas-sol.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gafas de sol mujer</h5>
                        <p><strong>$180 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/lentes-reflejantes.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">lentes de sol para hombre</h5>
                        <p><strong>$120 MNX</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/adidas.webp" class="img-catalogo" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tenis Adidas</h5>
                        <p><strong>$450 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/bucket-adidas.webp" class="img-catalogo" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sombrero Bucket Adidas</h5>
                        <p><strong>$340 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/Juego.webp" class="img-catalogo" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Juego Pants y Sudadera NASA</h5>
                        <p><strong>$820 MNX</strong></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="card" class="card">
                    <img src="../public/img/productos/bucket-hojas.webp" class="img-catalogo" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sombrero Bucket Kowy</h5>
                        <p><strong>$360 MNX</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <?php session_destroy() ?>
    </div>
</body>

</html>