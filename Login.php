<?php
session_start();

// Comprobar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar credenciales
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Comprobar si las credenciales son correctas (usuario ADMIN y contraseña 12345678)
    if ($username === "ADMIN" && $password === "12345678") {
        // Establecer una sesión para el usuario
        $_SESSION["username"] = $username;

        // Redirigir al usuario a la página de administrador
        header("Location: AdminPage.php");
        exit();
    } else {
        // Credenciales incorrectas, mostrar mensaje de error y redirigir a la página de inicio de sesión
        header("Location: login2.php?error=1");
        exit();
    }
}
?>


