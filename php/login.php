<?php
session_start();
require 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: formulario.php");
            exit();
        }
    }

    // Mensaje de error si las credenciales son incorrectas
    echo "<script>alert('Correo o contraseña incorrectos.'); window.location.href = '../index.html';</script>";
} else {
    header("Location: ../index.html");
    exit();
}
?>
