<?php

$host = "localhost";       
$user = "root";            
$pass = "";                
$db   = "login";      


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$conn->set_charset("utf8");
?>

<?php
$servidor = "localhost";
$usuario = "root";
$contraseña_db = "";
$basededatos = "login";


$enlace = mysqli_connect($servidor, $usuario, $contraseña_db, $basededatos);

if (!$enlace) {
    die("❌ Error de conexión: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    if (
        !empty($_POST["nombre"]) &&
        !empty($_POST["apellido"]) &&
        !empty($_POST["dui"]) &&
        !empty($_POST["correo"]) &&
        !empty($_POST["contraseña"])
    ) {
        
        $nombre = mysqli_real_escape_string($enlace, $_POST["nombre"]);
        $apellido = mysqli_real_escape_string($enlace, $_POST["apellido"]);
        $dui = mysqli_real_escape_string($enlace, $_POST["dui"]);
        $correo = mysqli_real_escape_string($enlace, $_POST["correo"]);
        $contraseña = password_hash($_POST["contraseña"], PASSWORD_BCRYPT);

       
        $stmt = mysqli_prepare($enlace, "INSERT INTO registro (nombre, apellido, dui, correo, contraseña) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssss", $nombre, $apellido, $dui, $correo, $contraseña);

               if (mysqli_stmt_execute($stmt)) {
           
            header("Location: index.php");
            exit();
        } else {
            echo "<h2 style='color:red; text-align:center;'>❌ Error al registrar: " . mysqli_error($enlace) . "</h2>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<h2 style='color:orange; text-align:center;'>⚠️ Todos los campos son obligatorios.</h2>";
    }
}

mysqli_close($enlace);
?>

<?php
$servidor = "localhost";
$usuario = "root";
$contraseña_db = "";
$basededatos = "login";

$enlace = mysqli_connect($servidor, $usuario, $contraseña_db, $basededatos);

if (!$enlace) {
    die("❌ Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["cuenta"]) && !empty($_POST["contraseña"])) {
        $cuenta = mysqli_real_escape_string($enlace, $_POST["cuenta"]);
        $contraseña = password_hash($_POST["contraseña"], PASSWORD_BCRYPT);

        $stmt = mysqli_prepare($enlace, "INSERT INTO login_personas (cuenta, contraseña) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $cuenta, $contraseña);

        if (mysqli_stmt_execute($stmt)) {
           
            header("Location: home2.php");
            exit();
        } else {
            echo "<h2 style='color:red; text-align:center;'>❌ Error al registrar: " . mysqli_error($enlace) . "</h2>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<h2 style='color:orange; text-align:center;'>⚠️ Por favor completa todos los campos.</h2>";
    }
}

mysqli_close($enlace);
?>

