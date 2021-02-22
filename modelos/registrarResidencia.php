<?php
require 'conexion.php';
session_start();
$iduser = $_SESSION['num_control'];
$id = $_POST['tipo'];
$empresa = $_POST['empresa'];

$sql ="SELECT id_alumno FROM alumnos WHERE num_control='$iduser'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();

$alumno = $row['id_alumno'];
$insert ="INSERT INTO residentes (alumno, empresa, asesor) VALUES ('$alumno','$empresa','$id')";

if(empty($_POST['empresa'])){
    echo '<script type="text/javascript">
	alert("Llenar campos, Empresa");
	window.location.href="../vistas/asesores.php";
  </script>';
}else{
    if($conn->query($insert) === true){
        echo '<script type="text/javascript">
        alert("Registro Exitoso");
        window.location.href="../vistas/asesores.php";
      </script>';
    }else{
        die("error" . $conn->error);
    }
}
?>