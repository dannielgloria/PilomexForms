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
<style>
    th {
    color: white;
    background-color: black;
}
</style>    
<body>
    <!-- intro end-->
    <!-- navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="home.php" class="navbar-brand link-scroll"><img src="img/logo.png" alt="" class="img-fluid"></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="formRev.php" class="nav-link link-scroll">Revenimiento </a></li>
                        <li class="nav-item"><a href="formRes.php" class="nav-link link-scroll">R. Concreto</a></li>
                        <li class="nav-item"><a href="formComp.php" class="nav-link link-scroll">G. Compactación</a></li>
                        <li class="nav-item"><a href="login.html" class="btn btn-outline-white nav-link ">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Consulta para Formulario 3 (Grado de Compactación) -->
    <section id="revendimiento" style="background-color: #fff;" class="text-page pb-4">
        <form id="contact-form" method="post" class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="heading">BÚSQUEDA GRADO DE COMPACTACIÓN</h1>
                        <br>
                        <div class="form-group">
                            <label for="folio_gc">Folio de Compactación (Cliente + Ubicación)</label>
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
                        <br>
                        <div class="text-center">
                            <input type="button" onclick="submitForm('formComp_editarproyecto_admin.php')" value="Buscar Proyecto" class="btn btn-outline-primary btn-block">
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
    <script type="text/javascript">
        function submitForm(action) {
            var form = document.getElementById('contact-form');
            form.action = action;
            form.submit();
        }
    </script>

</body>

</html>