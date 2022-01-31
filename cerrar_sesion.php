<?php

session_start();
session_destroy();

$_POST['usuario'] = 'USUARIO NO LOGUEADO';
include("index.php");
header("location:index.php");

echo '<script language="javascript">';
echo 'MensajeCerrarSesion();';
echo '</script>';

