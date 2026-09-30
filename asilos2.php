<?php
include 'conexion.php';

$id_categoria = 2;
$sql = "SELECT * FROM voluntariados WHERE id_categoria = $id_categoria";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ASILOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="asiloss.css" />
</head>
<body>
   
<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="home2.php">
            <img src="imágenes/logoenhorizontal.luchi.png" alt="Hand Bridge Logo" class="logo1">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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
        <img src="imágenes/ASILOS.jpg" alt="ASILOS" class="curved-image" />
    </div>
    <div class="container-text">
        <h2><b>¡El voluntariado no solo cambia vidas, también enriquece la tuya!</b></h2>
        <p>Visitar un asilo no es solo dar compañía, es recibir sabiduría, historias y amor sin medida.</p>
    </div>
</section>

<header>
    <h1><b>Voluntariado <br>para visitas de asilos</b></h1>
    <p><h5>Los abuelos tienen mucho que enseñar, y tú mucho que ofrecer. ¡Haz la diferencia hoy!</h5></p><br>
</header>

<section id="organizaciones" class="container">

<?php
if ($result && $result->num_rows > 0) {
    $imagenes = [
        'FUSATE' => 'imágenes/FUSATE.jpg',
        'Asociacion de señoras de la caridad de San Vicente de Paúl' => 'imágenes/asilos2.PNG',
        'Hogar de ancianos Santa Tecla' => 'imágenes/asilos1.PNG',
    ];

    while ($row = $result->fetch_assoc()) {
        $nombreVol = $row['nombre_voluntariado'];
        $rutaImagen = $imagenes[$nombreVol] ?? 'imágenes/default.png';
        ?>
        <div class="card horizontal mb-4 p-3 shadow-lg rounded" style="border:1px solid #ccc;">
            <img src="<?php echo htmlspecialchars($rutaImagen); ?>" alt="<?php echo htmlspecialchars($nombreVol); ?>" class="img-fluid mb-3" style="max-height:200px; object-fit:cover; width:100%;">
            <div class="card-content">
                <h3><b><?php echo htmlspecialchars($nombreVol); ?></b></h3>
                <p>
                    <?php echo nl2br(htmlspecialchars($row['informacion'])); ?><br />
                    <b>Día: </b><?php echo htmlspecialchars($row['dias']); ?><br />
                    <b>Hora:</b> <?php echo htmlspecialchars($row['hora']); ?><br />
                    <b>Participa con tan solo:</b> <?php echo htmlspecialchars($row['costo']); ?><br />
                    <b>Tel: </b><?php echo htmlspecialchars($row['telefono']); ?><br />
                    <b>Ubicación:</b> <?php echo htmlspecialchars($row['direccion']); ?>
                </p>
                <a href="involucrate4.php" class="btn btn-success">Participar</a>
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
