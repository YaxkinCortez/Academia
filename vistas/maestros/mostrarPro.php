<?php
include "menuMaestros.php";
?>
<!doctype html>
<html>

<body>
    <!-- inner page banner -->
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-left">
                                <h1 class="page-title">PROYECTO</h1>
                                <ol class="breadcrumb">
                                    <li><a href="../maestros.php">INICIO</a></li>
                                    <li class="active">PROYECTO</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end inner page banner -->
    <!-- seccion tabla-->
    <div class="section padding_layout_1">
        <div id="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                                <h2 class="text_align_center">Proyecto de alumnos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-hover table-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apelidos</th>
            <th scope="col">Proyecto</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Empresa</th>
            <th scope="col">Acciones</th>
        </tr>
        <?php
    $sql2="SELECT a.nombre, a.apellidos, an.nombreA, an.descripcion, an.empresa, m.id_maestro 
    FROM anteproyecto an, alumnos a, maestros m 
    WHERE an.alumno=a.num_control AND an.n_asesor=m.id_maestro AND m.num_control='$iduser'";
    $result = mysqli_query($conn,$sql2);
    //$fila= myqli_num_rows($result);
    
    while ($mostrar = mysqli_fetch_array($result))
    {
  ?>
        <tr>
            <td><?php echo $mostrar['nombre'] ?></th>
            <td><?php echo $mostrar['apellidos'] ?></td>
            <td><?php echo $mostrar['nombreA'] ?></td>
            <td><?php echo $mostrar['descripcion'] ?></td>
            <td><?php echo $mostrar['empresa'] ?></td>
            <td>
                <a class="btn btn-primary"
                    href="../../modelos/descargar.php?proyecto=<?php echo $mostrar['id_antp']; ?>">Visualizar</a>
            </td>
        </tr>
        <?php
    }
  ?>
    </table>
    <!-- fin seccion tabla-->

    <!-- inicio del footer-->
    <br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <div class="cprt">
            <p>Diseñado por Yaxkin Manuel Cortez Villegas</p>
        </div>
    </footer>
    <!-- end footer -->

</body>

</html>