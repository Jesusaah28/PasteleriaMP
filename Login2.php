<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="./css/Styles.css">
</head>
<body>
<div class="login-container">
  <h2>Bienvenido!!</h2>

  <!-- Mensaje de error si las credenciales son incorrectas -->
  <?php
    if (isset($_GET["error"]) && $_GET["error"] == 1) {
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
  }
  ?>

  <form id="loginForm" action="login.php" method="post">
    <div class="input-group">
      <label for="username">Usuario:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="input-group">
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Iniciar Sesión</button>
  </form>
</div>
</body>
</html>

