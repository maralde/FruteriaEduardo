<?php
require_once('./php/configure/configure.php');

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php echo $links; ?>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-sm" style="width: 400px;">
            <div class="card-header bg-green text-dark text-center">
                <h4 class="mb-4">Iniciar Sesión</h4>
            </div>
            <div class="card-body">
                <form action="./php/enviarDatos.php" method="post">
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email</label>
                        <input type="text" id="mail" name="mail" class="form-control" placeholder="Introduce el correo"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="password" id="pass" name="pass" class="form-control"
                            placeholder="Introduce la contraseña" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-green text-dark">Iniciar Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>