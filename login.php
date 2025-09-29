<?php
require_once __DIR__ . "/src/config/db.php";

$sql = "SELECT * FROM usuario";
$stmt = $conn->query($sql);

// Para contar filas:
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Usuario: " . $row["nombre"] . "<br>";
    }
} else {
    echo "0 resultados";
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="public/css/login.css">
</head>
<body>
  <div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form>
      <input type="email" placeholder="Correo" required>
      <input type="password" placeholder="Contraseña" required>
      <button type="submit">Entrar</button>
    </form>
    <p><a href="register.html">¿No tienes cuenta? Regístrate</a></p>
  </div>
</body>
</html>
