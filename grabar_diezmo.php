<?php

$nombre = $_REQUEST['idNombreDiezmo'];

#echo 'Seleccionó: '.$nombre;

$fecha = $_POST['fec_reg'];
$fecha_sql = str_replace('/','-', date('Y-m-d', strtotime($fecha)));

#echo ' La fecha es: '.$fecha_sql;

if(strlen($_POST['corresp'])<1){
    $mes = 0;
} else {$mes = $_POST['corresp'];}

#echo ' El mes es: '.$mes;

$monto = $_POST['monto_diezmo'];

#echo ' El monto es: '.$monto;

include("form-diezmos.php");
require 'conectar.php';

$auto_id = mysqli_insert_id($conexion);

$buscarP = "SELECT id_persona FROM personas WHERE nombre='$nombre'";
$encontrado = mysqli_query($conexion, $buscarP);
$id =mysqli_fetch_array($encontrado);
$idPersona = $id['id_persona'];


$consulta_usr = "SELECT id_usr FROM usuarios WHERE usuario='$usuario'";
$resultado = mysqli_query($conexion, $consulta_usr);

$usr_id = mysqli_fetch_array($resultado);
$id_usr = $usr_id['id_usr'];

$insertar = "INSERT INTO diezmos VALUES ($auto_id,$idPersona,'$fecha_sql',$mes,$monto,$id_usr)";

$query = mysqli_query($conexion, $insertar);

if($query){
    include('index.php');
    header("Location: form-diezmos.php");

    echo '<script language="javascript">';
    echo 'MensajeGuardado();';
    echo '</script>';
}

mysqli_close($conexion); 