<?php
$host = "localhost";       
$user = "root";            
$pass = "";                
$db   = "login";      

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre     = $_POST['nombre'];
    $dui        = $_POST['dui'];
    $correo     = $_POST['correo'];
    $telefono   = $_POST['telefono'];
    $fundacion  = $_POST['fundacion'];
    $banco      = $_POST['banco'];
    $cantidad   = floatval($_POST['cantidad']);

    if($cantidad <= 0){
        $mensaje = "La cantidad debe ser mayor a 0.";
    } else {
        $sql = "INSERT INTO donaciones (nombre_completo, dui, correo, telefono, fundacion, banco, cantidad)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssd", $nombre, $dui, $correo, $telefono, $fundacion, $banco, $cantidad);

        if ($stmt->execute()) {
            $mensaje = "¡Donación registrada con éxito!";
        } else {
            $mensaje = "Error al registrar la donación.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Donar</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
  
  @keyframes fadeIn { from { opacity:0; transform:translateY(-20px);} to {opacity:1; transform:translateY(0);} }
  @keyframes popIn {0%{opacity:0; transform:scale(0.95);}100%{opacity:1; transform:scale(1);}}

  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fa;
    color: #333;
    margin:0; padding:0;
  }

  
  .navbar {
    background-color: #fff;
    padding: 1rem 2rem;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
  }
  .navbar .nav-link { color:#333; font-weight:500; margin:0 8px; transition:0.3s;}
  .navbar .nav-link:hover { color:#fff; background:linear-gradient(90deg,#6BE0A4,#54d98a); border-radius:8px; padding:6px 12px;}
  .navbar .nav-link.active { font-weight:bold; color:#6BE0A4; }

  
  .header-img {
    max-width: 500px;
    width: 80%;
    margin: 2rem auto;
    display: block;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    animation: fadeIn 1.2s ease-in-out;
  }

  h1 { text-align:center; color:#27adb4; margin:2rem 0 1rem 0; animation: fadeIn 1.5s ease-in-out;}

 
  .donation-btn {
    border-radius: 50px;
    width: 100%;
    padding: 15px 0;
    font-size: 1.2rem;
    font-weight: bold;
    color: #fff;
    background: linear-gradient(90deg,  #007bff,  #007bff);
    border: none;
    margin-bottom: 15px;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s;
    animation: popIn 0.8s ease-in-out;
  }
  .donation-btn:hover { transform: scale(1.08); box-shadow: 0 8px 20px rgba(0,0,0,0.15); }

  
  input[type="text"], input[type="email"], input[type="number"] {
    width: 100%;
    padding: 15px 20px;
    margin-bottom: 20px;
    border-radius: 12px;
    border: 2px solid  #007bff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    font-size: 1rem;
    transition:0.3s;
  }
  input:focus { outline:none; border-color:#28a745; box-shadow:0 0 10px rgba(40,167,69,0.2); }

  
  .form-container {
    background-color: #fff;
    max-width: 900px;
    margin: 3rem auto;
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    animation: fadeIn 1.2s ease-in-out;
  }


  .mensaje {
    text-align:center;
    font-size:1.2rem;
    margin-bottom: 1rem;
    color:#28a745;
  }

 
  @media(max-width:768px){
    .header-img { width:90%; }
    .donation-btn { font-size:1rem; padding:12px; }
  }
  </style>

  <script>
    function seleccionarCantidad(valor) {
        document.getElementById("cantidad").value = valor;
    }
  </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="home2.php">
          <img src="imágenes/logoenhorizontal.luchi.png" alt="Hand Bridge Logo" class="logo" style="width:150px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="home2.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="conocenos.php">Conócenos</a></li>
            <li class="nav-item"><a class="nav-link" href="expeencias.php">Experiencias</a></li>
            <li class="nav-item"><a class="nav-link" href="donar.php">Donaciones</a></li>
          </ul>
        </div>
      </div>
    </nav>

        <img src="imágenes/donaciones.png" class="header-img" alt="Donaciones"/>

        <h1>APOYA A LAS FUNDACIONES CON:</h1>

    <div class="container form-container">
    
      <?php if(!empty($mensaje)) echo "<div class='mensaje'>$mensaje</div>"; ?>

        <div class="row text-center mb-4">
          <div class="col-6 col-md-3"><button type="button" class="donation-btn" onclick="seleccionarCantidad(5)">$5</button></div>
          <div class="col-6 col-md-3"><button type="button" class="donation-btn" onclick="seleccionarCantidad(10)">$10</button></div>
          <div class="col-6 col-md-3"><button type="button" class="donation-btn" onclick="seleccionarCantidad(15)">$15</button></div>
          <div class="col-6 col-md-3"><button type="button" class="donation-btn" onclick="seleccionarCantidad(20)">$20</button></div>
        </div>

    <form method="post">
      <div class="row">
        <div class="col-md-6">
          <input type="text" name="nombre" placeholder="Nombre completo" required>
          <input type="text" name="dui" placeholder="DUI" required>
          <input type="email" name="correo" placeholder="Correo electrónico" required>
          <input type="text" name="telefono" placeholder="Número de teléfono" required>
        </div>
        <div class="col-md-6">
          <input type="text" name="fundacion" placeholder="Fundación que quieres ayudar" required>
          <input type="text" name="banco" placeholder="Banco" required>
          <input type="number" name="cantidad" id="cantidad" placeholder="Otra cantidad" min="1" required>
          <button type="submit" class="donation-btn mt-2">DONAR</button>
        </div>
      </div>
    </form>
  </div>

</body>
</html>
