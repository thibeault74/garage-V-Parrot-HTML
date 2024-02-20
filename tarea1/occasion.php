<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once 'link.php'; ?>
<title>Garage V.Parrot</title>
</head>
<body>
    <style>
        table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}

img {
    max-width: 200px;
    max-height: 200px;
}
</style>
    <?php require_once 'NavBar.php'; ?>

    <h1>véhicules d'occasion</h1>

    <?php
    require_once 'conexion.php';


    $sql = "SELECT * FROM datos_vehiculos";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Marque</th><th>Type de véhicule</th><th>Année de fabrication</th><th>Prix</th><th>Imagen</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["marca"] . "</td>";
            echo "<td>" . $row["tipo_vehiculo"] . "</td>";
            echo "<td>" . $row["anio"] . "</td>";
            echo "<td>" . $row["precio"] . "</td>";
            echo "<td><img src='cargados/" . $row["imagen"] . "' alt='Imagen del vehículo'></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Il n'y a aucun véhicule enregistré.";
    }

    $conexion->close();
    ?>

    <?php require_once 'foot.php'; ?>
</body>
</html>