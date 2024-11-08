<?php
// process.php para MySQL

include 'config.php'; // Incluir la configuración de la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $intolerancias = $_POST['intolerancias'];
    $confirmacion = $_POST['confirmacion'];

    // Validar la entrada
    if (empty($nombre) || empty($intolerancias) || empty($confirmacion)) {
        die("Todos los campos son obligatorios.");
    }

    // Preparar la consulta
    $stmt = $conn->prepare("INSERT INTO respuestas (nombre, intolerancias, confirmacion) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $intolerancias, $confirmacion); // 'ssi' indica los tipos de datos: string, string, integer

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar los datos: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
}


?>