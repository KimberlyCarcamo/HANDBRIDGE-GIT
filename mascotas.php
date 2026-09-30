<?php
include 'conexion.php';

$id_categoria = 3;
$sql = "SELECT * FROM voluntariados WHERE id_categoria = $id_categoria";
$result = $conn->query($sql);
?>

<!DOCTYPE html>  
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Voluntariado para Hogares de Mascotas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="macotas.css" />
  <style>
    .card.horizontal {
      display: flex;
      flex-direction: row;
      align-items: center;
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background: #fff;
      max-width: 1100px; /* Más ancho */
    }
    .card.horizontal img {
      max-width: 200px;
      height: auto;
      margin-right: 20px;
      border-radius: 8px;
    }
    .card-content {
      flex: 1;
    }
  </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg custom-navbar">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="home.php">
          <img src="imágenes/logoenhorizontal.luchi.png" alt="Hand Bridge Logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="home.php"><b>Inicio</b></a></li>
            <li class="nav-item"><a class="nav-link" href="conocenos.php"><b>Conócenos</b></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><b>¿Qué hacemos?</b></a></li>
            <li class="nav-item"><a class="nav-link" href="donar.php"><b>Donaciones</b></a></li>
            <li class="nav-item1"><a class="nav-link" href="index.php"><b>Login</b></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="hero-image-text">
      <div class="container-img">
        <img src="imágenes/mascotas.jpg" alt="Voluntariado hogares de mascotas" class="curved-image">
      </div>
      <div class="container-text">
        <h2><b>¡Tu ayuda, su segunda oportunidad.!</b></h2>
        <p>Cada huella cuenta, ayuda a los refugios a dar alimento, cariño y una segunda oportunidad a quienes más lo necesitan. ¡Conviértete en voluntario y marca la diferencia en la vida de cientos de peluditos!</p>
      </div>
    </section>

    <header>
      <h1><b>Voluntariado <br>para refugios de mascotas</b></h1>
      <p><h5>Únete a cambiar vidas, explora hogares y fundaciones que necesitan tu ayuda.</h5></p><br>
      <a href="#organizaciones">Explorar voluntariados</a>
    </header>

    <section id="organizaciones" class="container">

    <?php
if ($result && $result->num_rows > 0) {
    $imagenes = [
        'Hechame Una Pata' => 'imágenes/hechameuna pata.webp',
        'FUNZEL' => 'imágenes/funzel.webp',
        'Mi Jardín de Peludos' => 'imágenes/mi jardin.webp',
    ];

    while ($row = $result->fetch_assoc()) {
        $nombreVol = $row['nombre_voluntariado'];
        $rutaImagen = $imagenes[$nombreVol] ?? 'imágenes/default.png';
        ?>
        <div class="card horizontal">
          <img src="<?php echo $rutaImagen; ?>" alt="<?php echo htmlspecialchars($nombreVol); ?>">
          <div class="card-content">
            <h3><b><?php echo htmlspecialchars($row['nombre_voluntariado']); ?></b></h3>
            <p>
              <?php echo nl2br(htmlspecialchars($row['informacion'])); ?><br>
              <b>Día: </b><?php echo htmlspecialchars($row['dias']); ?><br>
              <b>Hora:</b> <?php echo htmlspecialchars($row['hora']); ?><br>
              <b>Costo:</b> <?php echo htmlspecialchars($row['costo']); ?><br>
              <b>Tel: </b><?php echo htmlspecialchars($row['telefono']); ?><br>
              <b>Correo: </b><?php echo htmlspecialchars($row['correo'] ?? ''); ?><br>
              <b>Ubicación: </b><?php echo htmlspecialchars($row['direccion']); ?>
            </p>
            <a href="index.php" class="btn btn-primary">Participar</a>
          </div>
        </div>
        <?php
    }
} else {
    echo "<p>No hay voluntariados registrados en esta categoría.</p>";
}
?>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
