<?php
// Define la contraseña correcta
$contraseña_correcta = "navidad2024";

// Verifica si la contraseña ingresada es correcta
if ($_POST['password'] === $contraseña_correcta) {
    // Redirige al usuario a la encuesta si la contraseña es correcta
    header("Location: encuesta.php");
    exit();
} else {
    // Redirige de vuelta al formulario de contraseña con un mensaje de error
    header("Location: index.php?error=1");
    exit();
}
?>
