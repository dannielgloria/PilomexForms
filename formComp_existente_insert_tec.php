
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
                        <li class="nav-item"><a href="formComp_tec.php" class="nav-link link-scroll">Grado de compactación Nuevo</a></li>
                        <li class="nav-item" style="background-color: black;"><a href="login.html" class="btn btn-outline-white nav-link ">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Formulario 3 (Grado de Compactación) -->
    <section id="revendimiento" style="background-color: #fff;" class="text-page pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="heading">GRADO DE COMPACTACIÓN</h1>
                    <?php
                    include("dbConfig.php");

                    $folio_gc = $_POST ['folio_gc'];
                    $num_cala = $_POST ['num_cala'];
                    $fecha = $_POST ['fecha'];
                    $localizacion = $_POST ['localizacion'];
                    $vol_sond = $_POST ['vol_sond'];
                    $masa_humed= $_POST ['masa_humed'];
                    $masa_vol = $_POST ['masa_vol'];
                    $num_recip = $_POST ['num_recip'];
                    $masa_recip = $_POST ['masa_recip'];
                    $masa_mathum_tara = $_POST ['masa_mathum_tara'];
                    $masa_matseco_tara = $_POST ['masa_matseco_tara'];
                    $dif = $_POST ['dif'];
                    $masa_matseco = $_POST ['masa_matseco'];
                    $cont_agua = $_POST ['cont_agua'];
                    $prof_sond = $_POST ['prof_sond'];
                    $cont_agua_optima = $_POST ['cont_agua_optima'];
                    $cont_agua_lugar = $_POST ['cont_agua_lugar'];
                    $masa_vol_seca_max = $_POST ['masa_vol_seca_max'];
                    $masa_vol_seca_lugar = $_POST ['masa_vol_seca_lugar'];
                    $grado_compact = $_POST ['grado_compact'];
                    $query2= "INSERT INTO cala_compactacion VALUES ('$num_cala','$fecha','$localizacion',$vol_sond,$masa_humed,'$masa_vol',$num_recip,$masa_recip,$masa_mathum_tara,$masa_matseco_tara,$dif,$masa_matseco,'$cont_agua',$prof_sond,'$cont_agua_optima','$cont_agua_lugar',$masa_vol_seca_max,$masa_vol_seca_lugar,'$grado_compact','$folio_gc')";
                    
                    $resultado2 = mysqli_query($enlace, $query2);
                    
                    if(! $resultado2 )
                    {
                    die("No fue posible insertar los datos en cala_compactacion."  );
                    }
                    mysqli_close($enlace);
                    ?>
                    <h5><div align="center"><img src="https://img.icons8.com/material/48/000000/ok--v1.png"/>&nbsp&nbspRegistro Insertado</div></h5>
                    <a type="button" class="btn btn-outline-primary btn-block" href="formComp_tec.php">Nuevo formulario GRADO DE COMPACTACIÓN</a>
                    <a type="button" class="btn btn-outline-primary btn-block" href="formComp_existente_tec.php">NUEVA CALA de proyecto ya existente</a>
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