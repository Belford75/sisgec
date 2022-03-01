<?php
    require 'mensajes.html';
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TechnoChurch - Sistema informático</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="./main.css" rel="stylesheet">
    <link rel="icon" href="assets/images/logoB-Tch.ico">

    <script src="assets/sweetalert/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/sweetalert/sweetalert2.min.css">
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
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                            <img width="40" class="rounded-circle" src="assets/images/avatars/login.jpg" alt="">
                                <div class='widget-content-left'>
                                    <div class="widget-content-left  ml-3 header-user-info">
                                        <div class="widget-heading">
                                        <?php
                                           if(isset($usuario)){
                                                echo $usuario;
                                            } else if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
                                                echo $usuario;
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
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow bg-midnight-bloom sidebar-text-light">
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
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <?php if(isset($usuario)): ?>
                         <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">CONFIGURACIÓN</li> 
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-display1"></i>
                                    Sistema
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li class='nav-item'>
                                        <a href='javascript:UserDB();' class='nav-link'>
                                            <i class='nav-link-icon fa fa-address-card'> </i>
                                            Accesos y Usuarios
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">FORMULARIOS</li> 
                            <li>
                                <a href="#">
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
                                <a href="#">
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
                        </ul>
                        <?php endif; ?>
                        <div class="app-header-left">
                            <li class="dropdown nav-item">
                                <a href="javascript:AbrirUsr();" class="nav-link">
                                    <i class="nav-link-icon pe-7s-users"></i>
                                    Iniciar Sesión
                                </a>
                            </li>
                        </div>
                        <li class="app-sidebar__heading">
                            <a href="cerrar_sesion.php" >
                                CERRAR SESIÓN
                            </a>
                        </li>
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
                    <div class="ventana_usr header-shadow bg-night-sky header-text-light" id="ventana_usuario"
                         style="position: absolute;">LOGIN
                        <form class="form_usr" action="validar_usr.php" method="post"><br/>
                            <div class="position-relative form-group"><label 
                                    class="" style="width: 200px;">Usuario</label><input name="usuario" id="idUsr"
                                    placeholder="Nombre de usuario" type="text"
                                    class="form-control"></div>
                            <div class="position-relative form-group"><label for="examplePassword"
                                    class="" style="width: 200px;">Contraseña</label><input name="contraseña"
                                    id="idPass" placeholder="Contraseña"
                                    type="password" class="form-control"></div>
                            <button class="mt-1 btn btn-primary">Autenticar</button>
                        </form>
                    </div>
                    <div class="ventana_usr header-shadow bg-night-sky header-text-light" id="UserDB">ACCESOS Y USUARIOS
                        <form class="form_usr" action="grabar_usr.php" method="post"><br/>
                            <div class="position-relative form-group"><label 
                                    class="">Usuario</label><input name="usuario" id="nombreUSr" 
                                    placeholder="Nombre de usuario del Sistema" type="text" 
                                    class="form-control"></div>
                            <div class="position-relative form-group"><label 
                                    class="">Contraseña</label><input name="contraseña" id="passw" 
                                    placeholder="Contraseña" type="password" 
                                    class="form-control"></div>
                            <div class="position-relative form-group"><label 
                                    class="">Acceso </label><br/><select name="acceso" id="nivaccess">
                                    <option value="1"> Administrador</option>
                                    <option value="2">Editor</option></select>
                            <br/><br/><button type="submit" class="mt-1 btn btn-primary">Grabar</button>  
                            <a href="javascrip:CerrarUsrDB()"><button name="cerrar" class="mt-1 btn btn-primary">Cancelar</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>