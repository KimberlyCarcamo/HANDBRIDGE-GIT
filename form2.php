<?php
include("conexion.php");

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre_completo'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $edad = $_POST['edad'] ?? '';
    $sexo = $_POST['sexo'] ?? '';
    $municipio = $_POST['municipio'] ?? '';
    $voluntariado = $_POST['voluntariado_elegido'] ?? '';
    $disponibilidad = $_POST['disponibilidad'] ?? '';
    $experiencia_voluntariado = $_POST['experiencia_voluntariado'] ?? '';
    $transporte = $_POST['transporte'] ?? '';
    $experiencia_animales = $_POST['experiencia_cuidado_animales'] ?? '';
    $tipo_apoyo = isset($_POST['tipo_apoyo']) ? implode(", ", $_POST['tipo_apoyo']) : '';
    $vivienda_apta = $_POST['vivienda_apta'] ?? '';
    $tipo_animal = $_POST['tipo_animal_preferido'] ?? '';
    $tiempo_dedicado = $_POST['tiempo_dedicado'] ?? '';
    $habilidades = $_POST['habilidades'] ?? '';
    $motivo = $_POST['motivo'] ?? '';
    $motivo_animales = $_POST['motivo_animales'] ?? '';
    $horas = $_POST['horas'] ?? '';
    $fecha_envio = date('Y-m-d H:i:s');

    $sql = "INSERT INTO respuestas2_forms (
        nombre_completo, telefono, edad, sexo, municipio, voluntariado_elegido, disponibilidad,
        experiencia_voluntariado, transporte, experiencia_cuidado_animales, tipo_apoyo,
        vivienda_apta, tipo_animal_preferido, tiempo_dedicado, habilidades, motivo,
        motivo_animales, horas, fecha_envio
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        $mensaje = "❌ Error al preparar la consulta: " . $conn->error;
    } else {
        $stmt->bind_param(
            "sssssssssssssssssss",
            $nombre, $telefono, $edad, $sexo, $municipio, $voluntariado, $disponibilidad,
            $experiencia_voluntariado, $transporte, $experiencia_animales, $tipo_apoyo,
            $vivienda_apta, $tipo_animal, $tiempo_dedicado, $habilidades, $motivo,
            $motivo_animales, $horas, $fecha_envio
        );

        if ($stmt->execute()) {
            $mensaje = "✅ ¡Gracias por registrarte como voluntario! Tus datos se han guardado correctamente.";
        } else {
            $mensaje = "❌ Error al guardar los datos: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Voluntariado</title>
    <link rel="stylesheet" href="forms2.css">
    <style>
        .mensaje-exito {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        .mensaje-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php if (!empty($mensaje)) : ?>
    <div class="<?= str_starts_with($mensaje, '✅') ? 'mensaje-exito' : 'mensaje-error' ?>">
        <?= htmlspecialchars($mensaje) ?>
    </div>
<?php endif; ?>

<div class="form-container">
    <h1>Formulario de Voluntariado</h1>

    <div class="info-voluntariado">
        <p>
           ¡Únete a nuestra misión de amor y cuidado para los peluditos! 🐾❤️
            Tu tiempo, tus ganas y tu corazón pueden cambiar la vida de muchos animales que necesitan un hogar, compañía y cariño. Cada pequeño gesto cuenta: desde cuidar temporalmente, ayudar en el refugio, hasta difundir nuestra causa en redes sociales.
            Completa este formulario y forma parte de una comunidad que trabaja por un mundo mejor para los animales. ¡Juntos podemos hacer la diferencia!
            ¡Tu compromiso es esperanza para ellos! 🐶🐱
        </p>
    </div>

    <form method="POST" action="">
      
        <label>Nombre completo:</label>
        <input type="text" name="nombre_completo" required><br><br>

        <label>Número de teléfono:</label>
        <input type="text" name="telefono" required><br><br>

        <label>Edad:</label>
        <select name="edad" required>
            <option value="">Selecciona...</option>
            <option value="Menos de 18">Menos de 18</option>
            <option value="18 - 24">18 - 24</option>
            <option value="25 - 35">25 - 35</option>
            <option value="Más de 35">Más de 35</option>
        </select><br><br>

        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="">Selecciona...</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label>Municipio:</label>
        <input type="text" name="municipio" required><br><br>

        <label>¿Qué voluntariado elegiste?</label>
        <select name="voluntariado_elegido" required>
            <option value="">Selecciona...</option>
            <option value="Refugio de mascotas">Refugio de mascotas</option>
            <option value="Educación comunitaria">Educación comunitaria</option>
            <option value="Ambiente y limpieza">Ambiente y limpieza</option>
            <option value="Apoyo en salud">Apoyo en salud</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label>¿Qué disponibilidad tienes?</label>
        <select name="disponibilidad" required>
            <option value="">Selecciona...</option>
            <option value="Mañanas">Mañanas</option>
            <option value="Tardes">Tardes</option>
            <option value="Fines de semana">Fines de semana</option>
            <option value="Horario completo">Horario completo</option>
        </select><br><br>

        <label>¿Tienes experiencia previa en voluntariados?</label>
        <select name="experiencia_voluntariado" required>
            <option value="">Selecciona...</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select><br><br>

        <label>¿Cuentas con medio de transporte?</label><br>
        <input type="radio" name="transporte" value="Sí" required> Sí
        <input type="radio" name="transporte" value="No" required> No
        <br><br>

        <label>¿Tienes experiencia cuidando animales?</label>
        <select name="experiencia_cuidado_animales" required>
            <option value="">Selecciona...</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select><br><br>

        <label>¿Qué tipo de apoyo estás dispuesto a brindar?</label>
        <select name="tipo_apoyo[]" multiple required>
            <option value="Adopción">Adopción</option>
            <option value="Cuidado temporal">Cuidado temporal</option>
            <option value="Donación de alimentos">Donación de alimentos</option>
            <option value="Apoyo voluntario en refugios">Apoyo voluntario en refugios</option>
            <option value="Difusión en redes sociales">Difusión en redes sociales</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label>¿Vives en un lugar que permite tener mascotas?</label>
        <select name="vivienda_apta" required>
            <option value="">Selecciona...</option>
            <option value="Sí, casa propia">Sí, casa propia</option>
            <option value="Sí, alquiler con permiso">Sí, alquiler con permiso</option>
            <option value="No se permiten mascotas">No se permiten mascotas</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label>¿Qué tipo de animal te gustaría adoptar o cuidar temporalmente?</label>
        <select name="tipo_animal_preferido" required>
            <option value="">Selecciona...</option>
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
            <option value="Ambos">Ambos</option>
            <option value="Otros">Otros</option>
            <option value="Solo quiero apoyar de otra manera">Solo quiero apoyar de otra manera</option>
        </select><br><br>

        <label>¿Tienes el tiempo necesario para dedicar a una mascota diariamente?</label>
        <select name="tiempo_dedicado" required>
            <option value="">Selecciona...</option>
            <option value="Sí, mucho tiempo">Sí, mucho tiempo</option>
            <option value="Sí, pero solo en las tardes/noches">Sí, pero solo en las tardes/noches</option>
            <option value="Solo fines de semana">Solo fines de semana</option>
            <option value="No por ahora">No por ahora</option>
        </select><br><br>

        <label>Menciona habilidades que puedas aportar:</label>
        <textarea name="habilidades" rows="3" required></textarea><br><br>

        <label>¿Por qué quieres ser voluntario?</label>
        <textarea name="motivo" rows="3" required></textarea><br><br>

        <label>¿Por qué deseas ayudar a los peluditos?</label>
        <textarea name="motivo_animales" rows="3" required></textarea><br><br>

        <label>¿Cuántas horas por semana estás dispuesto(a) a ofrecer?</label>
        <select name="horas" required>
            <option value="">Selecciona...</option>
            <option value="1 - 2 horas">1 - 2 horas</option>
            <option value="3 - 5 horas">3 - 5 horas</option>
            <option value="6 - 12 horas">6 - 12 horas</option>
        </select><br><br>

        <br>
        <input type="submit" class="btn-submit" value="Enviar">
    </form>
</div>

</body>
</html>
