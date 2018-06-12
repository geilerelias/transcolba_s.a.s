<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link href="../assets/img/favicon-32x32.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Consultar Maquinaria</title>
        
        
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="../assets/plugin/css/bootstrap-material-design.css">
        <!--data tables .net -->
        <link rel="stylesheet" href="../assets/plugin/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../assets/plugin/css/select.bootstrap4.min.css">
        
        <!-- iconos -->
        <link rel="stylesheet" type="text/css" href="../assets/plugin/iconfont/material-icons.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" type="text/css" href="../assets/plugin/css/sweetalert2.css">
        
        <!--estilos propios---->
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <!-- Custom styles for this template -->
        <link href="../assets/css/full-slider.css" rel="stylesheet">
    </head>
    <body>
        <!-- Navigation -->
        <div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay">
            <header class="bmd-layout-header fixed-top" id="header">
                
                <!---------NAVBAR----------------------------->
                <div class="navbar navbar-light bg-faded shadow row" id="navbar" data-spy="affix" data-offset-top="197" style="background-color: #0074c0;">
                    <div class="col-2">
                        <button class="navbar-toggler  text-white btn bmd-btn-icon btn-raised" type="button" data-toggle="drawer" data-target="#dw-s2" aria-expanded="false">
                        <span class="sr-only">Toggle drawer</span>
                        <i class="material-icons">menu</i>
                        </button>
                    </div>
                    
                    
                    <div class="d-none d-sm-block row justify-content-center ">
                        <ul class="nav col-12">
                            <li class="nav-item " >
                                <a class="nav-link text-white text-capitalize nav-active-transcolba" href="#">Inicio</a>
                            </li>
                            <li class="nav-item " >
                                <a class="nav-link text-white text-capitalize" href="maquinaria-opciones.html">Maquinaria</a>
                            </li>
                            
                            <li class="nav-item text-white">
                                <a class="nav-link text-white text-capitalize" href="componentes-opciones.html">Componentes</a>
                            </li>
                            <li class="nav-item text-white">
                                <a class="nav-link text-white text-capitalize" href="insidencias-registrar.html">Insidencias</a>
                            </li>
                            <li class="nav-item text-white">
                                <a class="nav-link text-white text-capitalize" href="index.html">Salir</a>
                            </li>
                        </ul>
                    </div>
                    
                    <form class="form-inline float-right pr-2">
                        <button type="button" class="btn bmd-btn-icon btn-raised text-white mr-2">
                        <i  class="material-icons ">notifications</i>
                        </button>
                        <img src="../assets/img/logo-sm-transcolba.png" class="img-fluid" width="50">
                    </form>
                </div>
            </header>
            <div id="dw-s2" class="bmd-layout-drawer bg-faded " style="position: fixed;" aria-expanded="false" aria-hidden="true">
                <header class="img-menu img-fluid" style="background-image: url(../assets/img/bg-menu.jpg);" >
                    <img id="imagen-usuario" name="imagen-usuario" data-src="holder.js/75x75" class="rounded-circle " alt="75x75" src="" data-holder-rendered="true" style="width: 75px; height: 75px;"  >
                    <a class="navbar-brand title-1 text-white text-capitalize "> <small>Nombre de usuario</small> </a>
                </header>
                <ul class="nav flex-column flex-nowrap pt-3">
                <li class="nav-item">
                    <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center collapse" href="#" data-toggle="collapse" data-target="#menu-maquinaria">
                        <div class="row">
                            <div class="col-1">
                                <i class="material-icons">
                                local_shipping
                                </i>
                                
                            </div>
                            <div class="col-3 pt-1">
                                Maquinaria
                            </div>
                        </div>
                    </a>
                    <div class="collapse" id="menu-maquinaria" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="maquinaria-registro.html">
                                    <div class="row">
                                        
                                        <div class="col-1">
                                            <i class="material-icons">
                                            add
                                            </i>
                                            
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small>Registrar</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="maquinaria-modificar.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">create</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small> Modificar</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="maquinaria-consultar.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">search</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small> Consultar </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center collapse" href="#" data-toggle="collapse" data-target="#menu-componente">
                        <div class="row">
                            <div class="col-1">
                                <i  class="material-icons ">picture_in_picture_alt
                                </i>
                            </div>
                            <div class="col-3 pt-1">
                                Componentes
                            </div>
                        </div>
                    </a>
                    <div class="collapse" id="menu-componente" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="componente-registro.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">add</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small>Registrar</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="componente-modificar.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">create</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small> Modificar</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="componente-consultar.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">search</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small> Consultar </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="incidencia-agregar.html">
                        <div class="row">
                            <div class="col-1">
                                <i  class="material-icons ">fiber_new
                                </i>
                            </div>
                            <div class="col-3 pt-1">
                                Incidencias
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="estadisticas.html">
                        <div class="row">
                            <div class="col-1">
                                <i class="material-icons">
                                insert_chart
                                </i>
                            </div>
                            <div class="col-3 pt-1">
                                Estadisticas
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center collapse" href="#" data-toggle="collapse" data-target="#menu-reporte">
                        <div class="row">
                            <div class="col-1">
                                <i  class="material-icons ">description</i>
                            </div>
                            <div class="col-3 pt-1">
                                Reportes
                            </div>
                        </div>
                    </a>
                    <div class="collapse" id="menu-reporte" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="reporte-combustible.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">local_gas_station</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small> Combustible por Maquinaria</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="reporte-daños.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">build</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small> Daños y fallas</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="reporte-gastos.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">monetization_on</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small> Gastos monetarios </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="notificaciones.html">
                        <div class="row">
                            <div class="col-1">
                                <i  class="material-icons ">notifications</i>
                            </div>
                            <div class="col-3 pt-1">
                                Notificaciones
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center collapse" href="#" data-toggle="collapse" data-target="#submenu1">
                        <div class="row">
                            <div class="col-1">
                                <i  class="material-icons ">assignment_turned_in</i>
                            </div>
                            <div class="col-3 pt-1">
                                Tareas
                            </div>
                        </div>
                    </a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="tarea-agregar.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">assignment_returned</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small> Crear</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="tarea-modificar.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">assignment_return</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small>Modificar</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="tarea-estado.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">assignment</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small>Estado</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="suministro-combustible.html">
                        <div class="row">
                            <div class="col-1">
                                <i  class="material-icons ">local_gas_station</i>
                            </div>
                            <div class="col-3 pt-1">
                                Suministro Combustible
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center collapse" href="#" data-toggle="collapse" data-target="#menu-usuario">
                        <div class="row">
                            <div class="col-1">
                                <i  class="material-icons ">face
                                </i>
                            </div>
                            <div class="col-3 pt-1">
                                Usuario
                            </div>
                        </div>
                    </a>
                    <div class="collapse" id="menu-usuario" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="usuario-registro.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">add</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small>Registrar</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="usuario-modificar.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">create</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small> Modificar</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="usuario-consultar.html">
                                    <div class="row">
                                        <div class="col-1">
                                            <i  class="material-icons ">search</i>
                                        </div>
                                        <div class="col-3 pt-1">
                                            <small> Consultar </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="../index.html">
                        <div class="row">
                            <div class="col-1">
                                <i  class="material-icons ">clear
                                </i>
                            </div>
                            <div class="col-3 pt-1">
                                Salir
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            </div>
            <main  id="main pt-3 mt-3">
                <header>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <!-- Slide One - Set the background image for this slide in the line below -->
                            <div class="carousel-item active" style="background-image: url('../assets/img/carusel/bg-3.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3></h3>
                                    <p>This is a description for the first slide.</p>
                                </div>
                            </div>
                            <!-- Slide Two - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-1.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Second Slide</h3>
                                    <p>This is a description for the second slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-2.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-3.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-4.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-5.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-6.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-7.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-8.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-9.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-10.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-11.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-12.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('../assets/img/carusel/bg-13.jpg')">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third Slide</h3>
                                    <p>This is a description for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </header>
                <!-- Page Content -->
                <section class="py-5">
                    <div class="container">
                        <h1>Coordinacion del mantenimiento de maquinaria y equipos automotriz </h1>
                        <p>
                            Esta tarea se realiza en el departamento de coordinación y mantenimiento que es el encargado de gestionar la flota de los vehículos. El proceso se realiza verificando cada uno de estos vehículos, lo que permitirá determinar si está activo (acto para laborar), si necesitan mantenimiento o algún repuesto y que tipo de repuesto;  permite la gestión de los vehículos mediante registro, generación de informes, mejor visualización de graficas estadísticas, notificaciones, entre otros; que faciliten las tareas diarias para los coordinadores de mantenimiento con el fin de agilizar los procesos en el mantenimiento oportuno para la maximización de la producción en la empresa.
                        .</p>
                    </div>
                </section>
                
                <div class="container pt-lg-5">
                    <div class="row ">
                        <div class="col-lg-3 text-center">
                            <img class="rounded-circle" src="../assets/img/iconos/mantenimiento.png" alt="Generic placeholder image" width="140" height="140">
                            <h2>Mantenimiento</h2>
                            <p>
                                En esta sesión se encontrará informacion acerca del mantenimiento de las maquinaria.
                            </p>
                            <p>
                                <a class="btn btn-secondary text-info " href="#" role="button">Ver »</a>
                            </p>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-3 text-center">
                            <img class="rounded-circle" src="../assets/img/iconos/costo.png" alt="Generic placeholder image" width="140" height="140">
                            <h2>Costos</h2>
                            <p>
                                En esta sesión se encontrará reportes acerca de los gastos moneratios.
                            </p>
                            <p>
                                <a class="btn btn-secondary text-info" href="#" role="button">Ver »</a>
                            </p>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-3 text-center">
                            <img class="rounded-circle" src="../assets/img/iconos/estadisticas.png" alt="Generic placeholder image" width="140" height="140">
                            <h2>Estadistica</h2>
                            <p>En esta sesión se encontrará reportes estadisticos.</p>
                            <p>
                                <a class="btn btn-secondary text-info" href="#" role="button">Ver »</a>
                            </p>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-3 text-center">
                            <img class="rounded-circle" src="../assets/img/iconos/tarea.png" alt="Generic placeholder image" width="140" height="140">
                            <h2>Tareas</h2>
                            <p>En esta sesión se encontrará tareas pendientes por realizar.</p>
                            <p>
                                <a class="btn btn-secondary text-info" href="#" role="button">Ver »</a>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="py-3">
                   <img class="" src="">
                </div>
                <!-- Footer -->
                <footer class="footer">
                    <div class="container-fluid pt-lg-4" style="background-color:#279beb; ">
                        <div class="row  ">
                            <div class="col-4 text-white text-center">
                                <h6>Contacto</h6>
                                <p>Tel. 5798900</p>
                            </div>
                            <div class="col-4 text-white text-center">
                                <h6>Direccion</h6>
                                <p>Calle 32 # 45-67 Valledupar</p>
                            </div>
                            <div class="col-4 text-white text-center">
                                <h6>Más Información</h6>
                                <a href="https://grupocolba.com.co/transcolba/"  class="text-white">Transcolba s.a.s</a>
                            </div>
                        </div>
                    </div>
                    <div class=" row justify-content-center  bg-secondary-transcolba" style="">
                        <div class="text-center py-3 text-white">
                            ©
                            <script>document.write(new Date().getFullYear())</script>
                            Copyright
                        </div>
                    </div>
                </footer>
            </main>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="../assets/plugin/js/jquery-3.3.1.min.js" ></script>
            <script src="../assets/plugin/js/jquery-3.3.1.slim.min.js" ></script>
            <script src="../assets/plugin/js/popper.js"></script>
            <script src="../assets/plugin/js/bootstrap-material-design.js"></script>
            <script>
            $(document).ready(function () {
            $('body').bootstrapMaterialDesign();
            });
            </script>
            <!--script>
            // When the user scrolls the page, execute myFunction
            window.onscroll = function () {
            myFunction()
            };
            // Get the navbar
            var navbar = document.getElementById("header");
            // Get the offset position of the navbar
            //var sticky =  $("#navbar").scrollTop();
            // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
            if (window.pageYOffset >= 100) {
            navbar.classList.add("fixed-top")
            $("#header1").hide('slow', function () {
            });
            $("#main").css("margin-top", "150px");
            } else {
            navbar.classList.remove("fixed-top");
            $("#header1").show('slow', function () {
            });
            $("#main").css("margin-top", "auto");
            }
            }
            </script-->
        </div>
    </body>
</html>