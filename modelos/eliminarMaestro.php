<?php
require 'conexion.php';
$matricula=$_REQUEST['matricula'];

$sql="DELETE FROM maestros WHERE num_control='$matricula'";
if(empty($matricula)){
    header('Location: ../vistas/perfil/listarMaestros.php');
}else{
    $query = mysqli_query($conn, $sql);
    if($query){  
        echo  '<script type="text/javascript">
        alert("Eliminado");
        window.location.href="../vistas/R_usuarios/listarMaestros.php";
      </script>';
    }else{
        die("error" . $conn->error);
    }
}
?>