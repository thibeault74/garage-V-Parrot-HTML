<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'db_qhseprotools';

$conexion = new mysqli($hostname, $username, $password, $database);

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}
?>