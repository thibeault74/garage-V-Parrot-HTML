<?php
require_once 'conexion.php';

// Verificación de las credenciales y lógica de inicio de sesión
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password1 = '$password'";
    $result = $conexion->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            // Usuario encontrado, redirigir
            header('Location: registro.php');
            exit(); // Detener la ejecución del script después de la redirección
        } else {
            // Usuario no encontrado
            echo 'Usuario no encontrado';
        }
    } else {
        // Error en la consulta SQL
        echo 'Error en la consulta: ' . $conexion->error;
    }
}
?>









