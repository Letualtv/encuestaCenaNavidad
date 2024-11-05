<?php
// config.php

$host = 'dpg-csl01tl6l47c73bqnthg-a'; // Por ejemplo, "your-database.render.com"
$port = '5432'; // Puerto de PostgreSQL
$dbname = 'encuestaDB'; // Nombre de la base de datos que creaste
$user = 'encuestadb_u310_user'; // Usuario de la base de datos
$password = 'nZVyPQonpjnSo3B3tvI82tYT3TLoSd2W'; // Contraseña de la base de datos

// Crear conexión
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Error en la conexión a la base de datos.");
}
?>
