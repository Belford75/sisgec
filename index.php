<?php

 if($_POST){
    echo $_POST['usuario'];
 }

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TechnoChurch - Sistema informático</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="./main.css" rel="stylesheet">
    <link rel="icon" href="assets/images/logoB-Tch.ico">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow bg-night-sky header-text-light">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
                
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:urlDB();" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Url de la DB
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:ElegirDB();" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Conectar con la DB
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:abrirUsr();" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Cambio de Usuario
                            </a>
                        </li>
                    </ul>        
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php 
                                            if($_POST){
                                                echo $_POST['usuario']; 
                                            } else {
                                                echo ('USUARIO NO LOGUEADO');
                                                
                                            }
                                        ?>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow bg-midnight-bloom sidebar-text-light">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">FORMULARIOS</li> <!-- Inicio de los menús (lateral)-->
                            <li>
                                <a href="#"> <!--Menú de personas-->
                                    <i class="metismenu-icon pe-7s-note2"></i>
                                    Administrativos
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="form-persona.html">
                                            <i class="metismenu-icon pe-7s-id"></i>
                                            Registro de Personas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form-asistencia.html">
                                            <i class="metismenu-icon">
                                            </i>Registro de Asistencia
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"> <!--Menú de finanzas-->
                                    <i class="metismenu-icon pe-7s-cash"></i>
                                    Finanzas
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="form-diezmos.html">
                                            <i class="metismenu-icon pe-7s-wallet">
                                            </i>Registro de Diezmos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form-ingresos.html">
                                            <i class="metismenu-icon pe-7s-piggy">
                                            </i>Registro de Ingresos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form-gastos.html">
                                            <i class="metismenu-icon pe-7s-credit">
                                            </i>Registro de Gastos
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.html">
                                    <i class="metismenu-icon pe-7s-scissors"></i>
                                    Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner_principal">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                   <img src="assets/images/logo-Tch.png">  
                                </div>
                                <div>TechnoChurch
                                    <div class="page-title-subheading">Tecnología al servicio de la Iglesia.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ventana_usr header-shadow bg-night-sky header-text-light" id="direcDB">URL DE LA BASE DE DATOS
                        <form class="form_usr"><br/>
                            <div class="position-relative form-group"><label 
                                    class="">Nombre</label><input name="nameDB" id="nombreDB"
                                    placeholder="Nombre de la base de datos" type="text"
                                    class="form-control"></div>
                            <div class="position-relative form-group"><label 
                                    class="">Dirección</label><input name="dirUrl"
                                    id="direccionURl" placeholder="Dirección de la URL"
                                    type="url" class="form-control"></div>
                            <button class="mt-1 btn btn-primary">Crear</button>
                        </form>
                    </div>
                    <div class="ventana_usr header-shadow bg-night-sky header-text-light" id="ElegirDB">SELECCIONAR LA BASE DE DATOS
                        <form class="form_usr"><br/>
                            <div>
                                <ul class="list-group">
                                    <button class="list-group-item-action list-group-item">CENTRAL</button>
                                    <button class="list-group-item-action list-group-item">CAMIRI</button>
                                    <button class="list-group-item-action list-group-item">VILLA WARNES</button>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="ventana_usr header-shadow bg-night-sky header-text-light" id="ventana_usuario">AUTENTIFICACION DE USUARIO
                        <form class="form_usr" action="validar_usr.php" method="post"><br/>
                            <div class="position-relative form-group"><label 
                                    class="">Usuario</label><input name="usuario" id="idUsr"
                                    placeholder="Nombre de usuario" type="text"
                                    class="form-control"></div>
                            <div class="position-relative form-group"><label for="examplePassword"
                                    class="">Contraseña</label><input name="contraseña"
                                    id="idPass" placeholder="Contraseña"
                                    type="password" class="form-control"></div>
                            <button class="mt-1 btn btn-primary">Autenticar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script>
        function urlDB(){
            document.getElementById("direcDB").style.display="block";
        }
    </script>
    <script>
        function ElegirDB(){
            document.getElementById("ElegirDB").style.display="block";
        }
    </script>
    <script>
        function abrirUsr(){
            document.getElementById("ventana_usuario").style.display="block";
        }
    </script>
</body>

</html>