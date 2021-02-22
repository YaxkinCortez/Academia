<?php
include 'conexion.php';
session_start();
$iduser = $_SESSION['num_control'];
$descripcion = strtoupper($_POST['descripcion']);
$empresa = strtoupper($_POST['empresa']);
$asesor = $_POST['tipo'];

$nombre = $_FILES['fichero']['name'];
$ruta = $_FILES['fichero']['tmp_name'];
$tipo = $_FILES['fichero']['type'];
$peso = $_FILES['fichero']['size'];
$destino = "../upload/".$nombre;
move_uploaded_file($ruta,$destino);

$sql = "INSERT INTO anteproyecto(alumno, n_asesor, nombreA, descripcion, ruta, tipo, peso, empresa) 
VALUES ('$iduser','$asesor','$nombre','$descripcion','$destino','$tipo','$peso','$empresa')";

if(empty($_POST['empresa']) || empty($_POST['descripcion'])){
    echo '<script type="text/javascript">
	alert("Llenar campos, Empresa o Descripcion");
	window.location.href="../vistas/proyecto.php";
  </script>';
}else if($conn->query($sql) === true){
  echo '<script type="text/javascript">
	alert("Archivo Guardo Exitosamente");
	window.location.href="../vistas/proyecto.php";
  </script>';
}else{
    die("error" . $conn->error);
}
?> 