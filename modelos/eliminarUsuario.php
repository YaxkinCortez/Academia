<?php
require 'conexion.php';
$proyecto=$_REQUEST['matricula'];

$sql2="DELETE FROM alumnos WHERE num_control='$proyecto'";
if(empty($proyecto)){
    header('Location: ../vistas/R_usuarios/listar.php.php');
}else{
    $query = mysqli_query($conn, $sql2);
    if($query){
        echo  '<script type="text/javascript">
        alert("Eliminado");
        window.location.href="../vistas/R_usuarios/listar.php.php";
      </script>';
    }else{
        die("error" . $conn->error);
    }
}
?>