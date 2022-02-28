<?php
include("form-ingresos.php");
require 'conectar.php';

$fecha = $_POST['fec_ing'];
$fecha_sql = str_replace('/','-', date('Y-m-d', strtotime($fecha)));

if(strlen($_POST['concepto_ing'])<1){
    $concepto = 'SIN SELECCION';
} else {$concepto = $_POST['concepto_ing'];}

$monto = $_POST['monto_ing'];

if(strlen($_POST['rec_fac'])<1){
    $recibo = 0;
} else {$recibo = $_POST['rec_fac'];}

$descrip = $_POST['descrip'];

$auto_id = mysqli_insert_id($conexion);

$consulta_usr = "SELECT id_usr FROM usuarios WHERE usuario='$usuario'";
$resultado = mysqli_query($conexion, $consulta_usr);

$usr_id = mysqli_fetch_array($resultado);
$id_usr = $usr_id['id_usr'];

$insertar = "INSERT INTO ingresos VALUES ($auto_id,'$fecha_sql',$recibo,'$concepto','$descrip',$monto,$id_usr)";

$query = mysqli_query($conexion, $insertar);

if($query){
    include('index.php');
    header("Location: form-ingresos.php");

    echo '<script language="javascript">';
    echo 'MensajeGuardado();';
    echo '</script>';
}

mysqli_close($conexion);