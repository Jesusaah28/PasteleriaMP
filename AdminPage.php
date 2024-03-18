<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["username"])) {
    // Usuario no autenticado, redirigir a la página de inicio de sesión
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administrador</title>
</head>
<body>
<button style="float: right; margin-right: 20px; padding: 10px 20px; background-color: #4a33a7;
            color: white; border: none; border-radius: 5px; cursor: pointer;
            " onclick="window.location.href = 'index.html';">Cerrar Sesión</button>
<h1>Bienvenido a la Página de Administrador</h1>
</body>
</html>
