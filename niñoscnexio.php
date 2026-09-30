<?php
include 'conexion.php';

$nombre = $_POST['nombre_voluntariado'];

$imagenNombre = $_FILES['imagen']['name'];
$imagenTmp = $_FILES['imagen']['tmp_name'];

$destino = 'img/' . basename($imagenNombre);


if (move_uploaded_file($imagenTmp, $destino)) {
    $sql = "INSERT INTO voluntariados (nombre_voluntariado, imagen) VALUES ('$nombre', '$destino')";
    $conn->query($sql);
    echo "Voluntariado guardado con imagen.";
} else {
    echo "Error al subir la imagen.";
}
?>
