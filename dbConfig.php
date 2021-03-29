<?php
$servername = "localhost";
$username = "root";
$password = "2133010323Gl?";
$dbname = "mydb";
$enlace = mysqli_connect($servername,$username,$password,$dbname);//Conexion a BD
if(!$enlace){
    die("Conexion fallida: " . mysql_error())."\n";
}
?>