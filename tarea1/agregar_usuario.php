<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellidoPat = $_POST['apellidoPat'];
    $apellidoMat = $_POST['apellidoMat'];
    $dni = $_POST['dni'];
    $fechaNac = $_POST['fechaNac'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];
    $sector = $_POST['sector'];
    $pais = $_POST['pais'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];

    $stmt = $conexion->prepare('INSERT INTO usuarios (nombre, apellidoPat, apellidoMat, dni, fechaNac, empresa, cargo, sector, pais, email, password1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->bind_param('sssssssssss', $nombre, $apellidoPat, $apellidoMat, $dni, $fechaNac, $empresa, $cargo, $sector, $pais, $email, $password1);

    // Ejecutar antes de cerrar la declaración
    if ($stmt->execute()) {
        echo 'Registro exitoso'; // O cualquier mensaje de éxito
    } else {
        echo 'Error al registrar: ' . $stmt->error; // Mensaje de error
    }

    $stmt->close();
    $conexion->close();
}
?>
