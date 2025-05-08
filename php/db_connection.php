<?php
// db_connection.php

$servername = "localhost"; // Cambia por tu servidor (localhost para desarrollo)
$username = "root";        // Tu usuario de MySQL
$password = "";            // Tu contraseña de MySQL
$database = "login_system"; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    //echo "Conexión exitosa a la base de datos";
}
?>
