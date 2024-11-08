<?php
// config.php

$servername = 'sql209.infinityfree.com'; // Por ejemplo, "your-database.render.com"
$dbname = 'if0_37657658_database'; // Nombre de la base de datos que creaste
$username = 'if0_37657658'; // Usuario de la base de datos
$password = 'fpWaieO3JRjO5Q'; // Contraseña de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
