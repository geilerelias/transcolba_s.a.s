<!doctype html>
<html lang="en">
    <head>
        <title>Registro Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="../assets/plugin/css/bootstrap-material-design.css">
        <link rel="stylesheet" type="text/css" href="../assets/plugin/iconfont/material-icons.css">
        <link rel="stylesheet" type="text/css" href="../assets/plugin/css/sweetalert2.css">
        <!--estilos propios---->
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        
        <!-- Include SmartWizard CSS -->
        <link href="../assets/plugin/css/smart_wizard.css" rel="stylesheet" type="text/css" />
        
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
                                <a class="nav-link text-white text-capitalize " href="maquinaria-opciones.html">Maquinaria</a>
                            </li>
                            
                            <li class="nav-item text-white">
                                <a class="nav-link text-white text-capitalize" href="componentes-opciones.html">Componentes</a>
                            </li>
                            <li class="nav-item text-white">
                                <a class="nav-link text-white text-capitalize" href="insidencias-registrar.html">Insidencias</a>
                            </li>
                            <li class="nav-item text-white">
                                <a class="nav-link text-white text-capitalize" href="../index.html">Salir</a>
                            </li>
                        </ul>
                    </div>
                    
                    <form class="form-inline float-right pr-2">
                        <div class="row">
                            <button type="button" class="btn bmd-btn-icon btn-raised text-white mr-2">
                            <i  class="material-icons ">notifications</i>
                            </button>
                            <input class="form-control form-control-sm mr-sm-2 input-search"   type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn  bmd-btn-icon text-white mr-2" type="button"><i class="material-icons">
                            search
                            </i>
                            </button>
                        </div>
                    </form>
                </div>
            </header>
            <!---------- DRAWER-------->
            <div id="dw-s2" class="bmd-layout-drawer bg-faded" aria-expanded="false" aria-hidden="true">
                <header class="img-menu img-fluid" style="background-image: url(../assets/img/bg-menu.jpg);" >
                    <img id="imagen-usuario" name="imagen-usuario" data-src="holder.js/75x75" class="rounded-circle " alt="75x75" src="../assets/img/avatar.png" data-holder-rendered="true" style="width: 75px; height: 75px;"  >
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
            
            <!------------------- FIN CABECERA----------------------------------->
            <!------CONTENIDO--------------->
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-6">
                        
                        <form class="m-lg-5 p-lg-5 row justify-content-center" action="../includes/usuarioi-registro.php" method="POST">
                            <div class=" justify-content-center">
                                <div class=" encabezado" style="z-index: 0">
                                    <div class="title" style="background-image: url(../assets/img/bg-usuarios.jpg);">
                                        <span class="title-1">
                                            Registro de Usuarios
                                        </span>
                                    </div>
                                </div>
                                <!-- SmartWizard html -->
                                <div id="smartwizard">
                                    <ul>
                                        <li><a href="#DatosPersonales">Datos Personales</a></li>
                                        <li><a href="#DatosResidencia">Datos de Residencia</a></li>
                                        <li><a href="#Cuenta"> Crear Cuenta   </a></li>
                                        
                                    </ul>
                                    <div>
                                        <div id="DatosPersonales" class="">
                                            <div class="container ">
                                                <div class="row">
                                                    <div class="input-group col-sm-6 col-6">
                                                        <span class="input-group-addon pr-2">
                                                            <i class="material-icons">confirmation_number</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label bmd-label-floating">Cedula </label>
                                                            <input id=" input-cedula" name="input-cedula" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="input-group col-sm-6 col-6">
                                                        <span class="input-group-addon pr-2">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label bmd-label-floating">Nombre </label>
                                                            <input id=" input-nombre" name="input-nombre" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="input-group col-sm-6 col-6">
                                                        <span class="input-group-addon pr-2">
                                                            <i class="material-icons">record_voice_over</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label bmd-label-floating">Apellido </label>
                                                            <input name="input-apellido" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="input-group col-sm-6 col-6">
                                                        <span class="input-group-addon pr-2">
                                                            <i class="material-icons">phone</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label bmd-label-floating">Teléfono </label>
                                                            <input name="input-telefono" id="input-telefono" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div id="DatosResidencia" class="">
                                            <div class="container ">
                                                
                                                <div class="row ">
                                                    
                                                    <div class="input-group col-sm-6 col-6">
                                                        <span class="input-group-addon pr-2">
                                                            <i class="material-icons">business</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label bmd-label-floating">Departamento </label>
                                                            <input name="input-departamento" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="input-group col-sm-6 col-6">
                                                        <span class="input-group-addon pr-2">
                                                            <i class="material-icons">business</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label bmd-label-floating">Ciudad </label>
                                                            <input name="input-ciudad" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="input-group col-sm-12 col-6">
                                                        <i class="material-icons">directions</i>
                                                        
                                                        <div class="form-group label-floating">
                                                            <label class="control-label bmd-label-floating">Direccion <small>(required)</small></label>
                                                            <input name="input-direccion" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Cuenta" class="">
                                            <div class="container ">
                                                
                                                <div class="row ">
                                                    
                                                    <div class="input-group col-sm-12">
                                                        <span class="input-group-addon pr-2">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class=" form-group label-floating">
                                                            <label class="control-label bmd-label-floating">Usuario </label>
                                                            <input id="input-usuario" name="input-usuario" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row ">
                                                    <div class="input-group col-sm-6">
                                                        <span class="input-group-addon pr-2">
                                                            <i class="material-icons">https</i>
                                                        </span>
                                                        <div class=" form-group label-floating">
                                                            <label class="control-label bmd-label-floating">Clave </label>
                                                            <input id="input-clave" name="input-clave" type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="input-group col-sm-6">
                                                        <span class="input-group-addon pr-2">
                                                            <i class="material-icons">https</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label bmd-label-floating" >Confirmar </label>
                                                            <input id="input-confirmar" name="input-confirmar" type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
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
                <div class=" justify-content-center  bg-secondary-transcolba" style="">
                    <div class="text-center py-3 text-white">
                        ©
                        <script>document.write(new Date().getFullYear())</script>
                        Copyright
                    </div>
                </div>
            </footer>
            <!-- Placed at the end of the document so the pages load faster -->
            <script type="text/javascript" src="../assets/plugin/js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="../assets/plugin/js/popper.js"></script>
            <!-- Include SmartWizard JavaScript source -->
            <script type="text/javascript" src="../assets/plugin/js/jquery.smartWizard.js"></script>
            <script type="text/javascript" src="../assets/plugin/js/sweetalert2.js"></script>
            <script type="text/javascript" src="../assets/plugin/js/bootstrap-material-design.min.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
            // Smart Wizard events
            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
            $("#message-box").append("<br /> > <strong>leaveStep</strong> called on " + stepNumber + ". Direction: " + stepDirection);
            var res = true;
            if(!res){
            $("#message-box").append(" <strong>leaveStep</strong> Cancelled");
            }else{
            $("#message-box").append(" <strong>leaveStep</strong> Allowed");
            }
            return res;
            });
            // This event should initialize before initializing smartWizard
            // Otherwise this event wont load on first page load
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
            $("#message-box").append(" > <strong>showStep</strong> called on " + stepNumber + ". Direction: " + stepDirection+ ". Position: " + stepPosition);
            });
            $("#smartwizard").on("beginReset", function(e) {
            $("#message-box").append("<br /> > <strong>beginReset</strong> called");
            });
            $("#smartwizard").on("endReset", function(e) {
            $("#message-box").append(" > <strong>endReset</strong> called");
            });
            $("#smartwizard").on("themeChanged", function(e, theme) {
            $("#message-box").append("<br /> > <strong>themeChanged</strong> called. New theme: " + theme);
            });
            // Smart Wizard initialize
            $('#smartwizard').smartWizard({
            selected: 0,
            transitionEffect:'fade',
            });
            $("#theme_selector").on("change", function() {
            // Change theme
            $('#smartwizard').smartWizard("theme", $(this).val());
            return true;
            });
            });
            </script>
            <script>
            $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
            } );
            </script>
            
        </div>
    </body>
</html>