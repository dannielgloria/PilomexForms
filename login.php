<?php
include("dbConfig.php");

$correo = $_POST ['correo'];
$contrasenia = $_POST ['contrasenia'];

$query= "SELECT cargo FROM EMPLEADOS WHERE correo= '$correo' AND contrasenia= '$contrasenia'";
$resultado = mysqli_query($enlace, $query);
$renglon = mysqli_fetch_array($resultado, MYSQLI_NUM);
$cargo = $renglon[0];

if (!$cargo){
    header("Location: login_fail.html");
}
else{
    if ($cargo == 'admin'){
        header("Location: home.php");
    }
    else if ($cargo == 'tecnico'){
        header("Location: home_tecnico.php");
    }
}

?>
