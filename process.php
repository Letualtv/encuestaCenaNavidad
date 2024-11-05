 <?php
// process.php

include 'config.php'; // Incluir la configuración de la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $intolerancias = $_POST['intolerancias'];
    $confirmacion = $_POST['confirmacion'];

    // Insertar los datos en la base de datos
    $query = "INSERT INTO respuestas (nombre, intolerancias, confirmacion) VALUES ('$nombre', '$intolerancias', '$confirmacion')";

    $result = pg_query($conn, $query);

    if ($result) {
        echo "¡Gracias por completar la encuesta!";
    } else {
        echo "Error al enviar la encuesta: " . pg_last_error($conn);
    }
}


?>