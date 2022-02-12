<?php
require 'conectar.php';
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();

$_SESSION['usuario'] = $usuario;

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_row($resultado);

if ($filas) {
  include("index.php");
  header("location:index.php");
  
  $tipo_usr = $filas['rol_id'];

} else {

  $usuario = NULL;
  include("index.php");
  header("location:index.php");

  session_unset();
  session_destroy();
  
  echo '<script language="javascript">';
  echo 'MensajeErrorInicio();';
  echo '</script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
