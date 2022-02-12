<?php
include("form-asistencia.php");
require 'conectar.php';

$fecha = $_POST['fecha'];
$fecha_sql = str_replace('/','-', date('Y-m-d', strtotime($fecha)));
if(strlen($_POST['c_adultos'])<1){
    $c_adultos = 0;
} else {$c_adultos = $_POST['c_adultos'];}
if(strlen($_POST['cv_adultos'])<1){
    $cv_adultos = 0;
} else {$cv_adultos = $_POST['cv_adultos'];}
if(strlen($_POST['c_jovenes'])<1){
    $c_jovenes = 0;
} else {$c_jovenes = $_POST['c_jovenes'];}
if(strlen($_POST['cv_jovenes'])<1){
    $cv_jovenes = 0;
} else {$cv_jovenes = $_POST['cv_jovenes'];}
if(strlen($_POST['c_niños'])<1){
    $c_niños = 0;
} else {$c_niños = $_POST['c_niños'];}
if(strlen($_POST['cv_niños'])<1){
    $cv_niños = 0;
} else {$cv_niños = $_POST['cv_niños'];}


$auto_id = mysqli_insert_id($conexion);

$consulta_usr = "SELECT id_usr FROM usuarios WHERE usuario='$usuario'";
$resultado = mysqli_query($conexion, $consulta_usr);

$usr_id = mysqli_fetch_array($resultado);
$id_usr = $usr_id['id_usr'];

$insertar = "INSERT INTO asistencia VALUES ($auto_id,'$fecha_sql',$c_adultos,$cv_adultos,$c_jovenes,$cv_jovenes,$c_niños,$cv_niños,$id_usr)";

$query = mysqli_query($conexion, $insertar);

if($query){
    include('index.php');
    header("Location: form-asistencia.php");

    echo '<script language="javascript">';
    echo 'MensajeGuardado();';
    echo '</script>';
}

mysqli_close($conexion);