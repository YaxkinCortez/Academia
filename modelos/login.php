<?php
    require 'conexion.php';
    session_start();

    $usuario = $_POST['usuario'];
    $clave = $_POST['password'];

    $sql="SELECT num_control  FROM jefe_carrera where num_control = '$usuario' and contra = '$clave' ";
    $sql2="SELECT num_control  FROM maestros where num_control = '$usuario' and contra = '$clave' ";
    $sql3="SELECT num_control  FROM alumnos where num_control = '$usuario' and contra = '$clave' ";

    //busqueda en tabla jefes
    $resultado = $conn->query($sql);
    $rows = $resultado->num_rows;

    //busqueda en tabla maestros
    $resultado2 = $conn->query($sql2);
    $rows2 = $resultado2->num_rows;

    //busqueda en tabla alumnos
    $resultado3 = $conn->query($sql3);
    $rows3 = $resultado3->num_rows;
    if($rows>0){
        $row = $resultado->fetch_assoc();
        $_SESSION['num_control'] = $row['num_control'];
        $_SESSION['iniciarSesion'] ="ok";
        header("location: ../vistas/admin.php");
    }else if($rows2>0){
        $row2 = $resultado2->fetch_assoc();
        $_SESSION['num_control'] = $row2['num_control'];
        $_SESSION['id_maestro'] = $row2['id_maestro'];
        $_SESSION['iniciarSesion'] ="ok";
        header("location: ../vistas/maestros.php");

    }else if($rows3>0){
        $row3 = $resultado3->fetch_assoc();
        $_SESSION['num_control'] = $row3['num_control'];
        $_SESSION['iniciarSesion'] ="ok";
        header("location: ../vistas/dashboard.php");

    }else{
        echo  '<script type="text/javascript">
        alert("Datos incorrectos");
        window.location.href="../vistas/login.html";
      </script>';
    }
?>