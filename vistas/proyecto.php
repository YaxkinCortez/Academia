<?php
include "../modelos/conexion.php";
session_start();
if (!isset($_SESSION['inisiarSesion']) && $_SESSION['iniciarSesion'] == "ok") {
    header('loacation: proyecto.php');
} else {
    header('Location: login.html');
}
$iduser = $_SESSION['num_control'];
$sql = "SELECT * FROM alumnos WHERE num_control='$iduser'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();

$sql2 = "SELECT * FROM maestros";
$option = $conn->query($sql2);
?>

<!doctype html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Academica</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icons -->
    <link rel="icon" href="../images/fevicon/fevicon.png" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Site css -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="../css/responsive.css" />
    <!-- colors css -->
    <link rel="stylesheet" href="../css/colors1.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="../css/custom.css" />
    <!-- wow Animation css -->
    <link rel="stylesheet" href="../css/animate.css" />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="../revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="../revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="../revolution/css/navigation.css" />
    <!-- js section -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- menu js -->
    <script src="../js/menumaker.js"></script>
    <!-- wow animation -->
    <script src="../js/wow.js"></script>
    <!-- custom js -->
    <script src="../js/custom.js"></script>
    <!-- revolution js files -->
    <script src="../revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="../revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="../revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="../revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="../revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="../revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="../revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="../revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="../revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="../revolution/js/extensions/revolution.extension.video.min.js"></script>
</head>

<body id="default_theme" class="it_service">
    <!-- loader -->
    <div class="bg_load"> <img class="loader_animation" src="../images/loaders/loader_1.png" alt="#" /> </div>
    <!-- end loader -->

    <!-- header top -->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="full">
                        <div class="topbar-left">
                            <ul class="list-inline">
                                <li> <?php echo $row['num_control'] ?> </li>
                                <li> <?php echo $row['nombre'] ?> </li>
                                <li> <?php echo $row['apellidos'] ?> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 right_section_header_top">
                    <div class="float-right">
                        <div class="make_appo"> <a class="btn white_btn" href="../modelos/salir.php">Cerra sesion</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header top -->

    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <!-- logo start -->
                    <div class="logo"> <a href="../vistas/dashboard.php"><img src="../images/logos/academica.png"
                                alt="logo" /></a> </div>
                    <!-- logo end -->
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <!-- menu start -->
                    <div class="menu_side">
                        <div id="navbar_menu">
                            <ul class="first-ul">
                                <li> <a class="active" href="dashboard.php">Inicio</a>
                                <li> <a>Perfil</a>
                                    <ul>
                                        <li><a class="active" href="perfil/updateContra.php">Actualizar</a></li>
                                    </ul>
                                <li><a href="justificantes.php">Justificantes</a></li>
                                <li> <a href="empresas/mainEmpresas.php">Empresas</a></li>
                            </ul>

                        </div>
                    </div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
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
                                    <li><a href="dashboard.php">INICIO</a></li>
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
    <!-- uploader -->
    <div class="section padding_layout_1">
        <div id="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                                <h2 class="text_align_center">SUBIR ANTEPROYECTO</h2>
                                <div class="form_section">
                                    <form action="../modelos/uploader.php" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="row">
                                                Seleccione archivo: <input name="fichero" type="file" size="150"
                                                    maxlength="150" accept="application/pdf">
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" placeholder="Descripcion"
                                                        type="descripcion" name="descripcion">
                                                </div>
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" placeholder="Empresa" type="descripcion"
                                                        name="empresa">
                                                        </div>
                                                    <label class="asesor">Asesor</label>
                                                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <select class="select" name="tipo">
                                                        <?php
														while ($row2 = mysqli_fetch_array($option)) {
															echo '<option value="' . $row2['id_maestro'] . '">' . $row2['nombre'] . ' ' . $row2['apellidos'] . '</option>'
															;
														}
														?>
                                                    </select>
                                                </div>
                                                    <div class="center"><button class="btn main_bt">SUBIR</button></div>
                                                </div>
                                    </form>
                                </div>
                                </fieldset><br><br><br><br><br><br><br><br>
                                <h2 class="text_align_center">Proyecto Subido</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin uploader -->
    <!-- archivos subidos -->
    <!-- seccion tabla-->
    <table class="table table-hover table-dark">
            <tr>
                <th scope="col">Asesor</th>
                <th scope="col">Archivo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Empresa</th>
                <th scope="col">Acciones</th>
            </tr>
            <?php
            $sql3 = "SELECT an.id_antp, m.nombre, m.apellidos, an.nombreA, an.descripcion, an.empresa
                FROM anteproyecto an, alumnos a, maestros m
                WHERE an.alumno=a.num_control AND m.id_maestro=an.n_asesor AND a.num_control='$iduser'";
            $result = mysqli_query($conn, $sql3);

            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $mostrar['nombre'].' '.$mostrar['apellidos'] ?></td>
                <td><?php echo $mostrar['nombreA'] ?></td>
                <td><?php echo $mostrar['descripcion'] ?></td>
                <td><?php echo $mostrar['empresa'] ?></td>
                <td>
                    <a class="btn btn-danger"
                        href="../modelos/eliminarAnteproyecto.php?proyecto=<?php echo $mostrar['id_antp']; ?>">Eliminar</a>
                </td>
                <td>
                    <a class="btn btn-primary"
                        href="../modelos/descargar.php?proyecto=<?php echo $mostrar['id_antp']; ?>">Visualizar</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    <!-- fin subidos -->
    <!-- inicio del footer-->
    <footer class="footer_style_2">
        <div class="cprt">
            <p>Diseñado por Yaxkin Manuel Cortez Villegas</p>
        </div>
    </footer>
    <!-- end footer -->

</body>

</html>