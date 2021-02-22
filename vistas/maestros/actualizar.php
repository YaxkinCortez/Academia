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
                                <h1 class="page-title">ACTUALIZAR DATOS</h1>
                                <ol class="breadcrumb">
                                    <li><a href="../maestros.php">INICIO</a></li>
                                    <li class="active">ACTUALIZAR</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end inner page banner -->

    <!-- inicio formulario -->
    <div class="section padding_layout_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="full">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                                <h2 class="text_align_center">ACTUALIZAR DATOS</h2>
                                <div class="form_section">
                                    <form class="form_contant" action="../../modelos/actualizarMaestro.php"
                                        method="POST">
                                        <fieldset>
                                            <div class="row">
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" placeholder="Nueva contraseña"
                                                        type="password" name="contra">
                                                </div>
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" placeholder="Telefono" type="text"
                                                        name="telefono" value="<?php echo $row['telefono']?>">
                                                </div>
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" placeholder="Correo" type="text"
                                                        name="correo" value="<?php echo $row['correo']?>">
                                                </div>
                                                <div class="center"><button class="btn btn-warning">ACTUALIZAR</button>
                                                </div>
                                    </form>
                                </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- fin formulario -->

    <!-- inicio del footer-->
    <footer>
        <div class="cprt">
            <p>Diseñado por Yaxkin Manuel Cortez Villegas</p>
        </div>
    </footer>
    <!-- end footer -->

    <body>

</html>