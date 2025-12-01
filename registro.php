<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];

    $stmt = $base->prepare("INSERT INTO usuarios (usuario, contrasena, correo) VALUES (?, ?, ?)");

    if ($stmt->execute([$usuario, $contrasena, $correo])) {
        header("Location: zona_registrados.php");
        exit;
    } else {
        echo "Error al registrar usuario";
    }
}
?>
