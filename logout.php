<?php
session_start();           // Inicia sesión
session_unset();           // Elimina todas las variables de sesión
session_destroy();         // Destruye la sesión

header("Location: home.php"); // Redirige al login
exit();
?>
