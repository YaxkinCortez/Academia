<?php
require 'conexion.php';
$proyecto=$_REQUEST['proyecto'];
//para borrar el archivo en la carpeta
$sql="SELECT nombreA FROM anteproyecto WHERE id_antp='$proyecto'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();
$nombre=$row['nombreA'];
$ruta="../upload/";
$borrar=unlink($ruta.$nombre);
//ejecutamos la eliminacion de la base de datos
$sql2="DELETE FROM anteproyecto WHERE id_antp='$proyecto'";
if(empty($proyecto)){
    header('Location: ../vistas/proyecto.php');
}else{
    $query = mysqli_query($conn, $sql2);
    //aqui preguntamos si el query y borrar son verdad entonces nos manda el mensaje
    if($query and $borrar){
        echo  '<script type="text/javascript">
        alert("Eliminado");
        window.location.href="../vistas/proyecto.php";
      </script>';
    }else{
        die("error" . $conn->error);
    }
}
//unlink("../upload/".$nombre);
?>