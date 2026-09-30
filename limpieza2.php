<?php
include 'conexion.php';

$id_categoria = 4;
$sql = "SELECT * FROM voluntariados WHERE id_categoria = $id_categoria";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Limpieza de Playas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="limp.css" />
</head>
<body>

<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="home2.php">
      <img src="imágenes/logoenhorizontal.luchi.png" alt="Hand Bridge Logo" class="logo1">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="home2.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="conocenos.php">Conócenos</a></li>
            <li class="nav-item"><a class="nav-link" href="donar.php">Donaciones</a></li>
            <li class="nav-item"><a class="nav-link" href="experiencia.php">Experiencias</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">Cerrar sesión</a></li>
        </ul>
    </div>
  </div>
</nav> 

<section class="hero-image-text">
  <div class="container-img">
    <img src="imágenes/playas.jpg" alt="LimpiezaPlayas" class="curved-image" />
  </div>
  <div class="container-text">
    <h2><b>¡Limpia una playa, salva miles de vidas marinas!</b></h2>
    <p>¡Únete a la ola del cambio! Ven y participa en la limpieza de nuestras playas. Cada pedazo de basura que retires es un paso hacia un océano más limpio y lleno de vida. ¡Tu ayuda hace la diferencia!</p>
  </div>
</section>

<header>
  <h1><b>Voluntariado <br>para limpiezas de playas</b></h1>
  <p><h5>El mar no necesita más plástico, necesita más manos como las tuyas.</h5></p><br>
</header>

<section id="organizaciones" class="container">

<?php
if ($result && $result->num_rows > 0) {
    // Asignación manual de imágenes por nombre
    $imagenes = [
        'FUNZEL' => 'imágenes/funzel.webp',
        'Limpiemos El Salvador' => 'imágenes/limpiemosElSalvador.jpg',
        'MARN' => 'imágenes/marn.jpg', // Usa esta línea cuando tengas la imagen lista
        // Puedes agregar más voluntariados aquí si es necesario
    ];

    while ($row = $result->fetch_assoc()) {
        $nombreVol = $row['nombre_voluntariado'];

        // Buscar imagen correspondiente o usar default
        $rutaImagen = $imagenes[$nombreVol] ?? 'imágenes/default.png';
        ?>
        <div class="card horizontal">
            <img src="<?php echo $rutaImagen; ?>" alt="<?php echo htmlspecialchars($nombreVol); ?>" />
            <div class="card-content">
                <h3><b><?php echo htmlspecialchars($nombreVol); ?></b></h3>
                <p>
                    <?php echo nl2br(htmlspecialchars($row['informacion'])); ?><br>
                    <b>Día: </b><?php echo htmlspecialchars($row['dias']); ?><br>
                    <b>Hora:</b> <?php echo htmlspecialchars($row['hora']); ?><br>
                    <b>Participa con tan solo:</b> <?php echo htmlspecialchars($row['costo']); ?><br>
                    <b>Tel: </b><?php echo htmlspecialchars($row['telefono']); ?><br>
                    <b>Ubicación:</b> <?php echo htmlspecialchars($row['direccion']); ?>
                </p>
                <a href="involucarte1.php" class="btn">Participar</a>
            </div>
        </div>
        <?php
    }
} else {
    echo "<p>No hay voluntariados registrados en esta categoría.</p>";
}
?>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
