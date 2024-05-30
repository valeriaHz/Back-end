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
    <title>Home</title>
</head>

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
    .carousel-item img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }
</style>

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
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../public/img/productos/blusa-manga.webp" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/productos/sudadera.webp" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/productos/crop-top.webp" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/productos/sudadera-n1.webp" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/productos/vestido.webp" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/productos/camiseta-ml.webp" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>

</html>