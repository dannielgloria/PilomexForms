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
    table {
        width: 100%;
    }
    th {
        color: white;
        background-color: black;
        border: 1px solid white;
    }
    table, td {
        border: 1px solid black;
    }
    .tb-2 {
        width: 50%;
    }
    .tb-4 {
        width: 25%;
    }
    .tb-6 {
        width: 16.6%;
    }
    .tb-3 {
        width: 75%;
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
                        <li class="nav-item"><a href="form1.php" class="nav-link link-scroll">Revenimiento </a></li>
                        <li class="nav-item"><a href="form2.php" class="nav-link link-scroll">R. Concreto</a></li>
                        <li class="nav-item"><a href="form3.php" class="nav-link link-scroll">G. Compactación</a></li>
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
                        <h1 align="center">GRADO DE COMPACTACIÓN</h1>
                        <p align="center">_________</p>
                        <br>
                        <h5 align="center"> DETERMINACIÓN DE GRADO DE COMPACTACIÓN EN SITIO<br>MÉTODO DE PROBETA CAPITULO 15.7.7<br>NMX-C-416-ONNCCE-2003</h5>
                        <!-- Conexión DB (SELECT de GRADO DE COMPACTACIÓN) -->
                        <?php
                            include("dbConfig.php");
                            $folio_gc = $_POST['folio_gc'];
                            $query="SELECT * FROM BASE_GRADOCOMPAC WHERE folio_gc= '$folio_gc'";
                            $res=mysqli_query($enlace,$query);
                            $row=mysqli_fetch_array($res,MYSQLI_BOTH);
                        ?>
                        <table align="center">
                            <tbody>
                                <tr>
                                    <th class="tb-4" colspan="2">CONSTRUCTORA O PROPIETARIO: </th>
                                    <?php
                                        echo "<td class=\"tb-4\">".$row[1]."</td>";
                                        echo "<th class=\"tb-4\" colspan=\"2\">FECHA: </th>";
                                        echo "<td class=\"tb-4\">".$row[7]."</td>";
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-4" colspan="2">UBICACIÓN DE OBRA:</th>
                                    <?php
                                        echo "<td class=\"tb-4\">".$row[2]."</td>";
                                        echo "<th class=\"tb-4\" colspan=\"2\">PARA EMPLEARSE EN:</th>";
                                        echo "<td class=\"tb-4\">".$row[8]."</td>";
                                    ?>
                                </tr>
                                <tr> 
                                    <?php
                                        echo "<th class=\"tb-6\"> CALA No.:</th>";
                                        echo "<td class=\"tb-6\">".$row[3]."</td>";
                                        echo "<th class=\"tb-6\"> DE:</th>";
                                        echo "<td class=\"tb-6\">".$row[4]."</td>";
                                        echo "<th class=\"tb-6\"> NIVEL:</th>";
                                        echo "<td class=\"tb-6\">".$row[5]."</td>";
                                    ?>
                                </tr>
                                <tr> 
                                    <?php
                                        echo "<th colspan=\"2\"> COMPACTACIÓN REQUERIDA:</th>";
                                        echo "<td colspan=\"4\">".$row[6]."</td>";
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                        <?php
                            $query2 = "SELECT * FROM CALA_COMPACTACION WHERE folio_gc= '$folio_gc'";
                            $resultado1 = mysqli_query ($enlace, $query2 );
                            //$renglon=mysqli_fetch_array($resultado1,MYSQLI_NUM);
                            
                            //numero de columnas de la tabla
                            $num_fields = mysqli_num_fields($resultado1); 
                            $i=0;
                            $j=0;
                            $object = array();
                            while($renglon = mysqli_fetch_array($resultado1)){
                                for($i=0;$i<$num_fields;$i++){
                                    $name = mysqli_fetch_field_direct($resultado1, $i)->name;
                                    $object[$j][$i]=$renglon[$name];
                                }
                                $j++;
                            }
                            //numero total de datos en la tabla
                            $row_num = $resultado1->num_rows;
            
                            $num_cociente =$row_num / 4;
                            $cociente=floor($num_cociente);

                            $residuo=$row_num % 4;
                            $datos = array();
                            for($i = 0; $i<$cociente; $i++){
                                $datos[$i] = 4;
                            }

                            if($residuo!=0){
                                $datos[$cociente]=$residuo;
                            }
                            $array_length = count($datos);
                                                       
                        ?>
                        <?php 
                            $aux=0;
                            $total=0;
                            for($i=0;$i<$array_length;$i++){
                                $total=$total+$datos[$i];

                        ?> 
                        <br>
                        <p align="center">_________________________________________________________</p>
                        <h6 align="center"><strong>DETERMINACIÓN DE LA MASA VOLUMETRICA HUMEDA DEL MATERIAL</strong></h6>
                        
                        <table>
                            <tbody>
                                  
                                <tr>
                                    <th class="tb-2">FECHA</th>

                                    <?php 
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][1]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">1.- NÚMERO DE CALA</th>
                                    <?php 
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][0]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">2.- LOCALIZACIÓN</th>
                                    <?php 
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][2]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">3.- VOLÚMEN DE SONDEO (cm<sup>3</sup>)</th>
                                    <?php 
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][3]."</td>";
                                        }
                                    ?> 
                                </tr>
                                <tr>
                                    <th class="tb-2">4.- MASA HUMEDA DE MATERIAL (g)</th>
                                    <?php 
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][4]."</td>";
                                        }
                                    ?>    
                                </tr>
                                <tr>
                                    <th class="tb-2">5.- MASA VOLUMETRICA HUMEDA DEL MATERIAL (kg/m³)</th>
                                    <?php 
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][5]."</td>";
                                        }
                                    ?>
                                    
                                </tr>
                                
                            </tbody>
                        </table>
                        <br>
                        <h6 align="center"><strong>DETERMINACIÓN DEL CONTENIDO DE AGUA</strong></h6>
                        <table>
                            <tbody>
                                <tr>
                                    <th class="tb-2">6.- NÚMERO DE RECIPIENTE</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][6]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">7.- MASA DEL RECIPIENTE (TARA) (g)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][7]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">8.- MASA MAT. HUMEDO + TARA (g)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][8]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">9.- MASA MAT. SECO + TARA (g)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][9]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">10.- DIFERENCIA (AGUA)  (5) – (9)  (g)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][10]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">11.- MASA MAT. SECO (5) – (7)  (g)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][11]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">12.- CONTENIDO DE AGUA EN DECIMALES (10)/(11)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][12]."</td>";
                                        }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <h6 align="center"><strong>DETERMINACIÓN DE LA MASA VOLUMETRICA SECA Y GRADO DE COMPACTACIÓN</strong></h6>
                        <table>
                            <tbody>
                                <tr>
                                    <th class="tb-2">13.- PROFUNDIDAD DEL SONDEO (cm)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][13]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">14.- CONTENIDO DE AGUA OPTIMA DEL MATERIAL (%)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][14]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">15.- CONTENIDO DE AGUA DEL LUGAR (12) x 100 (g)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][15]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">16.- MASA VOLUMETRICA SECA MÁXIMA (kg/m³)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][16]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">17.- MASA VOLUMÉTRICA SECA DEL LUGAR (kg/m³)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][17]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="tb-2">18.- GRADO DE COMPACTACIÓN (16) / (17) X 100 (N)</th>
                                    <?php
                                        for($j=$aux;$j<$total;$j++){
                                            echo "<td>".$object[$j][18]."</td>";
                                        }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                        <?php 
                                $aux=$aux+$datos[$i];
                               
                            }
                        ?>
                        <br>
                        <div class="text-center">
                            <input type="button" onclick="submitForm('form3_editarcala_admin.php')" value="Editar" class="btn btn-outline-primary btn-block">
                        </div>
                        <br>
                        <div class="text-center">
                            <input type="button" onclick="submitForm('form3_admin_descargable.php')" value="Descargar" class="btn btn-outline-primary btn-block">
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

</body>

</html>