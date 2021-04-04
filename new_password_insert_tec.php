
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
                        <li class="nav-item"><a href="formRev_tec.php" class="nav-link link-scroll">Revenimiento </a></li>
                        <li class="nav-item"><a href="formRes_tec.php" class="nav-link link-scroll">Resistencia de Concreto</a></li>
                        <li class="nav-item"><a href="formComp_tec.php" class="nav-link link-scroll">Grado de Compactación</a></li>
                        <li class="nav-item" style="background-color: black"><a href="login.html" class="btn btn-outline-white nav-link " style="color: #fff">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- PHP tecnico -->
    <?php
    include("dbConfig.php");
    
        $to = $_REQUEST["correo"];
        $from = "acpilomex@gmail.com";
        $password = $_REQUEST["contrasenia"];
    
        $headers = "From: $from";
        $headers = "From: " . $from . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
        $subject = "PILOMEX correo y contraseña";
    
        $logo = 'https://www.pilomex.com/img/Pilomex.png';
        $link = 'https://www.pilomex.com';
        $style = 'width:108px;height:108px;';
    
        $body = "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Contraseña Nueva PILOMEX</title></head><body>";
        $body .= "<table style='width: 100%;'>";
        $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
        $body .= "<a href='{$link}'><img src='{$logo}' style='{$style}' alt='PILOMEX'></a><br><br>";
        $body .= "</td></tr></thead><tbody><tr>";
        $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
        $body .= "<td style='border:none;'><strong>Contraseña: {$password} </strong></td>";
        $body .= "</tr>";
        $body .= "<tr><td style='border:none;'><strong>Si deseas cambiar su contraseña inicia sesión y al final de la pagina encontraras un link con el nombre CAMBIAR CONTRASEÑA </strong></td></tr>";
        $body .= "</tbody></table>";
        $body .= "</body></html>";
    
        //$send = mail($to, $subject, $body, $headers);

        $correo = $_POST ['correo'];
        $query= "UPDATE EMPLEADOS SET contrasenia = '$password' WHERE correo = '$correo'";
        $resultado = mysqli_query($enlace, $query);
        
        if(! $resultado )
        {
        die("No fue posible actualizar la información."  );
        }
        mysqli_close($enlace);
    
    ?>    
    <!-- Tecnico (formulario para cambio de contraseña) -->
    <section id="tecnico" style="background-color: #fff;" class="text-page pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="heading">Nueva contraseña</h1>
                    <form id="contact-form" action="home_tecnico.php" method="post" class="contact-form">
                        <div class="controls" align="center">
                            <p>Se ha enviado un e-mail a su correo </p>
                            <p>con su nueva contraseña</p>
                            <div class="text-center">
                                <input type="submit" value="Inicio" class="btn btn-outline-primary btn-block">
                            </div>
                        </div>
                    </form>



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
