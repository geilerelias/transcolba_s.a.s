<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <link href="../assets/img/favicon-32x32.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Modificar Maquinaria</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="../assets/plugin/css/bootstrap-material-design.css">
        <link rel="stylesheet" type="text/css" href="../assets/plugin/iconfont/material-icons.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" type="text/css" href="../assets/plugin/css/sweetalert2.css">
        <!--estilos propios---->
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    </head>
    <body>
        <div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay">
            <header class="bmd-layout-header" id="header">
                <div class="row flex-nowrap justify-content-between align-items-center bg-primary-transcolba">
                    
                    <div class="col-8 ">
                        <h5 class="p-3  text-white text-capitalize  text-truncate  font-weight-bold" style="">
                        gestion de maquinarias
                        </h5>
                    </div>
                    <div class="col-4 pt-1">
                        <img src="../assets/img/logo-transcolba.png" class="img-fluid float-right"  alt="Responsive image" >
                    </div>
                </div>
                <!---------NAVBAR----------------------------->
                <div class="navbar navbar-light bg-faded shadow row" id="navbar" data-spy="affix" data-offset-top="197" style="background-color: #0074c0;">
                    <div class="col-2">
                        <button class="navbar-toggler  text-white btn-outline-info" type="button" data-toggle="drawer" data-target="#dw-s2" aria-expanded="false">
                        <span class="sr-only">Toggle drawer</span>
                        <i class="material-icons">menu</i>
                        </button>
                    </div>
                    
                    
                    <div class="d-none d-sm-block row justify-content-center ">
                        <ul class="nav col-12">
                            <li class="nav-item " >
                                <a class="nav-link text-white text-capitalize" href="index.html" >Inicio</a>
                            </li>
                            <li class="nav-item " >
                                <a class="nav-link text-white text-capitalize nav-active-transcolba" href="maquinaria-opciones.html">Maquinaria</a>
                            </li>
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
                    <input class="form-control form-control-sm mr-sm-2 input-search"   type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn text-white   btn-sm my-2 my-sm-0 h-75 btn-xs" type="submit"><i class="material-icons">
                    search
                    </i></button>
                </form>
            </div>
        </header>
        <!---------- DRAWER-------->
        <div id="dw-s2" class="bmd-layout-drawer bg-faded" aria-expanded="false" aria-hidden="true">
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
                                <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="#">
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
                    <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="insidencia-agregar.html">
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
        <div>
            
        </div>
            <!---------- DRAWER-------->
            <div id="dw-s2" class="bmd-layout-drawer bg-faded" aria-expanded="false" aria-hidden="true">
               <header class="img-menu img-fluid" style="background-image: url(../assets/img/avatar.png);" >
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
            <div>
                <ul class="nav nav-bg-transcolba" >
                    <li class="nav-item">
                        <a class="nav-link text-capitalize text-transcolba active-secundary-transcolba"  href="maquinaria-registro.html">Registrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize text-transcolba" href="maquinaria-modificar.html">Modificar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-capitalize text-transcolba" href="maquinaria-consultar.html">Consultar</a>
                    </li>
                </ul>
            </div>
            
            <!------------------- FIN CABECERA----------------------------------->
            <!------CONTENIDO--------------->
            <div class="container pt-5 mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-6">
                        <form action="Maquina" method="get" accept-charset="utf-8">
                            <div class=" card encabezado" style="z-index: 0">
                                <div class="title" style="background-image: url(../assets/img/camiones.jpg);">
                                    <span class="title-1">
                                        Registro de Maquinas
                                    </span>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="input-placa" class="bmd-label-floating">Placa</label>
                                                <input type="text" class="form-control" id="input-placa" name="input-placa" required aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group ">
                                                <label for="input-marca" class="bmd-label-floating"> Marca</label>
                                                <input type="text" class="form-control" id="input-marca" required  name="input-marca" aria-required="true" >
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group bmd-form-group">
                                                <label for="input-linea" class="bmd-label-floating"> Linea</label>
                                                <input type="number" class="form-control" id="input-linea" required name="input-linea" aria-required="true"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group bmd-form-group">
                                                <label for="input-modelo" class="bmd-label-floating"> Modelo</label>
                                                <input type="text" class="form-control" id="input-modelo" required  name="input-modelo" aria-required="true"  >
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group bmd-form-group">
                                                <label for="input-color" class="bmd-label-floating"> Color</label>
                                                <input type="text" class="form-control" id="input-color" required  name="input-color" aria-required="true" >
                                            </div>
                                        </div>
                                        <div class="col-sm pt-2">
                                            <div class="form-group bmd-form-group  ">
                                                <label for="input-fecha" class=""> Fecha de Adquisicion</label>
                                                <input type="date" class="form-control form-control-sm" id="input-fecha" name="input-fecha"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group bmd-form-group ">
                                                <label for="input-chasis" class="bmd-label-floating">Codigo de Chasis</label>
                                                <input type="text" class="form-control" id="input-chasis" required name="input-chasis" aria-required="true" >
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group bmd-form-group">
                                                <label for="input-motor" class="bmd-label-floating">Codigo del Motor</label>
                                                <input type="text" class="form-control" id="input-motor" required  name="input-motor" aria-required="true" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-raised btn-info">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--------------------FOOTER-------------->
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
            
        </div>
    </body>
</html>