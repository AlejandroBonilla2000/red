<?php
session_start();
require 'db_connection.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
        window.onload = function() {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Usuario no autenticado.',
            }).then(() => {
                window.location.href = '../index.html';
            });
        }
    </script>";
    exit();
}

$user_id = $_SESSION['user_id'];
$nombre = trim($_POST['nombre']);
$edad = (int)$_POST['edad'];
$telefono = trim($_POST['telefono']);
$comentarios = trim($_POST['comentarios']);

$stmt = $conn->prepare("INSERT INTO form_data (user_id, nombre, edad, telefono, comentarios) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("isiss", $user_id, $nombre, $edad, $telefono, $comentarios);

if ($stmt->execute()) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
        window.onload = function() {
            Swal.fire({
                icon: 'success',
                title: '¡Enviado!',
                text: 'Formulario enviado correctamente.',
                confirmButtonColor: '#4a90e2',
            }).then(() => {
                window.location.href = 'formulario.php';
            });
        }
    </script>";
} else {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
        window.onload = function() {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Error al enviar el formulario: " . $stmt->error . "',
                confirmButtonColor: '#d33',
            }).then(() => {
                window.location.href = 'formulario.php';
            });
        }
    </script>";
}

$stmt->close();
$conn->close();
?>
