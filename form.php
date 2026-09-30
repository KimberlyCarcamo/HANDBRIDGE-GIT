<?php
session_start();
include 'conexion.php'; 
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_SESSION['usuario_id'] ?? null;

    $nombre = $_POST['nombre_completo'] ?? '';
    $telefono_post = $_POST['telefono'] ?? '';
    $edad = $_POST['edad'] ?? '';
    $sexo = $_POST['sexo'] ?? '';
    $municipio = $_POST['municipio'] ?? '';
    $traslado = $_POST['traslado'] ?? '';
    $voluntariado = $_POST['voluntariado'] ?? '';
    $disponibilidad = $_POST['disponibilidad'] ?? '';
    $experiencia = $_POST['experiencia'] ?? '';
    $transporte = $_POST['transporte'] ?? '';
    $habilidades = $_POST['habilidades'] ?? '';
    $por_que = $_POST['por_que'] ?? '';
    $horas = $_POST['horas'] ?? '';
    $trabajo_ninos = $_POST['trabajo_ninos'] ?? '';
    $reaccion_berrinche = $_POST['reaccion_berrinche'] ?? '';
    $grupos = $_POST['grupos'] ?? '';
    $capacitaciones = $_POST['capacitaciones'] ?? '';
    $dinamicas = $_POST['dinamicas'] ?? '';
    $habilidades_artisticas = $_POST['habilidades_artisticas'] ?? '';
    $impacto = $_POST['impacto'] ?? '';
    $discapacidad = $_POST['discapacidad'] ?? '';
    $motivacion = $_POST['motivacion'] ?? '';
    $fecha = date("Y-m-d");

    $sql = "INSERT INTO respuestas_form (
        usuario_id, nombre_completo, telefono, edad, sexo, municipio, traslado, voluntariado,
        disponibilidad, experiencia, transporte, habilidades, por_que, horas, trabajo_ninos,
        reaccion_berrinche, grupos, capacitaciones, dinamicas, habilidades_artisticas, impacto,
        discapacidad, motivacion, fecha_registro
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param(
            "isssssssssssssssssssssss",
            $usuario_id, $nombre, $telefono_post, $edad, $sexo, $municipio, $traslado, $voluntariado,
            $disponibilidad, $experiencia, $transporte, $habilidades, $por_que, $horas, $trabajo_ninos,
            $reaccion_berrinche, $grupos, $capacitaciones, $dinamicas, $habilidades_artisticas,
            $impacto, $discapacidad, $motivacion, $fecha
        );

        if ($stmt->execute()) {
            $mensaje = "Formulario enviado con éxito. ¡Gracias por tu interés!";
        } else {
            $mensaje = "Error al enviar el formulario. Intenta nuevamente.";
        }
        $stmt->close();
    } else {
        $mensaje = "Error en prepare: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formulario Voluntariado</title>
  <link href="form.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    .alert {
      margin: 20px auto;
      padding: 15px;
      max-width: 600px;
      text-align: center;
      border-radius: 5px;
      font-weight: bold;
    }
    .alert-success {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }
  </style>
