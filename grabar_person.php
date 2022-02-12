<?php
include("form-persona.php");
require 'conectar.php';

$nombre = $_POST['nombre'];
$fecha = $_POST['fec_nac'];
$fecha_sql = str_replace('/','-', date('Y-m-d', strtotime($fecha)));

# Recoje el estado civil seleccionado
if($_REQUEST['estado'] == 'Sol'){
    $estado = 'Soltero(a)';
} else if($_REQUEST['estado'] == 'Cas'){
    $estado = 'Casado(a)';
}else if($_REQUEST['estado'] == 'Viu'){
    $estado = 'Viudo(a)';
}else if($_REQUEST['estado'] == 'Sep'){
    $estado = 'Separado(a)';
}else if($_REQUEST['estado'] == 'Div'){
    $estado = 'Divorciado(a)';
}else if($_REQUEST['estado'] == 'Con'){
    $estado = 'Concubino(a)';}

if(strlen($_POST['domicilio'])<1){
    $domicilio = '';
} else {$domicilio = $_POST['domicilio'];}
if(strlen($_POST['celular'])<1){
    $celular = 0;
} else {$celular = $_POST['celular'];}
if(strlen($_POST['profesion'])<1){
    $profesion = '';
} else {$profesion = $_POST['profesion'];}

$auto_id = mysqli_insert_id($conexion);

$consulta_usr = "SELECT id_usr FROM usuarios WHERE usuario='$usuario'";
$resultado = mysqli_query($conexion, $consulta_usr);

$usr_id = mysqli_fetch_array($resultado);
$id_usr = $usr_id['id_usr'];

$insertar = "INSERT INTO personas VALUES ($auto_id,'$nombre','$fecha_sql','$estado','$domicilio','$celular','$profesion',$id_usr)";

$query = mysqli_query($conexion, $insertar);

if($query){
    include('index.php');
    header('Location:form-persona.php');

    echo '<script language="javascript">';
    echo 'MensajeGuardado();';
    echo '</script>';
    
}

mysqli_close($conexion);