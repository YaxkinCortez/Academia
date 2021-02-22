<?php
require 'conexion.php';

$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$contra = $_POST['contra'];
$numero = $_POST['numero'];
$correo = $_POST['correo'];
$tipo = $_POST['tipo'];
$semestre = $_POST['semestre'];
$grupo = $_POST['grupo'];

$sql = "SELECT * FROM usuarios WHERE num_control='$matricula'";
$sql2 = "INSERT INTO usuarios(num_control, nombre, apellidos, contra, telefono, correo, tipo_usuario, semestre, grupo)
VALUES ('$matricula','$nombre','$apellidos','$contra','$numero','$correo','$tipo','$semestre','$grupo')";

$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);

if (($_POST)) {
    if ($_POST['tipo'] == "alumno") {
        if (empty($_POST['matricula']) || empty($_POST['nombre']) || empty($_POST['apellidos'])
            || empty($_POST['semestre']) || empty($_POST['grupo'])) {
            echo '<script type="text/javascript">
            alert("Llenar campos, numero de control, nombre, apellidos, semestre y grupo");
            window.location.href="../vistas/R_usuarios/registro.php";
          </script>';
        } else {

            if ($result >= 1) {
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
                } else {
                    die("error" . $conn->error);
                }
            }
        }
    } else if ($_POST['tipo'] == "maestro") {
        if (empty($_POST['matricula']) || empty($_POST['nombre']) || empty($_POST['apellidos'])) {
            echo '<script type="text/javascript">
            alert("Llenar campos, numero de control, nombre, apellidos");
            window.location.href="../vistas/R_usuarios/registro.php";
            </script>';
        } else {

            if ($result >= 1) {
                echo '<script type="text/javascript">
                alert("Matricula repetida");
                window.location.href="../vistas/R_usuarios/registro.php";
                </script>';
            } else {

                if ($conn->query($sql2) === true) {
                    echo '<script type="text/javascript">
                    alert("Registro exitoso de Maestro");
                    window.location.href="../vistas/R_usuarios/registro.php";
                    </script>';
                } else {
                    die("error" . $conn->error);
                }
            }
        }
    } else if ($_POST['tipo'] == "administrador") {
        if (empty($_POST['matricula']) || empty($_POST['nombre']) || empty($_POST['apellidos'])) {
            echo '<script type="text/javascript">
            alert("Llenar campos, numero de control, nombre, apellidos");
            window.location.href="../vistas/R_usuarios/registro.php";
            </script>';
        } else {

            if ($result >= 1) {
                echo '<script type="text/javascript">
                alert("Matricula repetida");
                window.location.href="../vistas/R_usuarios/registro.php";
                </script>';
            } else {

                if ($conn->query($sql2) === true) {
                    echo '<script type="text/javascript">
                    alert("Registro exitoso Jefe de Carrera");
                    window.location.href="../vistas/R_usuarios/registro.php";
                    </script>';
                } else {
                    die("error" . $conn->error);
                }
            }
        }
    }
}
