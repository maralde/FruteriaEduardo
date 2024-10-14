<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "Marcos";
$password = "DAW2425";
$dbname = "fruteriaeduardo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$RutaCss = $_SERVER['DOCUMENT_ROOT'] . 'localhost/css/style.css';

$links = '
    <link rel="icon" type="image/x-icon" href="imagenes/fruteria.png">
    <link rel="stylesheet" href="./css/style.css" />

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">';

$navSinLogin = '  <!--Barra navegación sin login previo-->
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./imagenes/fruteria.png" width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controlls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle-navigation">
                <span class="navbar-toggler-icon navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex justify-content-center align-items-center ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><b>Inicio</b></a>
                    </li>
                    <li class="nav-item">
                        <!--Debe llevar a una lista con nuestros productos-->
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <!--Debe llevar a la pagina de iniciar sesión-->
                        <a class="nav-link" href="./login.php">Inicia Sesión</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>';

$navNoAdmin = '  <!--Barra navegación No Admin-->
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./imagenes/fruteria.png" width="100"></a>
            <a class="navbar-text">Hola <?php echo $_SESSION["Nombre"]; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controlls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle-navigation">
                <span class="navbar-toggler-icon navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex justify-content-center align-items-center ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><b>Inicio</b></a>
                    </li>
                    <li class="nav-item">
                        <!--Debe llevar a una lista con nuestros productos-->
                        <a class="nav-link" href="./productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <!--Debe llevar a la pagina de iniciar sesión-->
                        <a class="nav-link" href="./php/cerrarSesion.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';

$navAdmin = '  <!--Barra navegación Admin-->
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./imagenes/fruteria.png" width="100"></a>
            <p class="navbar-text">Hola <?php echo $_SESSION["Nombre"]; ?></p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controlls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle-navigation">
                <span class="navbar-toggler-icon navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex justify-content-center align-items-center ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><b>Inicio</b></a>
                    </li>
                    <li class="nav-item">
                        <!--Debe llevar a una lista con nuestros productos-->
                        <a class="nav-link" href="./productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <!--Debe llevar a una lista con nuestros productos-->
                        <a class="nav-link" href="./Almacen.php">Almacen</a>
                    </li>
                    <li class="nav-item">
                        <!--Debe llevar a una lista con nuestros productos-->
                        <a class="nav-link" href="./stock.php">Stock</a>
                    </li>
                    <li class="nav-item">
                        <!--Debe llevar a la pagina de iniciar sesión-->
                        <a class="nav-link" href="./php/cerrarSesion.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';