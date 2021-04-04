<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PILOMEX Perforaciones profundas</title>
    <meta name="description" content="PILOMEX fue fundada en 2017 con el propósito de suministrar soluciones y servicio innovadores a través de la ingeniería civil, ingeniería química, y geofísica, contribuyendo con nuestros clientes a su competitividad y rentabilidad
    por medio del servicio y soluciones únicas para sus proyectos y procesos constructivos.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Montserrat for headings, Cardo for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700">
    <!-- Lightbox-->
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fabicon.png">
    <!-- Leaflet CSS - For the map-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- intro end-->
    <!-- navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="home_tecnico.php" class="navbar-brand link-scroll"><img src="img/logo.png" alt="" class="img-fluid"></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="formComp_tec.php" class="nav-link link-scroll">Nuevo Grado de compactación</a></li>
                        <li class="nav-item" style="background-color: black;"><a href="login.html" class="btn btn-outline-white nav-link " style="color: #fff">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Form 2 (resistencia de concretos) -->
    <section id="contact" style="background-color: #fff;" class="text-page pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="heading">DETERMINACIÓN DE GRADO DE COMPACTACIÓN</h1>
                    <form id="contact-form" action="formComp_existente_insert_tec.php" method="post" class="contact-form">
                        <div class="controls">
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <label for="folio_gc">Folio de compactacion *</label>
                                    <!--Folio ÚNICO por proyecto y dado por CLIENTE + UBICACION-->
                                    <select class="form-control" id="folio_gc" name="folio_gc">
                                    <?php
                                    include("dbConfig.php");
                                    $query1 = "SELECT folio_gc FROM BASE_GRADOCOMPAC";
                                    $resultado1 = mysqli_query ($enlace, $query1 );
                                    while ($renglon=mysqli_fetch_array($resultado1,MYSQLI_NUM))
                                    {
                                        echo "<option class='dropdown-toggle' value=".$renglon[0].">".$renglon[0]."</option>";
                                        //$folio=$renglon[0];
                                    }
                                    ?>
                                        
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="folio_gc">Folio de compactacion *</label>
                                    
                                    <input type="tel" id="folio_gc" name="folio_gc" placeholder="CLIENTE + UBICACION" required="required" class="form-control">
                                </div> -->
                            </div>
                            <h5>DETERMINACIÓN DE LA MASA VOLUMÉTRICA HUMEDA DEL MATERIAL</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="fecha">Fecha*</label>
                                        <input type="date" id="fecha" name="fecha" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="num_cala">1. No. Cala* </label>
                                        <input type="text" id="num_cala" name="num_cala" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="localizacion">2. Localización*</label>
                                        <input type="text" id="localizacion" name="localizacion" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="vol_sond">3. Volúmen de sondeo [cm<sup>3</sup>]* </label>
                                <input type="number" id="vol_sond" name="vol_sond" required="required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="masa_humed">4. Masa humeda de material [g]* </label>
                                <input type="number" id="masa_humed" name="masa_humed" required="required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="masa_vol">5. Masa volumétrica humeda del material [kg/m<sup>3</sup>]* </label>
                                <input type="text" id="masa_vol" name="masa_vol" placeholder="00.00" required="required" class="form-control">
                            </div>
                            <br>
                            <h5>DETERMINACIÓN DEL CONTENIDO DE AGUA</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="num_recip">6. Número de recipiente* </label>
                                        <input type="number" id="num_recip" name="num_recip" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="masa_recip">7. Masa del recipiente (TARA) [g]* </label>
                                        <input type="number" id="masa_recip" name="masa_recip" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="masa_mathum_tara">8. Masa material humedo + TARA [g]* </label>
                                        <input type="number" id="masa_mathum_tara" name="masa_mathum_tara" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="masa_matseco_tara">9. Masa material seco + TARA [g]* </label>
                                        <input type="number" id="masa_matseco_tara" name="masa_matseco_tara" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dif">10. Diferencia (Agua) (5)-(9) [g]* </label>
                                        <input type="number" id="dif" name="dif" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="masa_matseco">11. Masa material seco (5)-(7) [g]* </label>
                                        <input type="number" id="masa_matseco" name="masa_matseco" placeholder="00.00" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cont_agua">12. Contenido de agua en decimales (10)/(11)* </label>
                                <input type="text" id="cont_agua" name="cont_agua" placeholder="00.00" required="required" class="form-control">
                            </div>
                            <br>
                            <h5>DETERMINACIÓN DE LA MASA VOLUMETRICA SECA Y GRADO DE COMPACTACIÓN</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prof_sond">13. Profundidad del sondeo [cm]*</label><!--Folio ch-->
                                        <input type="number" id="prof_sond" name="prof_sond" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cont_agua_optima">14. Contenido de agua optima del material (%)*</label> 
                                        <input type="text" id="cont_agua_optima" name="cont_agua_optima" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cont_agua_lugar">15. Contenido de agua del lugar (12)x100 [g]*</label>
                                        <input type="text" id="cont_agua_lugar" name="cont_agua_lugar" placeholder="00.00" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="masa_vol_seca_max">16. Masa volumétrica seca máxima [kg/m<sup>3</sup>]*</label>
                                        <input type="number" id="masa_vol_seca_max" name="masa_vol_seca_max" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="masa_vol_seca_lugar">17. Masa volumétrica seca del lugar [kg/m<sup>3</sup>]*</label>
                                        <input type="number" id="masa_vol_seca_lugar" name="masa_vol_seca_lugar" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="grado_compact">18. Grado de compactación (16)/(17)x100 [N]*</label>
                                        <input type="text" id="grado_compact" name="grado_compact" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <input type="submit" value="Guardar" class="btn btn-outline-primary btn-block">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        </div>
    </section>
    <footer style="background-color: #111;">
        <div class="container">
            <div class="row copyright">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">&copy;2020 PILOMEX</p>
                </div>
                <div class="col-md-6">
                    <p class="credit mb-md-0 text-center text-md-right">Template by <a href="https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form">Bootstrapious</a> & readapted by <a href="https://www.taquitosoftware.com.mx">Taquito Software</p>
                    <!-- Please do not remove the backlink to us. It is part of the licence conditions. Thanks for understanding :)-->
                </div>
            </div>
        </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js">
    </script>
    <script src="vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js">
    </script>
    <script src="js/front.js"></script>

</body>

</html>