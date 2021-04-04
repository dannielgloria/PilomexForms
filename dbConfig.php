<?php
$servername = "localhost";
$username = "root";
$password = "Blink.1822";
$dbname = "mydb";
$enlace = mysqli_connect($servername,$username,$password,$dbname);//Conexion a BD
if(!$enlace){
    die("Conexion fallida: " . mysql_error())."\n";
}
?>