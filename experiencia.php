<?php
include('conexion.php');

$mensaje_exito = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_voluntariado = $_POST['id_voluntariado'];
    $informacion = $_POST['informacion'];
    $trabajo = $_POST['trabajo'];
    $puntuacion = $_POST['puntuacion'];

    $stmt = $conn->prepare("INSERT INTO experiencias (id_voluntariado, informacion, trabajo, puntuacion) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("issi", $id_voluntariado, $informacion, $trabajo, $puntuacion);

    if ($stmt->execute()) {
        $mensaje_exito = "🌟 ¡Gracias por compartir tu experiencia!";
    }

    $stmt->close();
}

$experiencias = $conn->query("SELECT * FROM experiencias ORDER BY id_experiencia DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>¡Comparte tu experiencia!</title>
  <style>
    body {
      background: url('imágenes/na.webp') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    
    
    .form-container {
      background: rgba(255, 255, 255, 0.95);
      max-width: 700px;
      margin: 3rem auto;
      padding: 2rem 2.5rem;
      border-radius: 16px;
      box-shadow: 0 0 20px rgba(0,0,0,0.3);
    }

    h1 {
      text-align: center;
      color: #007bff;
      margin-bottom: 1rem;
    }

    p.motivacion {
      text-align: center;
      font-size: 1.1rem;
      color: #333;
      margin-bottom: 2rem;
    }

    label {
      font-weight: bold;
      margin-top: 1rem;
      display: block;
    }

    input[type="text"],
    textarea,
    select {
      width: 100%;
      padding: 0.6rem;
      border-radius: 8px;
      border: 1px solid #ccc;
      margin-top: 5px;
      font-size: 1rem;
    }

    .btn-submit {
      background-color: #0d6efd;
      color: white;
      border: none;
      padding: 0.8rem 2rem;
      font-size: 1.1rem;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 1.5rem;
      width: 100%;
    }

    .btn-submit:hover {
      background-color: #084cd6;
    }

    .alert-success {
      background-color: #d4edda;
      color: #155724;
      padding: 1rem;
      border-radius: 10px;
      text-align: center;
      margin-bottom: 20px;
    }

    .tarjeta {
      background: white;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      padding: 1rem;
      margin: 1rem auto;
      max-width: 700px;
    }

    .tarjeta h3 {
      color: #0d6efd;
      margin-bottom: 0.5rem;
    }

    .estrella {
      color: gold;
      font-size: 1.2rem;
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">
   
    

<div class="form-container">
  <h1>✨ ¡Comparte tu experiencia! ✨</h1>
  <p class="motivacion">Tu historia puede inspirar a más personas a ser parte del cambio. Cuéntanos cómo viviste tu voluntariado 🙌.</p>

  
  <form method="POST">
    <label for="id_voluntariado">¿A qué te dedicas actualmente?</label>
    <input type="text" name="id_voluntariado" id="id_voluntariado" required>

    <label for="trabajo">Tú Nombre:</label>
    <input type="text" name="trabajo" id="trabajo" required>

    <label for="informacion">Comparte tu experiencia:</label>
    <textarea name="informacion" id="informacion" rows="4" required></textarea>

    <label for="puntuacion">¿Cómo calificarías tu experiencia? (1-5 estrellas)</label>
    <select name="puntuacion" id="puntuacion" required>
      <option value="">Selecciona una opción</option>
      <option value="1">⭐</option>
      <option value="2">⭐⭐</option>
      <option value="3">⭐⭐⭐</option>
      <option value="4">⭐⭐⭐⭐</option>
      <option value="5">⭐⭐⭐⭐⭐</option>
    </select>

    <button class="btn-submit" type="submit">Enviar experiencia</button>
  </form>
</div>

<?php while($exp = $experiencias->fetch_assoc()): ?>
  <div class="tarjeta">
    <h3>👤 <?= htmlspecialchars($exp['trabajo']) ?></h3>
    <p><?= nl2br(htmlspecialchars($exp['informacion'])) ?></p>
    <p>
      <?php for ($i = 0; $i < $exp['puntuacion']; $i++) echo '⭐'; ?>
    </p>
  </div>
<?php endwhile; ?>

</body>
</html>
