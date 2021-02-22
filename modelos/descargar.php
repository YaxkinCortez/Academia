<?php
include "../modelos/conexion.php";
session_start();

$proyecto = $_REQUEST['proyecto']; 
$sql = "SELECT * FROM anteproyecto WHERE id_antp='$proyecto'";

$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();

$nombre=$row['nombreA'];
$tipo=$row['tipo'];
$contenido=$row['ruta'];

header("Content-disposition: attachment; filename=".$nombre."");
header("Content-type: ".$tipo."");
header(".$contenido.");
header("Location: ../upload/".$nombre."");

?>