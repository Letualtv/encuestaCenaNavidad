<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Encuesta de Navidad</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Resultados de la Encuesta de Navidad</h2>

        <?php
        // Incluir la conexión a la base de datos
        include 'config.php';

        // Consulta para obtener los resultados de la encuesta
        $sql = "SELECT nombre, intolerancias, confirmacion, fecha FROM encuestas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table id="resultados" class="table table-striped table-bordered">';
            echo '<thead><tr><th>Nombre</th><th>Intolerancias</th><th>Confirmación</th><th>Fecha</th></tr></thead>';
            echo '<tbody>';

            // Generar filas de la tabla con los resultados
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['nombre']) . '</td>';
                echo '<td>' . htmlspecialchars($row['intolerancias']) . '</td>';
                echo '<td>' . htmlspecialchars($row['confirmacion']) . '</td>';
                echo '</tr>';
            }

            echo '</tbody></table>';
        } else {
            echo '<p class="text-center">No hay resultados para mostrar.</p>';
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </div>

    <script>
        $(document).ready(function() {
            $('#resultados').DataTable({
                "order": [[3, "desc"]], // Ordenar por la columna de fecha, descendente
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"
                }
            });
        });
    </script>
</body>
</html>
