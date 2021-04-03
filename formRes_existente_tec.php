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
                        <li class="nav-item"><a href="formRes_tec.php" class="nav-link link-scroll">Resistencia de Concreto Nuevo</a></li>
                        <li class="nav-item" style="background-color: black"><a href="login.html" class="btn btn-outline-white nav-link " style="color: #fff">Cerrar sesión</a></li>
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
                    <h2 class="heading">RESISTENCIA DE CONCRETOS</h2>
                    <form id="contact-form" action="formRes_existente_insert_tec.php" method="post" class="contact-form">
                        <div class="controls">
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="folio_ch">Folio Colado (Cliente + No.Colado)*</label>
                                        <select class="form-control" id="folio_ch" name="folio_ch">
                                        <?php
                                        include("dbConfig.php");
                                        $query1 = "SELECT folio_ch FROM BASE_CONCRETOH";
                                        $resultado1 = mysqli_query ($enlace, $query1 );
                                        while ($renglon=mysqli_fetch_array($resultado1,MYSQLI_NUM))
                                        {
                                            echo "<option class='dropdown-toggle' value=".$renglon[0].">".$renglon[0]."</option>";
                                            //$folio=$renglon[0];
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Folio Muestra (Folio Colado + No.muestra)*</label>
                                        <!-- Folio dado por la llave de la tabla IDENTIFICACIÓN-->
                                        <input type="text" id="llave_tabla" name="llave_tabla" placeholder="CLIENTE0-0" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <h5>DATOS DEL ESPECIMEN</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edad">Edad (días)</label>
                                        <input type="number" id="edad" name="edad" placeholder="No. días" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="diametro">Diametro (cm)</label>
                                        <input type="number" id="diametro" name="diametro" placeholder="00.00" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="area">Area (cm<sup>2</sup>)</label>
                                        <input type="number" id="area" name="area" placeholder="No. días" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fecha_colado">Fecha de colado</label>
                                        <input type="date" id="fecha_colado" name="fecha_colado" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fecha_ruptura">Fecha de ruptura</label>
                                        <input type="date" id="fecha_ruptura" name="fecha_ruptura" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="peso">Peso (kg)</label>
                                        <input type="number" id="peso" name="peso" placeholder="00.00" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h5>DATOS DE ENSAYO</h5>
                            <div class="form-group">
                                <label for="prueba">Tipo de prueba</label>
                                <input type="text" id="prueba" name="prueba" placeholder="Ingrese el tipo de prueba" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edad_ensayo">Edad (días)</label>
                                        <input type="number" id="edad_ensayo" name="edad_ensayo" placeholder="No. días" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="carga_rup">Carga de ruptura (kgf)</label>
                                        <input type="number" id="carga_rup" name="carga_rup" placeholder="00.00" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="resistencia">Resistencia (kg/cm<sup>2</sup>)</label>
                                        <input type="number" id="resistencia" name="resistencia" placeholder="No. días" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="porc_resis">% de resistencia de proyecto</label>
                                        <input type="number" id="porc_resis" name="porc_resis" placeholder="00.00" class="form-control">
                                    </div>
                                </div>
                            </div>
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