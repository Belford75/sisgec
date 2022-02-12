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
                    <h1 class="subtitulo">REGISTRO DE PERSONAS</h1>
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
                        echo 'ocultarTodo();';
                        echo '</script>';
                    ?>
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item" onclick="mostrarBtn">
                            <a onclick="ocultarTodo()" role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0" >
                                <span>Registro</span>
                            </a>
                        </li>
                        <li class="nav-item" onclick="mostrarBtn">
                            <a onclick="mostrarBtn()" role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1" >
                                <span>Vista por Tabla</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a onclick="ocultarBtn()" role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                                <span>Cumpleañeros</span>
                            </a>
                        </li>
                        <li class="nav-item" id="btnBuscar">
                            <div class="search-wrapper" >
                                <div class="input-holder">
                                    <input type="text" class="search-input" placeholder="Búsqueda">
                                    <button class="search-icon"><span></span></button>
                                </div>
                                <button class="close"></button>
                            </div>
                        </li>
                        <li  class="nav-item" id="mesCumple">
                            <div class="mb-2 mr-2 dropright btn-group show">
                                <button class="btn-wide btn btn-primary">Elija el mes</button>
                                <button type="button" aria-haspopup="true" aria-expanded="true" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-primary"><span class="sr-only"></span></button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu show" x-placement="right-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(105px, 0px, 0px);">
                                    <button type="button" tabindex="0" class="dropdown-item">Enero</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Febrero</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Marzo</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Abril</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Mayo</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Junio</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Julio</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Agosto</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Septiembre</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Octubre</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Noviembre</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Diciembre</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title"></h5>
                                            <form class="" action="grabar_person.php" method="POST">
                                                <div class="position-relative form-group"><label 
                                                    class="">Nombre(s) y Apellidos</label><input name="nombre" id="IdNombre"
                                                    placeholder="Se reconoce mayúsculas y minúsculas" type="text"
                                                    class="form-control">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <div class="form-row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative form-group"><label 
                                                                class="">Fecha de Nacimiento</label><input name="fec_nac" id="IdFechaNacimiento"
                                                                placeholder="Elija o digite la fecha" type="date"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative form-group">
                                                                <label class="">Estado Civil</label>
                                                                <select name="estado" type="select"
                                                                id="IdEst_civ" 
                                                                class="custom-select">
                                                                    <option value="Sol">Soltero(a)</option>
                                                                    <option value="Cas">Casado(a)</option>
                                                                    <option value="Viu">Viudo(a)</option>
                                                                    <option value="Sep">Separado(a)</option>
                                                                    <option value="Div">Divorciado(a)</option>
                                                                    <option value="Con">Concubino(a)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative form-group"><label 
                                                                class="">Celular</label><input name="celular" id="IdCelular"
                                                                placeholder="Nro. de celular" type="number"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="position-relative form-group"><label 
                                                     class="">Dirección del domicilio</label><input name="domicilio" id="IdDomi"
                                                     placeholder="Se reconoce mayúsculas y minúsculas" type="text"
                                                     class="form-control">
                                                </div> 
                                                <div class="position-relative form-group"><label 
                                                    class="">Profesión u ocupación</label><input name="profesion" id="IdProfesion"
                                                    placeholder="Se reconoce mayúsculas y minúsculas" type="text"
                                                    class="form-control">
                                                </div>
                                                <button type="submit" class="mt-1 btn btn-primary">Grabar</button>
                                            </form>
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
                                                            <th>Nombre</th>
                                                            <th>Fec. Nac.</th>
                                                            <th>Teléfono</th>
                                                            <th>Ocupación</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            require "conectar.php";
                                                            $sql="SELECT * FROM personas";
                                                            $resul=mysqli_query($conexion,$sql);
                                                            
                                                            while($mostrar=mysqli_fetch_array($resul)){
                                                            ?>
                                                             <tr>
                                                                <th><?php echo $mostrar['id_persona'] ?></th>
                                                                <td><?php echo $mostrar['nombre'] ?></td>
                                                                <td><?php echo $mostrar['fec_nac'] ?></td>
                                                                <td><?php echo $mostrar['telefono'] ?></td>
                                                                <td><?php echo $mostrar['ocupacion'] ?></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">LISTA DE CUMPLEAÑEROS</h5>
                                            <div class="table-responsive">
                                                <table class="mb-0 table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombre</th>
                                                            <th>Fec. Nac.</th>
                                                            <th>Teléfono</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            require "conectar.php";
                                                            $sql="SELECT * FROM personas";
                                                            $resul=mysqli_query($conexion,$sql);
                                                            
                                                            while($mostrar=mysqli_fetch_array($resul)){
                                                            ?>
                                                             <tr>
                                                                <th><?php echo $mostrar['id_persona'] ?></th>
                                                                <td><?php echo $mostrar['nombre'] ?></td>
                                                                <td><?php echo $mostrar['fec_nac'] ?></td>
                                                                <td><?php echo $mostrar['telefono'] ?></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                        ?>
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
    <script type="text/javascript">
        $('#mesCumple').hide();
        $('#btnBuscar').hide();
    </script>
</body>

</html>