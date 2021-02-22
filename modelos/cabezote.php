<?php
include "conexion.php";
session_start();
$iduser = $_SESSION['num_control'];
$sql = "SELECT * FROM usuarios WHERE num_control='$iduser'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();
if ($row['tipo_usuario'] == "administrador") {
    header('Location: ../vistas/admin.php');
} else if ($row['tipo_usuario'] == "maestro") {
    header('Location: ../vistas/maestros.php');
} else {
    header('Location: ../vistas/dashboard.php');
}

?>