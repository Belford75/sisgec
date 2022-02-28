<?php
include("form-gastos.php");
require 'conectar.php';

$fecha = $_POST['fec_gas'];
$fecha_sql = str_replace('/','-', date('Y-m-d', strtotime($fecha)));

$monto = $_POST['monto_gas'];

if(strlen($_POST['rec_gas'])<1){
    $recibo = 0;
} else {$recibo = $_POST['rec_gas'];}

$descrip = $_POST['descrip_gas'];

$auto_id = mysqli_insert_id($conexion);

$consulta_usr = "SELECT id_usr FROM usuarios WHERE usuario='$usuario'";
$resultado = mysqli_query($conexion, $consulta_usr);

$usr_id = mysqli_fetch_array($resultado);
$id_usr = $usr_id['id_usr'];

$insertar = "INSERT INTO gastos VALUES ($auto_id,'$fecha_sql','$descrip',$recibo,$monto,$id_usr)";

$query = mysqli_query($conexion, $insertar);

if($query){
    include('index.php');
    header("Location: form-ingresos.php");

    echo '<script language="javascript">';
    echo 'MensajeGuardado();';
    echo '</script>';
}

mysqli_close($conexion);