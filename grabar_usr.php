<?php
require 'conectar.php';
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$acceso = $_POST['acceso'];
$cerrar = $_POST['cerrar'];
$auto_id = mysqli_insert_id($conexion);

if(!isset($cerrar)){
    $insertar = "INSERT INTO usuarios VALUES ($auto_id,'$usuario','$contraseña','$acceso')";

    $query = mysqli_query($conexion, $insertar);
    
    if($query){
        include("index.php");
        header("location:index.php");
    
        echo '<script language="javascript">';
        echo 'MensajeGuardado();';
        echo '</script>';
    }
} else {
    $usuario = NULL;
    include("index.php");
    header("location:index.php");

    echo '<script language="javascript">';
    echo 'CerrarUsrDB();';
    echo 'IngreseNuevamente();';
    echo '</script>';
}

mysqli_close($conexion);
