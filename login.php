<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena";
    $resultado = $base->prepare($sql);

    $resultado->bindValue(":usuario", $usuario);
    $resultado->bindValue(":contrasena", $contrasena);

    $resultado->execute();

    if ($resultado->rowCount() > 0) {
        header("Location: zona_registrados.php");
        exit;
    } else {
        echo "CONTRASEÑA INCORRECTA";
    }
}
?>
