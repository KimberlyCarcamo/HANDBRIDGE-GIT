<?php

include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["cuenta"]) && !empty($_POST["contraseña"])) {
        $cuenta = $conn->real_escape_string($_POST["cuenta"]);
        $contraseña = password_hash($_POST["contraseña"], PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO login_personas (cuenta, contraseña) VALUES (?, ?)");
        $stmt->bind_param("ss", $cuenta, $contraseña);

        if ($stmt->execute()) {
            header("Location: home2.php");
            exit();
        } else {
            echo "<h2 style='color:red; text-align:center;'>❌ Error al registrar: " . $conn->error . "</h2>";
        }

        $stmt->close();
    } else {
        echo "<h2 style='color:orange; text-align:center;'>⚠️ Por favor completa todos los campos.</h2>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: #f5f7fa;
      color: #333;
      margin: 0;
      padding: 0;
    }

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

    .Forms {
      background: white;
      border-radius: 15px;
      padding: 40px 30px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      max-width: 450px;
      margin: auto;
      text-align: left;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .Forms:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }

    .form-control {
      border: none !important;
      border-bottom: 2px solid #ccc !important;
      border-radius: 0 !important;
      background: transparent !important;
      box-shadow: none !important;
      font-size: 1rem;
      padding-left: 0;
      transition: border-color 0.3s ease;
    }
    .form-control:focus {
      border-color: #007bff !important;
    }

    .btn-success {
      background: #007bff !important;
      border: none !important;
      border-radius: 8px;
      padding: 12px;
      width: 100%;
      font-size: 1.3rem;
      transition: background 0.3s ease;
    }
    .btn-success:hover {
      background: #0056b3 !important;
    }

    .Olvidar a, .Registrarse a {
      text-decoration: none;
      font-size: 1rem;
      transition: color 0.3s ease;
    }
    .Olvidar a:hover, .Registrarse a:hover {
      color: #007bff;
    }

    .bg-primary-subtle {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 40px;
      background: #e8f0ff; 
    }
    .bg-primary-subtle h2 {
      font-size: 2rem;
      margin-bottom: 10px;
      color: #007bff;
    }
    .img-login img {
      max-width: 350px;
      width: 100%;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }

    @media (max-width: 768px) {
      .row {
        flex-direction: column;
        padding: 20px;
      }
      .Forms {
        margin-bottom: 30px;
        width: 90%;
      }
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="home.php">
        <img src="imágenes/logoenhorizontal.luchi.png" alt="Hand Bridge Logo" class="logo">
      </a>
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

  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-12 col-md-6 bg-light mt-5">
        <div class="Forms m-5">
          <form method="post">
            <div class="correo electronico text-dark fw-bolder">
              <label for="cuenta"><h4>Correo Electrónico</h4></label>
              <input class="em form-control" type="email" name="cuenta" id="cuenta" required /><br />
            </div>

            <div class="Contraseña text-dark fw-bolder">
              <label for="contraseña"><h4>Contraseña</h4></label>
              <input class="pass form-control" type="password" name="contraseña" id="contraseña" required /><br />
            </div>

            <div class="Olvidar mt-3">
              <a class="link-success" href="#"><h5>Olvidé mi contraseña</h5></a>
            </div><br />

            <div class="Registrarse mt-2">
              <a class="link-dark" href="register.php"><h5>Registrarse</h5></a>
            </div><br />

            <div class="botton mt-4">
              <input type="submit" class="btn btn-success fw-bolder fs-3" value="Acceder" />
            </div>
          </form>
        </div>
      </div>

      <div class="col-12 col-md-6 bg-primary-subtle text-start p-4 mt-2">
        <h2 class="l1 fw-bolder text-center"><b class="l2">Ayúdanos a</b></h2>
        <h2 class="l3 text-center">transformar</h2>
        <h2 class="l4 fw-bolder text-center"><b>vidas</b></h2>
        <div class="img-login">
          <img src="imágenes/Logo tipo hand brigde.png" class="img-fluid rounded mt-3" alt="..." />
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
