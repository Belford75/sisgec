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
                                    <input type="text" id="input-search" class="search-input" placeholder="Búsqueda">
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
                                        <div class="card-body"><h5 class="card-title"></h5>
                                            <form class="" action="grabar_diezmo.php" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-10">
                                                        <div class="position-relative form-group">
                                                            <label class="">Nombre(s) y Apellidos</label>
                                                            <select input name="idNombreDiezmo" type="select"
                                                            id="idNombreDiezmo" 
                                                            onChange="CapuraValor()"
                                                            class="custom-select">
                                                                <?php
                                                                    require "conectar.php";
                                                                    $sql="SELECT * FROM personas";
                                                                    $resul=mysqli_query($conexion,$sql);
                                                                    
                                                                    ?>
                                                                    <option value="" disabled selected>Seleccione un nombre...</option>
                                                                    <?php
                                                                    while($mostrar=mysqli_fetch_array($resul)){
                                                                    ?>
                                                                        <option style="width: 200px;"><?php echo $mostrar['nombre'] ?></option>
                                                                    <?php
                                                                    }
                                                                ?>
                                                            </select>
                                                            <script>
                                                                function CapuraValor(nom){
                                                                    var nombD = document.getElementById("idNombreDiezmo");
                                                                    return nombD.value;
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative form-group">
                                                                <label class="">Fecha de registro</label>
                                                                <input name="fec_reg" id="IdFecReg"
                                                                placeholder="Elija o digite la fecha" type="date"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label class="">Mes corresp.</label>
                                                                <select name="corresp" type="select"
                                                                    id="Idcorresp" 
                                                                    class="custom-select">
                                                                    <option value='' disabled selected>Elija el mes...</option>
                                                                    <option value=1>ENERO</option>
                                                                    <option value=2>FEBRERO</option>
                                                                    <option value=3>MARZO</option>
                                                                    <option value=4>ABRIL</option>
                                                                    <option value=5>MAYO</option>
                                                                    <option value=6>JUNIO</option>
                                                                    <option value=7>JULIO</option>
                                                                    <option value=8>AGOSTO</option>
                                                                    <option value=9>SEPTIEMBRE</option>
                                                                    <option value=10>OCTUBRE</option>
                                                                    <option value=11>NOVIEMBRE</option>
                                                                    <option value=12>DICIEMBRE</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative form-group">
                                                                <label class="">Monto Bs.</label>
                                                                <input name="monto_diezmo" id="monto_diezmo"
                                                                placeholder="Monto Bs." type="number" step="0.1"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="mt-1 btn btn-primary">Grabar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Segunda vista de pantalla -->
                        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">DIEZMANTES REGISTRADOS EN LA DB</h5>
                                            <div class="scroll-area-md">
                                                <div class="scrollbar-container ps--active-y ps">
                                                <div class="table-responsive">
                                                    <table id="table" class="mb-0 table">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" 
                                                                aria-label="#: activate to sort column ascending">#</th>
                                                                <th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" 
                                                                aria-label="Nombre(s) y Apellidos: activate to sort column descending" style="width: 300px;" 
                                                                aria-sort="ascending">Nombre(s) y Apellidos</th>
                                                                <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" 
                                                                aria-label="Mes: activate to sort column ascending" 
                                                                style="width: 50px;">Mes</th>
                                                                <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" 
                                                                aria-label="Fecha: activate to sort column ascending" 
                                                                style="width: 100px;">Fecha</th>
                                                                <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" 
                                                                aria-label="Monto Bs.: activate to sort column ascending" 
                                                                style="width: 300px;">Monto Bs.</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                require "conectar.php";
                                                                $sql="SELECT * FROM diezmos";
                                                                $resul=mysqli_query($conexion,$sql);
                                                                
                                                                while($mostrar=mysqli_fetch_array($resul)){
                                                                ?>
                                                                <tr>
                                                                    <th colspan="1" style="width: 0px;"><?php echo $mostrar['id_diezmo'] ?></th>
                                                                    <?php
                                                                    $valor_id=$mostrar['persona_id'];
                                                                    $TraerNom="SELECT nombre FROM personas WHERE id_persona=$valor_id";
                                                                    $encontrado=mysqli_query($conexion,$TraerNom);

                                                                    $diezmador=mysqli_fetch_array($encontrado);
                                                                    ?>
                                                                    <td colspan="2" style="width: 0px;"><?php echo $diezmador['nombre'] ?></td>
                                                                    <?php
                                                                        switch ($mostrar['mes']){
                                                                            case 1:
                                                                                $mes_c='ENERO';
                                                                                break;
                                                                            case 2:
                                                                                $mes_c='FEBRERO';
                                                                                break;
                                                                            case 3:
                                                                                $mes_c='MARZO';
                                                                                break;
                                                                            case 4:
                                                                                $mes_c='ABRIL';
                                                                                break;
                                                                            case 5:
                                                                                $mes_c='MAYO';
                                                                                break;
                                                                            case 6:
                                                                                $mes_c='JUNIO';
                                                                                break;
                                                                            case 7:
                                                                                $mes_c='JULIO';
                                                                                break;
                                                                            case 8:
                                                                                $mes_c='AGOSTO';
                                                                                break;
                                                                            case 9:
                                                                                $mes_c='SEPTIEMBRE';
                                                                                break;
                                                                            case 10:
                                                                                $mes_c='OCTUBRE';
                                                                                break;
                                                                            case 11:
                                                                                $mes_c='NOMBIEMBRE';
                                                                                break;
                                                                            default:
                                                                                $mes_c='DICIEMBRE';
                                                                        }
                                                                    ?>
                                                                    <td colspan="1" style="width: 0px;"><?php echo $mes_c ?></td>
                                                                    <td colspan="1" style="width: 0px;"><?php echo $mostrar['fec_diezmo'] ?></td>
                                                                    <td colspan="1" style="width: 0px;"><?php echo $mostrar['monto_diez'] ?></td>
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