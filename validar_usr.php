<?php

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();

$_SESSION['usuario'] = $usuario;
$conexion = mysqli_connect("localhost", "root", "", "sisgec");

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

//$filas=mysqli_fetch_array($resultado);
$filas = mysqli_fetch_row($resultado);

if ($filas) {
  include("index.php");
  header("location:index.php");
} else {

  $_POST['usuario'] = 'USUARIO NO LOGUEADO';
  include("index.php");
  echo '<script language="javascript">';
  echo 'MensajeErrorInicio();';
  echo '</script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
