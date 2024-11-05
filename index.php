<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
</head>
<body class="bg-info-subtle">
    <div class="container mt-5 card p-4 col-11 col-md-6 col-lg-4 mx-auto">

        <form action="verificar_contraseña.php" method="post" class="mt-4">
            <div class="form-group pb-3">
                <label class="h4" for="password">Ingresa la contraseña:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Acceder a la encuesta</button>
            <?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger text-center mt-4">
        Contraseña incorrecta. Inténtalo de nuevo.
    </div>
<?php endif; ?>

        </form>
    </div>
</body>
</html>
