<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Garage V.Parrot</title>
    <?php require_once 'link.php'; ?>
</head>
<body>
    <?php require_once 'NavBar2.php'; ?>
    <div class="container_record">
        <h1>Enregistrement vehicule</h1>

        <form id="userForm" action="procesar_formulario.php" method="post" enctype="multipart/form-data">
            <label for="marca">Marque:</label>
            <input type="text" id="marca" name="marca" required><br><br>

            <label for="tipo_vehiculo">Type de véhicule:</label>
            <input type="text" id="tipo_vehiculo" name="tipo_vehiculo" required><br><br>

            <label for="anio">Année de fabrication:</label>
            <input type="number" id="anio" name="anio" min="1900" max="2100" required><br><br>

            <label for="precio">Prix:</label>
            <input type="number" id="precio" name="precio" min="0" step="0.01" required><br><br>

            <label for="imagen">Image:</label>
            <input type="file" id="imagen" name="fichero" accept="image/jpeg, image/png" required><br><br>

            <input type="submit" value="Envoyer des données">
        </form>
    </div>
</body>
<footer>
    <script src="script.js"></script>
    <?php require_once 'foot.php'; ?>
</footer>
<script>
    document.getElementById('userForm').addEventListener('submit', function() {
        alert('Datos enviados correctamente');

    });
</script>
</html>
