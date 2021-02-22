<?php
include "../../modelos/conexion.php";
session_start();
if (!isset($_SESSION['inisiarSesion']) && $_SESSION['iniciarSesion'] == "ok") {
    header('loacation: ../vistas/maestros.php');
} else {
    header('Location: ../login.html');
}
$iduser = $_SESSION['num_control'];
$sql = "SELECT * FROM maestros WHERE num_control='$iduser'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();

?>

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
    <link rel="icon" href="../../images/fevicon/fevicon.png" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <!-- Site css -->
    <link rel="stylesheet" href="../../css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="../../css/responsive.css" />
    <!-- colors css -->
    <link rel="stylesheet" href="../../css/colors1.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="../../css/custom.css" />
    <!-- wow Animation css -->
    <link rel="stylesheet" href="../../css/animate.css" />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="../../revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="../../revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="../../revolution/css/navigation.css" />
    <!-- js section -->
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <!-- menu js -->
    <script src="../../js/menumaker.js"></script>
    <!-- wow animation -->
    <script src="../../js/wow.js"></script>
    <!-- custom js -->
    <script src="../../js/custom.js"></script>
    <!-- revolution js files -->
    <script src="../../revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="../../revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../../revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="../../revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="../../revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="../../revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="../../revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="../../revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="../../revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="../../revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="../../revolution/js/extensions/revolution.extension.video.min.js"></script>
</head>

<header id="default_theme" class="it_service">
    <!-- loader -->
    <div class="bg_load"> <img class="loader_animation" src="../../images/loaders/loader_1.png" alt="#" /> </div>
    <!-- end loader -->

    <!-- header top -->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="full">
                        <div class="topbar-left">
                            <ul class="list-inline">
                                <li> <?php  echo $row['num_control'] ?> </li>
                                <li> <?php  echo $row['nombre'] ?> </li>
                                <li> <?php  echo $row['apellidos'] ?> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 right_section_header_top">
                    <div class="float-right">
                        <div class="make_appo"> <a class="btn white_btn" href="../../modelos/salir.php">Cerra sesion</a>
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
                    <div class="logo"> <a href="../maestros.php"><img src="../../images/logos/academica.png"
                                alt="logo" /></a> </div>
                    <!-- logo end -->
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <!-- menu start -->
                    <div class="menu_side">
                        <div id="navbar_menu">
                            <ul class="first-ul">
                                <li> <a class="active" href="../maestros.php">Inicio</a>
                                <li> <a>Perfil</a>
                                    <ul>
                                        <li><a class="active" href="actualizar.php">Actualizar</a></li>
                                    </ul>
                                <li><a>Proyectos</a>
                                    <ul>
                                        <li><a class="active" href="mostrarPro.php">Mostrar proyecto</a></li>
                                    </ul>
                                </li>
                        </div>
                    </div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</header>
