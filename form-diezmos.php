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
            </div>    
            <div class="app-header__content">
                <div>
                    <h1 class="subtitulo">REGISTRO DE DIEZMOS</h1>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <img width="40" class="rounded-circle" src="assets/images/avatars/login.jpg" alt="">
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php
                                            if(isset($usuario)){
                                                echo $usuario;
                                            } else {
                                                session_start();
                                                $usuario=$_SESSION['usuario'];
                                                echo $usuario;
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
                                        <a href="form-asistencia.php">
                                        <?php $_SESSION['usuario']=$usuario;?>
                                            <i class="metismenu-icon">
                                            </i>Registro de Asistencia
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form-persona.php">
                                        <?php $_SESSION['usuario']=$usuario;?>
                                            <i class="metismenu-icon pe-7s-id"></i>
                                            Registro de Personas
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
                                        <a href="form-diezmos.php">
                                        <?php $_SESSION['usuario']=$usuario;?>
                                            <i class="metismenu-icon pe-7s-wallet">
                                            </i>Registro de Diezmos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form-ingresos.php">   
                                        <?php $_SESSION['usuario']=$usuario;?>
                                            <i class="metismenu-icon pe-7s-piggy">
                                            </i>Registro de Ingresos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form-gastos.php">  
                                        <?php $_SESSION['usuario']=$usuario;?>
                                            <i class="metismenu-icon pe-7s-credit">
                                            </i>Registro de Gastos
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    Menú Principal
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
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
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Registro</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Vista por Tabla</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="search-wrapper">
                                <div class="input-holder">
                                    <input type="text" class="search-input" placeholder="Búsqueda">
                                    <button class="search-icon"><span></span></button>
                                </div>
                                <button class="close"></button>
                            </div>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <form class="">
                                                <div class="position-relative form-group"><label 
                                                    class="">Nombre(s) y Apellidos</label><input name="nombre" id="IdNombreDiezmo"
                                                    placeholder="Se reconoce mayúsculas y minúsculas" type="text"
                                                    class="form-control"></div>
                                            </form>   
                                            <form class="form-row">
                                                <div class="position-relative form-group"><label 
                                                    class="">Fecha de registro</label><input name="fec_reg" id="IdFechaDiezmo"
                                                    placeholder="Elija o digite la fecha" type="date"
                                                    class="form-control"></div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label
                                                        class="">Mes corresp.</label><select type="select"
                                                           id="IdMes" name="mes"
                                                           class="custom-select">
                                                           <option>Enero</option>
                                                           <option>Febrero</option>
                                                           <option>Marzo</option>
                                                           <option>Abril</option>
                                                           <option>Mayo</option>
                                                           <option>Junio</option>
                                                           <option>Julio</option>
                                                           <option>Agosto</option>
                                                           <option>Septiembre</option>
                                                           <option>Octubre</option>
                                                           <option>Noviembre</option>
                                                           <option>Diciembre</option>
                                                       </select></div>
                                                </div>
                                                <div class="position-relative form-group"><label 
                                                    class="">Monto Bs.</label><input name="monto_diezmo" id="IdMonto_diezmo"
                                                    placeholder="Monto Bs." type="number"
                                                    class="form-control"></div>
                                            </form>
                                            <button class="mt-1 btn btn-primary">Grabar</button>
                                            <button class="mt-1 btn btn-primary">Corregir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">PERSONAS REGISTRADAS EN LA DB</h5>
                                            <div class="table-responsive">
                                                <table class="mb-0 table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombres y apellidos</th>
                                                            <th>Mes</th>
                                                            <th>Fecha</th>
                                                            <th>Monto Bs.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>