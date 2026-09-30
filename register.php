<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="register1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <style>
 
    .navbar {
      background-color: #fff;
      padding: 10px 20px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }
    .logo {
      width: 150px;
      height: auto;
    }
    .navbar-nav .nav-link {
      color: #333;
      font-size: 18px;
      font-weight: 500;
      margin: 0 8px;
      transition: 0.3s;
      border-radius: 6px;
      padding: 8px 12px;
    }
    .navbar-nav .nav-link:hover {
      background-color: #6BE0A4;
      color: #fff;
    }
    .navbar-nav .nav-link.active {
      color: #6BE0A4;
      font-weight: bold;
    }
    .row {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 90vh;
    }
  </style>
</head>
<body>


  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="home.php">
        <img src="imágenes/logoenhorizontal.luchi.png" alt="Hand Bridge Logo" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="home.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="conocenos.php">Conócenos</a></li>
          <li class="nav-item"><a class="nav-link" href="#">¿Qué hacemos?</a></li>
          <li class="nav-item"><a class="nav-link" href="donar.php">Donaciones</a></li>
        </ul>
      </div>
    </div>
  </nav>

 
  <div class="form-container">
    <form class="formulario" action="" method="post">
      <h1 class="re">Regístrate</h1>

      <div class="name text-center">
        <label><h4>Nombre</h4></label>
        <input class="nam" type="text" name="nombre" required>
      </div>

      <div class="apellido text-center">
        <label><h4>Apellido</h4></label>
        <input class="ap" type="text" name="apellido" required>
      </div>

      <div class="dui text-center">
        <label><h4>Número de DUI</h4></label>
        <input class="du" type="text" name="dui" required>
      </div>

      <div class="correo text-center">
        <label><h4>Correo electrónico</h4></label>
        <input class="cor" type="email" name="correo" required>
      </div>

      <div class="contraseña text-center">
        <label><h4>Contraseña</h4></label>
        <input class="con" type="password" name="contraseña" required>
      </div>

      <div class="crear text-center">
        <button type="submit">Registrarse</button>
      </div>
    </form>

    <div class="form-image">
      <img src="imágenes/Logo tipo hand brigde.png" alt="Decoración del formulario">
    </div>
  </div>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["dui"]) && !empty($_POST["correo"]) && !empty($_POST["contraseña"])) {
        
        $nombre = mysqli_real_escape_string($conn, $_POST["nombre"]);
        $apellido = mysqli_real_escape_string($conn, $_POST["apellido"]);
        $dui = mysqli_real_escape_string($conn, $_POST["dui"]);
        $correo = mysqli_real_escape_string($conn, $_POST["correo"]);
        $contraseña = password_hash($_POST["contraseña"], PASSWORD_BCRYPT);

        $stmt = mysqli_prepare($conn, "INSERT INTO registro (nombre, apellido, dui, correo, contraseña) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssss", $nombre, $apellido, $dui, $correo, $contraseña);

        if (mysqli_stmt_execute($stmt)) {
            echo "<h2 style='color:green; text-align:center;'>✅ Registro exitoso</h2>";
        } else {
            echo "<h2 style='color:red; text-align:center;'>❌ Error al registrar: " . mysqli_error($conn) . "</h2>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<h2 style='color:orange; text-align:center;'>⚠️ Todos los campos son obligatorios.</h2>";
    }
  }
  ?>

</body>
</html>
