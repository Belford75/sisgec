<?php

//$conexion = mysqli_connect("localhost", "root", "", "sisgec");

$server = "localhost";
$user = "root";
$pass = "";
$db = "sisgec";

$conexion = new mysqli($server,$user,$pass,$db);

if($conexion->connect_errno){
   die("ERROR EN LA CONEXION" . $conexion->connect_errno);
}
