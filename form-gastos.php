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
    <script src="./assets/scripts/jquery.js"></script>
    <script src="./assets/scripts/jquery.dataTables.min.js"></script>
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
                    <h1 class="subtitulo">REGISTRO DE GASTOS</h1>
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
                                            <i onclick="ocultarTodo()" class="metismenu-icon pe-7s-id"></i>
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
                    <?php
                        require 'mensajes.html';
                        echo '<script language="javascript">';
                        echo 'ocultarBtnFind();';
                        echo '</script>';
                    ?>
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item" onclick="ocultarBtnFind">
                            <a onclick="ocultarBtnFind()" role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0" >
                                <span>Registro</span>
                            </a>
                        </li>
                        <li class="nav-item" onclick="mostrarBtnFind">
                            <a onclick="mostrarBtnFind()" role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1" >
                                <span>Vista por Tabla</span>
                            </a>
                        </li>
                        <li class="nav-item" id="btnBuscar">
                            <div class="search-wrapper" >
                                <div class="input-holder">
                                    <input type="date" id="input-search" class="search-input" placeholder="Búsqueda">
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
                                        <form class="" action="grabar_gastos.php" method="POST">
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <div class="position-relative form-group">
                                                    <div class="form-row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative form-group"><label 
                                                                class="">Fecha de gasto</label><input name="fec_gas" id="IdFechaGasto"
                                                                placeholder="Elija o digite la fecha" type="date"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative form-group"><label 
                                                                class="">Monto Bs.</label><input name="monto_gas" id="IdMonto_gas"
                                                                placeholder="Monto Bs." type="number" step="0.1"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative form-group"><label 
                                                                class=""># Rec/Fact.</label><input name="rec_gas" id="IdRec_gas"
                                                                placeholder="Nro. Rec/Fac" type="number"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="position-relative form-group"><label 
                                                                class="">Descripción</label><input name="descrip_gas" id="IdDescripGas"
                                                                placeholder="Descripción del gasto" type="text" 
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="mt-1 btn btn-primary">Grabar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Segunda pantalla -->
                        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">REGISTRO DE GASTOS EN LA DB</h5>
                                            <div class="scroll-area-md">
                                                <div class="scrollbar-container ps--active-y ps">
                                                <div class="table-responsive">
                                                    <table id="table" class="mb-0 table">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" 
                                                                aria-label="#: activate to sort column ascending">#</th>
                                                                <th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" 
                                                                aria-label="Fecha: activate to sort column descending" style="width: 200px;" 
                                                                aria-sort="ascending">Fecha</th>
                                                                <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" 
                                                                aria-label="#Rec/Fac: activate to sort column ascending" 
                                                                style="width: 0px;">#Rec/Fac</th>
                                                                <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" 
                                                                aria-label="Descripción: activate to sort column ascending" 
                                                                style="width: 300px;">Descripción</th>
                                                                <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" 
                                                                aria-label="Monto Bs.: activate to sort column ascending" 
                                                                style="width: 300px;">Monto Bs.</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                require "conectar.php";
                                                                $sql="SELECT * FROM gastos";
                                                                $resul=mysqli_query($conexion,$sql);
                                                                
                                                                while($mostrar=mysqli_fetch_array($resul)){
                                                                ?>
                                                                <tr>
                                                                    <th colspan="1" style="width: 0px;"><?php echo $mostrar['id_gasto'] ?></th>
                                                                    <td colspan="1" style="width: 0px;"><?php echo $mostrar['fec_gas'] ?></td>
                                                                    <td colspan="1" style="text-align: right;"><?php echo $mostrar['rec_gas'] ?></td>
                                                                    <td colspan="5" style="width: 0px;"><?php echo $mostrar['descrip_gas'] ?></td>
                                                                    <td colspan="1" style="text-align: right;"><?php echo $mostrar['monto_gas'] ?></td>
                                                                </tr>
                                                                <?php
                                                                }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 300px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 112px;"></div></div></div>
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
    <script src="./assets/scripts/search.js"></script>
    <script src="./assets/scripts/main.js"></script>
    <script type="text/javascript">
        $('#btnBuscar').hide();
    </script>
</body>

</html>