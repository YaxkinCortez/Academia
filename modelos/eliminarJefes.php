<?php
require 'conexion.php';
$matricula=$_REQUEST['matricula'];

$sql="DELETE FROM jefe_carrera WHERE num_control='$matricula'";
if(empty($matricula)){
    header('Location: ../vistas/perfil/listarJefes.php');
}else{
    $query = mysqli_query($conn, $sql);
    if($query){    
        echo  '<script type="text/javascript">
        alert("Eliminado");
        window.location.href="../vistas/R_usuarios/listarJefes.php";
      </script>';
    }else{
        die("error" . $conn->error);
    }
}
?>