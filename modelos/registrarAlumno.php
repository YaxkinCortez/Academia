<?php
require 'conexion.php';

$matricula = strtoupper($_POST['matricula']);
$nombre = strtoupper($_POST['nombre']);
$apellidos = strtoupper($_POST['apellidos']);
$contra = $_POST['contra'];
$numero = $_POST['numero'];
$correo = $_POST['correo'];
$tipo = $_POST['tipo'];
$semestre = $_POST['semestre'];
$grupo = strtoupper($_POST['grupo']);

$pru1 = "SELECT * FROM jefe_carrera WHERE num_control='$matricula'";
$pru2 = "SELECT * FROM maestros WHERE num_control='$matricula'";
$pru3 = "SELECT * FROM alumnos WHERE num_control='$matricula'";
$sql2 = "INSERT INTO alumnos(num_control, nombre, apellidos, contra, telefono, correo, semestre, carrera, grupo)
VALUES ('$matricula','$nombre','$apellidos','$contra','$numero','$correo','$semestre','$tipo','$grupo')";

//comparativas para matriculas
//jefes
$query1 = mysqli_query($conn, $pru1);
$result1 = mysqli_fetch_array($query1);

//maestros 
$query2 = mysqli_query($conn, $pru2);
$result2 = mysqli_fetch_array($query2);

//alumnos 
$query3 = mysqli_query($conn, $pru3);
$result3 = mysqli_fetch_array($query3);

if(($_POST)){
    if(empty($_POST['matricula'])|| empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['contra'])
    || empty($_POST['tipo']) || empty($_POST['semestre']) || empty($_POST['grupo'])){
        echo '<script type="text/javascript">
        alert("Llenar campos, numero de control, nombre, apellidos, semestre y grupo");
        window.location.href="../vistas/R_usuarios/registro.php";
      </script>';
    }else{
        if ($result >= 1) {
            echo '<script type="text/javascript">
            alert("Matricula repetida");
            window.location.href="../vistas/R_usuarios/registro.php";
            </script>';
        }else if ($result2 >= 1){
            echo '<script type="text/javascript">
            alert("Matricula repetida");
            window.location.href="../vistas/R_usuarios/registro.php";
            </script>';
        }else if ($result3 >= 1){
            echo '<script type="text/javascript">
            alert("Matricula repetida");
            window.location.href="../vistas/R_usuarios/registro.php";
            </script>';    
        } else {

            if ($conn->query($sql2) === true) {
                echo '<script type="text/javascript">
                alert("Registro exitoso de Alumno");
                window.location.href="../vistas/R_usuarios/registro.php";
                </script>';
            }else {
                die("error" . $conn->error);
            }
        }
    }
}

?>