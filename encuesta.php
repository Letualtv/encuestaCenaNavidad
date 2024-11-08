<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta Cena de Navidad</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
<body>
    
    
    <style>
        body {
            background-image: url('fondo.jpg');
            background-size: cover; /* La imagen cubrirá toda la pantalla */
            background-repeat: no-repeat;
            background-attachment: fixed; /* La imagen permanece fija al hacer scroll */
            background-position: center; /* Centrar la imagen */
        }
    </style>


<div class="container mt-5 col-11 col-md-6 col-lg-3 card p-5">
        <h2 class="text-center text-danger  pb-4 px-2 ">Confirmación asistencia a cena de Navidad</h2>
        <form action="process.php" class="d-grid gap-4" method="POST">
            <div class="form-group form-floating">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y apellido" required>
                <label for="nombre">Nombre <span class="text-danger">*</span></label>
            </div>
            <div class="form-group form-floating">
                <textarea class="form-control" id="intolerancias" name="intolerancias" rows="3" placeholder="Especifica si tienes alguna intolerancia alimenticia"></textarea>
                <label for="intolerancias">Intolerancias o preferencias alimentarias</label>
            </div>
            <div class="form-group form-floating">
                <select class="form-select" id="confirmacion" name="confirmacion" required>
                    <option selected>Selecciona una opción</option>
                    <option value="si">Sí</option>
                    <option value="si">Tal vez</option>
                    <option value="no">No</option>
                </select>
                <label for="confirmacion">¿Confirmas tu asistencia? <span class="text-danger">*</span></label>
            </div>
            <button type="submit" class="btn btn-danger btn-block">Enviar</button>
        </form>
    </div>
</body>
</html>
