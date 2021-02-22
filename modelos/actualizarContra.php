<?php
require 'conexion.php';
session_start();
$iduser = $_SESSION['num_control'];
$sql = "SELECT * FROM alumnos WHERE num_control='$iduser'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();

$contra = $_POST['contra'];
$numero = $_POST['telefono'];
$correo = $_POST['correo'];

$sql2="UPDATE alumnos SET contra = '$contra', telefono = '$numero', correo = '$correo'
            WHERE num_control = '$iduser'";

if(($_POST)){
    if(empty($contra)){
        echo  '<script type="text/javascript">
                    alert("Ingrese una contraseña");
                    window.location.href="../vistas/perfil/updateContra.php";
                </script>';
    }else{
        $query = mysqli_query($conn, $sql2);
        
        if($conn->query($sql2) === true){
            echo '<script type="text/javascript">
            alert("Actualizacion exitosa");
            window.location.href="../vistas/perfil/updateContra.php";
          </script>';
} else {
    die("error" . $conn->error);
}
        
    }
}
?>