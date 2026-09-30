<?php
include('conexion.php');

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre_completo'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $voluntariado = $_POST['voluntariado'];
    $transporte = $_POST['transporte'];
    $experiencia = $_POST['experiencia'];
    $paciencia = $_POST['paciencia'];
    $disponibilidad = $_POST['disponibilidad'];
    $frecuencia = $_POST['frecuencia'];
    $motivacion = $_POST['motivacion'];
    $comentarios = $_POST['comentarios'];

    $sql = "INSERT INTO respuestas4_form (nombre_completo, telefono, edad, sexo, voluntariado_elegido, transporte, experiencia_ancianos, paciencia, disponibilidad, frecuencia, motivacion, comentarios)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisssssssss", $nombre, $telefono, $edad, $sexo, $voluntariado, $transporte, $experiencia, $paciencia, $disponibilidad, $frecuencia, $motivacion, $comentarios);

    if ($stmt->execute()) {
        $mensaje = "¡Gracias por unirte al voluntariado para asilos!";
    } else {
        $mensaje = "Error al enviar el formulario.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Voluntariado para Asilos</title>
  <style>
    body {
      background: url('imágenes/anciafondo.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
    }

    .form-container {
      background: rgba(255, 255, 255, 0.95);
      max-width: 800px;
      margin: 3rem auto;
      padding: 2rem 3rem;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }

    h1 {
      text-align: center;
      margin-bottom: 1rem;
      color: #0d6efd;
      font-weight: 700;
    }

    .info-voluntariado {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 20px;
      text-align: center;
      margin-bottom: 30px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .info-voluntariado h2 {
      color: #0077cc;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .info-voluntariado p {
      color: #333;
      font-size: 16px;
      line-height: 1.6;
    }

    label {
      font-weight: 600;
    }

    input[type="text"],
    select,
    textarea {
      width: 100%;
      padding: 0.5rem;
      font-size: 1rem;
      border-radius: 6px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      margin-bottom: 1rem;
    }

    input[type="text"]:focus,
    select:focus,
    textarea:focus {
      outline: none;
      border-color: #0d6efd;
      box-shadow: 0 0 5px rgba(13, 110, 253, 0.5);
    }

    .btn-submit {
      background-color: #0d6efd;
      border: none;
      width: 50%;
      font-weight: 700;
      font-size: 1.2rem;
      padding: 0.7rem;
      border-radius: 6px;
      transition: background-color 0.3s ease;
      color: white;
      cursor: pointer;
      margin-left: 25%;
    }

    .btn-submit:hover {
      background-color: #084cd6;
    }

    .alert-success {
      background-color: #d4edda;
      color: #155724;
      padding: 20px;
      border-radius: 10px;
      font-size: 18px;
      max-width: 600px;
      margin: 20px auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h1>Voluntariado para Asilos</h1>

    <div class="info-voluntariado">
      <h2>Tu compañía puede cambiar una vida</h2>
      <p>Los adultos mayores necesitan más que atención, necesitan cariño, compañía y comprensión. Sé parte de un voluntariado que deja huella en el corazón de quienes más lo necesitan.</p>
    </div>

    <?php if ($mensaje): ?>
      <div class="alert-success"><?php echo $mensaje; ?></div>
    <?php endif; ?>

    <form method="POST">
      <label>Nombre completo:</label>
      <input type="text" name="nombre_completo" required>

      <label>Teléfono:</label>
      <input type="text" name="telefono" required>

      <label>Edad:</label>
      <input type="text" name="edad" required>

      <label>Sexo:</label>
      <select name="sexo" required>
        <option value="">Seleccione</option>
        <option value="Femenino">Femenino</option>
        <option value="Masculino">Masculino</option>
        <option value="Otro">Otro</option>
      </select>

      <label>Tipo de voluntariado:</label>
      <select name="voluntariado" required>
        <option value="">Seleccione</option>
        <option value="Refugios de mascotas">Refugios de mascotas</option>
        <option value="Limpieza de playas">Limpieza de playas</option>
        <option value="Apoyo en centros escolares">Apoyo en centros escolares</option>
        <option value="Asilos">Asilos</option>
      </select>

      <label>¿Cuenta con transporte propio?</label>
      <select name="transporte" required>
        <option value="">Seleccione</option>
        <option value="Sí">Sí</option>
        <option value="No">No</option>
      </select>

      <label>¿Tiene experiencia previa con adultos mayores?</label>
      <select name="experiencia" required>
        <option value="">Seleccione</option>
        <option value="Sí, bastante">Sí, bastante</option>
        <option value="Sí, poca">Sí, poca</option>
        <option value="No">No</option>
      </select>

      <label>¿Se considera una persona paciente?</label>
      <select name="paciencia" required>
        <option value="">Seleccione</option>
        <option value="Sí, mucho">Sí, mucho</option>
        <option value="Un poco">Un poco</option>
        <option value="No mucho">No mucho</option>
      </select>

      <label>¿Cuáles son sus horarios disponibles?</label>
      <input type="text" name="disponibilidad" required>

      <label>¿Con qué frecuencia puede asistir?</label>
      <select name="frecuencia" required>
        <option value="">Seleccione</option>
        <option value="Diariamente">Diariamente</option>
        <option value="Semanalmente">Semanalmente</option>
        <option value="Quincenalmente">Quincenalmente</option>
      </select>

      <label>¿Cuál es su principal motivación para ayudar a personas mayores?</label>
      <textarea name="motivacion" required></textarea>

      <label>Cuéntenos más sobre su experiencia (opcional):</label>
      <textarea name="comentarios"></textarea>

      <button type="submit" class="btn-submit">Enviar</button>
    </form>
  </div>

</body>
</html>