</head>
<body>

  <?php if (!empty($mensaje)) : ?>
  <div class="alert alert-success">
    <?php echo htmlspecialchars($mensaje); ?>
  </div>
  <?php endif; ?>

  <div class="form-container">
    <h1>Formulario de Voluntariado</h1>

    <div class="info-voluntariado">
      <p>
        Gracias por tu interés en ser parte de esta hermosa causa. Este formulario nos ayudará a conocerte mejor y a saber cómo puedes contribuir con tu tiempo, tus habilidades y tu compromiso.  
        <br><br>
        Tu participación puede marcar una gran diferencia en la vida de muchos niños y niñas. 
        ¡Completa este formulario con sinceridad y únete a transformar vidas!
      </p>
    </div>

    <form method="POST" action="">
      <label for="nombre_completo">1. Nombre completo</label><br>
      <input type="text" name="nombre_completo" id="nombre_completo" required /><br><br>

      <label for="telefono">2. Número de teléfono</label><br>
      <input type="text" name="telefono" id="telefono" required /><br><br>

      <label>3. Coloca la edad que tienes actualmente</label><br>
      <select name="edad" required>
        <option value="">Selecciona...</option>
        <option value="Menos de 18 años">Menos de 18 años</option>
        <option value="18 - 24 años">18 - 24 años</option>
        <option value="25 - 35 años">25 - 35 años</option>
        <option value="Más de 35 años">Más de 35 años</option>
      </select><br><br>

      <label>4. Sexo</label><br>
      <input type="radio" id="sexo_m" name="sexo" value="Masculino" required />
      <label for="sexo_m">Masculino</label><br>
      <input type="radio" id="sexo_f" name="sexo" value="Femenino" required />
      <label for="sexo_f">Femenino</label><br><br>

      <label for="municipio">5. ¿En cuál municipio vives?</label><br>
      <input type="text" name="municipio" id="municipio" required /><br><br>

      <label>6. ¿Puedes trasladarte a otras zonas?</label><br>
      <input type="radio" id="traslado_si" name="traslado" value="sí" required />
      <label for="traslado_si">sí</label><br>
      <input type="radio" id="traslado_no" name="traslado" value="No" required />
      <label for="traslado_no">No</label><br>
      <input type="radio" id="traslado_depende" name="traslado" value="Depende la distancia" required />
      <label for="traslado_depende">Depende la distancia</label><br><br>

      <label>7. ¿Qué voluntariado elegiste?</label><br>
      <select name="voluntariado" required>
        <option value="">Selecciona...</option>
        <option value="Voluntariado para ayudar a hogares de niños">Voluntariado para ayudar a hogares de niños</option>
        <option value="Voluntariado para limpieza de playas y ayuda al medio ambiente">Voluntariado para limpieza de playas y ayuda al medio ambiente</option>
        <option value="Ayudar a hogares de mascotas">Ayudar a hogares de mascotas</option>
        <option value="Voluntariado a asilos y ayuda a personas mayores">Voluntariado a asilos y ayuda a personas mayores</option>
      </select><br><br>

      <label>8. ¿Qué disponibilidad tienes?</label><br>
      <select name="disponibilidad" required>
        <option value="">Selecciona...</option>
        <option value="Fines de semana">Fines de semana</option>
        <option value="Entre semana (mañanas)">Entre semana (mañanas)</option>
        <option value="Entre semana (tardes)">Entre semana (tardes)</option>
        <option value="Total disponibilidad">Total disponibilidad</option>
      </select><br><br>

      <label>9. ¿Tienes experiencia previa en voluntariados?</label><br>
      <select name="experiencia" required>
        <option value="">Selecciona...</option>
        <option value="Sí, mucha experiencia">Sí, mucha experiencia</option>
        <option value="Sí, alguna experiencia">Sí, alguna experiencia</option>
        <option value="No, sería mi primera vez">No, sería mi primera vez</option>
      </select><br><br>

      <label>10. ¿Cuentas con medio de transporte?</label><br>
      <input type="radio" id="transporte_si" name="transporte" value="Sí" required />
      <label for="transporte_si">Sí</label><br>
      <input type="radio" id="transporte_no" name="transporte" value="No" required />
      <label for="transporte_no">No</label><br><br>

      <label for="habilidades">11. Menciona habilidades que puedas aportar dependiendo el tipo de voluntariado que elegiste</label><br>
      <textarea name="habilidades" id="habilidades" rows="3" required></textarea><br><br>

      <label for="por_que">12. ¿Por qué quieres ser voluntario?</label><br>
      <textarea name="por_que" id="por_que" rows="3" required></textarea><br><br>

      <label>13. ¿Cuántas horas por semana estás dispuesto(a) a ofrecer?</label><br>
      <select name="horas" required>
        <option value="">Selecciona...</option>
        <option value="1 - 2 horas">1 - 2 horas</option>
        <option value="3 - 5 horas">3 - 5 horas</option>
        <option value="6 - 12 horas">6 - 12 horas</option>
      </select><br><br>

      <label>14. ¿Has trabajado antes con niños?</label><br>
      <select name="trabajo_ninos" required>
        <option value="">Selecciona...</option>
        <option value="Sí, de forma profesional">Sí, de forma profesional</option>
        <option value="Sí, como voluntario">Sí, como voluntario</option>
        <option value="No, pero quiero aprender">No, pero quiero aprender</option>
      </select><br><br>

      <label for="reaccion_berrinche">15. ¿Cómo reaccionas ante un niño con un berrinche?</label><br>
      <textarea name="reaccion_berrinche" id="reaccion_berrinche" rows="3" required></textarea><br><br>

      <label>16. ¿Te sientes cómodo cuidando grupos grandes de niños?</label><br>
      <input type="radio" id="grupos_si" name="grupos" value="Sí" required />
      <label for="grupos_si">Sí</label><br>
      <input type="radio" id="grupos_no" name="grupos" value="No" required />
      <label for="grupos_no">No</label><br><br>

      <label>17. ¿Puedes asistir a capacitaciones antes de iniciar?</label><br>
      <input type="radio" id="capacitaciones_si" name="capacitaciones" value="Sí" required />
      <label for="capacitaciones_si">Sí</label><br>
      <input type="radio" id="capacitaciones_no" name="capacitaciones" value="No" required />
      <label for="capacitaciones_no">No</label><br><br>

      <label>18. ¿Te sientes cómodo haciendo dinámicas y juegos grupales?</label><br>
      <input type="radio" id="dinamicas_si" name="dinamicas" value="Sí" required />
      <label for="dinamicas_si">Sí</label><br>
      <input type="radio" id="dinamicas_no" name="dinamicas" value="No" required />
      <label for="dinamicas_no">No</label><br><br>

      <label>19. ¿Tienes habilidades artísticas y creativas?</label><br>
      <select name="habilidades_artisticas" required>
        <option value="">Selecciona...</option>
        <option value="Dibujo y pintura">Dibujo y pintura</option>
        <option value="Música (instrumentos, canto)">Música (instrumentos, canto)</option>
        <option value="Manualidades">Manualidades</option>
        <option value="Ninguna">Ninguna</option>
      </select><br><br>

      <label for="impacto">20. ¿Qué impacto te gustaría generar en la vida de los niños?</label><br>
      <textarea name="impacto" id="impacto" rows="3" required></textarea><br><br>

      <label>21. ¿Te sientes cómodo(a) trabajando con niños con discapacidad?</label><br>
      <input type="radio" id="discapacidad_si" name="discapacidad" value="Sí" required />
      <label for="discapacidad_si">Sí</label><br>
      <input type="radio" id="discapacidad_no" name="discapacidad" value="No" required />
      <label for="discapacidad_no">No</label><br><br>

      <label for="motivacion">22. ¿Cuál es tu mayor motivación para trabajar con niños?</label><br>
      <textarea name="motivacion" id="motivacion" rows="3" required></textarea><br><br>

      <button type="submit" class="btn-submit">Enviar</button>
    </form>
  </div>
</body>
</html>
