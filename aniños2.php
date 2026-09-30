<?php
include 'conexion.php'; 

$id_categoria = 1;  
$sql = "SELECT * FROM voluntariados WHERE id_categoria = $id_categoria";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Voluntariado para Niños</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="aniños2.css" />
  <style>
    .card img {
      max-width: 200px;
      height: auto;
      border-radius: 8px;
      object-fit: cover;
    }
    .card.horizontal {
      display: flex;
      align-items: center;
      gap: 15px;
    }
    .card-content {
      flex: 1;
    }
  </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg custom-navbar">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="home2.php">
          <img src="imágenes/logoenhorizontal.luchi.png" alt="Hand Bridge Logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="home2.php"><b>Inicio</b></a></li>
            <li class="nav-item"><a class="nav-link" href="conocenos.php"><b>Conócenos</b></a></li>
            <li class="nav-item"><a class="nav-link" href="expeencias2.php"><b>Experiencias</b></a></li>
            <li class="nav-item"><a class="nav-link" href="donar.php"><b>Donaciones</b></a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">Cerrar sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="hero-image-text">
      <div class="container-img">
        <img src="imágenes/niñosdibujo.jpg" alt="Voluntariado niños" class="curved-image">
       </div>
      <div class="container-text">
        <h2><b>¡Únete y Transforma Vidas!</b></h2>
          <p>Conviértete en parte de algo más grande. Ayuda a niños y niñas en situación de vulnerabilidad a tener un futuro mejor. Tu tiempo y amor pueden cambiarlo todo.</p>
      </div>
    </section>

    <header>
      <h1><b>Voluntariado para <br> Hogares de Niños</b></h1>
      <h5>Únete a cambiar vidas, explora hogares y fundaciones que necesitan tu ayuda.</h5><br>
      <a href="#organizaciones">Explorar voluntariados</a>
    </header> 

  <section id="organizaciones" class="container my-5">

<?php
if ($result && $result->num_rows > 0) {
    $imagenes = [
        'Hogar del niño San Vicente de Paúl' => 'imágenes/paul.webp',
        'Hogar Padre Vito Guarato' => 'imágenes/vol1_img2.jpg.jpg',
        'Hogar Esperanza Contigo' => 'imágenes/vol1_img3.jpg.webp', 
    ];

    while ($row = $result->fetch_assoc()) {
        $nombreVol = $row['nombre_voluntariado'];
        $rutaImagen = $imagenes[$nombreVol] ?? 'imágenes/default.png';
        ?>
        
        <div class="card horizontal mb-4 p-3 shadow-lg rounded" style="border:1px solid #ccc;">
          <img src="<?php echo $rutaImagen; ?>" alt="<?php echo htmlspecialchars($nombreVol); ?>" class="img-fluid">
          <div class="card-content">
            <h3><b><?php echo htmlspecialchars($nombreVol); ?></b></h3>
            <p>
              <?php echo nl2br(htmlspecialchars($row['informacion'])); ?><br>
              <b>Día: </b><?php echo htmlspecialchars($row['dias']); ?><br>
              <b>Hora:</b> <?php echo htmlspecialchars($row['hora']); ?> <br>
              <b>Costo:</b> <?php echo htmlspecialchars($row['costo']); ?><br>
              <b>Correo: </b><?php echo htmlspecialchars($row['redes']); ?><br>
              <b>Tel: </b> <?php echo htmlspecialchars($row['telefono']); ?><br>
            </p>
            <a href="involucarte1.php" class="btn btn-success">Participar</a>
          </div>
        </div>

        <?php
    }
} else {
    echo "<p>No hay voluntariados registrados en esta categoría.</p>";
}
?>
</section>

</body>
</html>
