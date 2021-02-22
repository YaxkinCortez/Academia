<?php
include "../modelos/conexion.php";
session_start();
if (!isset($_SESSION['inisiarSesion']) && $_SESSION['iniciarSesion'] == "ok") {
    header('loacation: maestro.php');
} else {
    header('Location: login.html');
}
$iduser = $_SESSION['num_control'];
$sql = "SELECT * FROM maestros WHERE num_control='$iduser'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();
?>

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
            <div class="make_appo"> <a class="btn white_btn" href="../modelos/salir.php">Cerra sesion</a> </div>
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
                    <div class="logo"> <a href="admin.php"><img src="../images/logos/academica.png"
                                alt="logo" /></a> </div>
                    <!-- logo end -->
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <!-- menu start -->
                    <div class="menu_side">
                        <div id="navbar_menu">
                            <ul class="first-ul">
                                <li> <a>Perfil</a>
                                    <ul>
                                        <li><a class="active" href="maestros/actualizar.php">Actualizar</a></li>
                                    </ul>
                                <li><a>Proyectos</a>
                                    <ul>
                                        <li><a class="active" href="maestros/mostrarPro.php">Mostrar proyecto</a></li>
                                    </ul>
                                </li>
                        </div>
                    </div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- seccion banner -->
    <div id="slider" class="section main_slider">
    <div class="container-fuild">
      <div class="row">
        <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
          data-alias="classicslider1"
          style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
          <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <li data-index="rs-1812" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut"
                data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="../images/cursos/webinar1.jpg"
                data-rotate="0" data-saveperformance="off" data-title="Procesamiento de imagenes" data-description="">
                <!-- MAIN IMAGE -->
                <img src="../images/cursos/webinar1.jpg" alt="#" data-bgposition="center center" data-kenburns="on"
                  data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                  data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"
                  data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. BG -->
                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-270-layer-1012"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                  data-height="full" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="s:300;s:300;"
                  data-start="750" data-basealign="slide" data-responsive_offset="on" data-responsive="off"
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0"
                  id="slide-18-layer-912" data-x="['center','center','center','center']"
                  data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                  data-voffset="['15','15','15','15']" data-width="500" data-height="140" data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000"
                  data-responsive_offset="on"
                  style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-112"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                  data-fontsize="['70','70','70','35']" data-lineheight="['70','70','70','50']" data-width="none"
                  data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars"
                  data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05"
                  style="z-index: 6; white-space: nowrap;">Procesamiento de imagenes</div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-412"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" data-width="none"
                  data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                  data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                  </div>
              </li>
              <li data-index="rs-181" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut"
                data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="../images/cursos/webinar2.jpg"
                data-rotate="0" data-saveperformance="off" data-title="Cadena de suministro" data-description="">
                <!-- MAIN IMAGE -->
                <img src="../images/cursos/webinar2.jpg" alt="" data-bgposition="center center" data-kenburns="on"
                  data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                  data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"
                  data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. BG -->
                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-270-layer-101"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                  data-height="full" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="s:300;s:300;"
                  data-start="750" data-basealign="slide" data-responsive_offset="on" data-responsive="off"
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-91"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" data-width="500"
                  data-height="140" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000"
                  data-responsive_offset="on"
                  style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-11"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                  data-fontsize="['70','70','70','35']" data-lineheight="['70','70','70','50']" data-width="none"
                  data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars"
                  data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05"
                  style="z-index: 6; white-space: nowrap;">Cadena de suministro </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-41"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" data-width="none"
                  data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                  data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"
                ></div>
              </li>
              <li data-index="rs-18" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut"
                data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="../images/cursos/webinar3.jpg"
                data-rotate="0" data-saveperformance="off" data-title="Solidworks" data-description="">
                <!-- MAIN IMAGE -->
                <img src="../images/cursos/webinar3.jpg" alt="" data-bgposition="center center" data-kenburns="on"
                  data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                  data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"
                  data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. BG -->
                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-270-layer-10"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                  data-height="full" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="s:300;s:300;"
                  data-start="750" data-basealign="slide" data-responsive_offset="on" data-responsive="off"
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-9"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" data-width="500"
                  data-height="140" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000"
                  data-responsive_offset="on"
                  style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-1"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                  data-fontsize="['70','70','70','35']" data-lineheight="['70','70','70','50']" data-width="none"
                  data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars"
                  data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05"
                  style="z-index: 6; white-space: nowrap;">Solidworks </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-4"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" data-width="none"
                  data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                  data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"
                  ></div>
                  curso </div>
              </li>
            </ul>
            <div class="tp-static-layers"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- seccion empresas -->
    <div class="section padding_layout_1">
        <div id="residencias_practicas">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="main_heading text_align_center">
                                <h2>Empresas</h2>
                                <p class="large">Residencias y Practicas Profesionales</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="full text_align_center margin_bottom_30">
                            <div class="center">
                                <div class="icon"> <img src="../images/empresas/richs.png" alt="#" /> </div>
                            </div>
                            <h3 class="theme_color">PRODUCTOS RICHS</h3>
                            <h4>Practicante lean manufacturing</h4>
                            <p>Ocoyoacac, Méx.</p>
                            <p><a class="btn main_bt" href="../vistas/empresas/richs.php">Saber mas</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="full text_align_center margin_bottom_30">
                            <div class="center">
                                <div class="icon"> <img src="../images/empresas/dimark.png" alt="#"
                                        onclick=location.href="it_home.html" /> </div>
                            </div>
                            <h3 class="theme_color">DIMARK SOLUTIONS</h3>
                            <h4>Practicas Profesionales</h4>
                            <p>Huehuetoca, Méx.</p>
                            <p><a class="btn main_bt" href="../vistas/empresas/dimark.php">Saber mas</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="full text_align_center margin_bottom_30">
                            <div class="center">
                                <div class="icon"> <img src="../images/empresas/femsa.png" alt="#" /> </div>
                            </div>
                            <h3 class="theme_color">Mecanica Tek FEMSA </h3>
                            <h4>Practicante</h4>
                            <p>Jiutepec, Mor.</p>
                            <p><a class="btn main_bt" href="../vistas/empresas/femsa.php">Saber mas</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="full text_align_center margin_bottom_30 margin_0">
                            <div class="center">
                                <div class="icon"> <img src="../images/empresas/ibm.jpg" alt="#" /> </div>
                            </div>
                            <h3 class="theme_color">IBM</h3>
                            <h4>Residencias y Prácticas</h4>
                            <p>Ciudad de Mexico, CDMX</p>
                            <p><a class="btn main_bt" href="../vistas/empresas/ibm.php">Saber mas</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin empresas -->
        <!-- inicio del footer-->
        <footer class="footer_style_2">
            <div class="cprt">
                <p>Diseñado por Yaxkin Manuel Cortez Villegas</p>
            </div>
        </footer>
        <!-- end footer -->

</body>

</html>