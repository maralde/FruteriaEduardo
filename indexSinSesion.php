<?php
require_once('./php/configure/configure.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruteria Eduardo</title>
    <?php echo $links; ?>
    <style>
        .bg-blue {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <?php
    echo $navSinLogin;
    ?>

    <h1>Zona Indice</h1>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>