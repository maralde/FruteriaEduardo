<?php
include_once('./configure/configure.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST['mail'];
    $Pass = $_POST['pass'];

    $sql = "SELECT u.nombre AS Nombre, u.rol AS Rol FROM usuario AS u WHERE email='$Email' AND contraseña='$Pass'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();

        $row = $result->fetch_assoc();

        $_SESSION["Nombre"] = $row["Nombre"];

        $_SESSION["Rol"] = $row["Rol"];

        header("Location: ../index.php");
    }
}