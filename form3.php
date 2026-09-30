<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "conexion.php";

    $nombre = $_POST["nombre_completo"];
    $telefono = $_POST["telefono"];
    $sexo = $_POST["sexo"];
    $edad = $_POST["edad"];
    $tipo_voluntariado = $_POST["tipo_voluntariado"];
    $transporte = $_POST["transporte"];
    $disponibilidad = $_POST["disponibilidad"];
    $experiencia = $_POST["experiencia"];
    $salud = $_POST["salud"];
    $conciencia = $_POST["conciencia"];
    $residuos = $_POST["residuos"];
    $motivacion = $_POST["motivacion"];
    $comentario = $_POST["comentario"] ?? "";

    $sql = "INSERT INTO respuestas3_form (
        nombre_completo, telefono, sexo, edad, tipo_voluntariado,
        transporte, disponibilidad, experiencia, salud,
        conciencia, residuos, motivacion, comentario, fecha_envio
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssss", $nombre, $telefono, $sexo, $edad, $tipo_voluntariado,
        $transporte, $disponibilidad, $experiencia, $salud,
        $conciencia, $residuos, $motivacion, $comentario);

    if ($stmt->execute()) {
        $mensaje = "✅ ¡Formulario enviado exitosamente!";
    } else {
        $mensaje = "❌ Error al guardar: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Voluntariado Limpieza de Playas</title>
    <style>
        body {
  background: url('imágenes/platafondo.jpeg') no-repeat center center fixed;
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
  margin-bottom: 1.5rem;
  color: #0d6efd;
  font-weight: 700;
}

label {
  font-weight: 600;
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
  margin-top: 1rem;
  margin-left: 26%;
}

.btn-submit:hover {
  background-color: #084cd6;
}

.mb-3 {
  margin-bottom: 1rem;
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
}

input[type="text"]:focus,
select:focus,
textarea:focus {
  outline: none;
  border-color: #0d6efd;
  box-shadow: 0 0 5px rgba(13, 110, 253, 0.5);
}

.alert-success {
  background-color: #d4edda;
  color: #3c5dd5;
  padding: 20px;
  border-radius: 10px;
  font-size: 18px;
  max-width: 600px;
  margin: 20px auto;
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

</style>
    
    <link rel="stylesheet" href="forms3.css">
    
</head>
<body>
    
    <?php if (!empty($mensaje)) : ?>
        <div class="alert-success"><?= $mensaje ?></div>
    <?php endif; ?>

    <div class="form-container">
        <h1>Voluntariado: Limpieza de Playas</h1>

        <div class="info-voluntariado">
            <h2>¡Únete al cambio!</h2>
            <p>Participar en la limpieza de playas no solo protege el medio ambiente, sino que también te conecta con personas que comparten tu pasión por un planeta limpio y saludable. ¡Haz la diferencia hoy!</p>
        </div><br>

        <form method="POST" action="">
            <div class="mb-3">
                <label>Nombre completo:</label>
                <input type="text" name="nombre_completo" required>
            </div><br><br>

            <div class="mb-3">
                <label>Teléfono:</label>
                <input type="text" name="telefono" required>
            </div> <br><br>


            <div class="mb-3">
                <label>Sexo:</label>
                <select name="sexo" required>
                    <option value="">Seleccione</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div><br><br>

            <div class="mb-3">
                <label>Edad:</label>
                <input type="text" name="edad" required>
            </div> <br><br>
    

            <div class="mb-3">
                <label>Tipo de voluntariado:</label>
                <select name="tipo_voluntariado" required>
                    <option value="">Seleccione</option>
                    <option value="Limpieza de playas">Limpieza de playas</option>
                    <option value="Refugios de animales">Refugios de animales</option>
                    <option value="Voluntariado con niños">Voluntariado con niños</option>
                    <option value="Ambiental">Ambiental</option>
                </select>
            </div> <br><br>

            <div class="mb-3">
                <label>¿Cuenta con medio de transporte?</label>
                <select name="transporte" required>
                    <option value="">Seleccione</option>
                    <option value="Sí">Sí</option>
                    <option value="No">No</option>
                </select>
            </div><br><br>

            <div class="mb-3">
                <label>Disponibilidad de días/horas:</label>
                <input type="text" name="disponibilidad" required>
            </div><br><br>

            <div class="mb-3">
                <label>¿Ha participado antes en voluntariados similares?</label>
                <select name="experiencia" required>
                    <option value="">Seleccione</option>
                    <option value="Sí">Sí</option>
                    <option value="No">No</option>
                </select>
            </div><br><br>

            <div class="mb-3">
                <label>¿Tiene buena condición física?</label>
                <select name="salud" required>
                    <option value="">Seleccione</option>
                    <option value="Sí">Sí</option>
                    <option value="No">No</option>
                </select>
            </div><br><br>

            <div class="mb-3">
                <label>¿Está consciente del impacto ambiental de los residuos?</label>
                <select name="conciencia" required>
                    <option value="">Seleccione</option>
                    <option value="Sí">Sí</option>
                    <option value="No">No</option>
                </select>
            </div><br><br>
            <div class="mb-3">
                <label>¿Está dispuesto(a) a separar residuos reciclables?</label>
                <select name="residuos" required>
                    <option value="">Seleccione</option>
                    <option value="Sí">Sí</option>
                    <option value="No">No</option>
                </select>
            </div><br><br>

            <div class="mb-3">
                <label>¿Qué lo motiva a participar en este voluntariado?</label>
                <textarea name="motivacion" required></textarea>
            </div><br><br>

            <div class="mb-3">
                <label>Cuéntanos más de tu experiencia (opcional):</label>
                <textarea name="comentario"></textarea>
            </div><br><br>

            <button type="submit" class="btn-submit">Enviar</button><br><br>
        </form>
    </div>
</body>
</html>
