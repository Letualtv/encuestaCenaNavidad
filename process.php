<?php
$duracion_cookie = 365 * 24 * 60 * 60;

if (isset($_COOKIE["encuesta_navidad"])) {
    header("Location: ya_respondido.html");
    exit();
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $intolerancias = htmlspecialchars($_POST['intolerancias']);
        $confirmacion = htmlspecialchars($_POST['confirmacion']);

        // Guardar en un archivo CSV
        $file = fopen("respuestas.csv", "a");
        fputcsv($file, [$nombre, $intolerancias, $confirmacion]);
        fclose($file);

        setcookie("encuesta_navidad", "respondido", time() + $duracion_cookie, "/");

        header("Location: gracias.html");
        exit();
    }
}
?>
