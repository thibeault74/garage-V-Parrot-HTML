<?php
require_once 'conexion.php';

$resultado = $conexion->query('SELECT * FROM usuarios ORDER BY id DESC');

while ($fila = $resultado->fetch_assoc()) {
    echo '<p><strong>Nom:</strong> ' . $fila['nombre'] . ' | <strong>Age:</strong> ' . $fila['edad'] . '</p>';
}

$conexion->close();
?>

