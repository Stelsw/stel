<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    //si no existe usuario
    header('Location: ../view/AccesoDenegado.php');
}else { ?>
    <!doctype html>
    <html lang="en">
    
        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>STEL</title>
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
            <link rel="shortcout icon" href="0. Imagenes/0. Logos/3. logo sin  nombre blanco.png">
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> 
            <link rel="stylesheet" type="text/css" href="1. CSS/2. Modulos.css">

            <script src="https://code.jquery.com/jquery-3.5.1.js" defer></script>
            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script> 
            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" defer></script> 
            <script src="2. JavaScript/modulos.js" defer></script>

        </head>
        <body>

            <!-- Menu lateral -->

            <nav class="navbar navbar-expand-lg" style="background-color: #23518C;">

                <div class="container-fluid">

                    <a class="navbar-brand" href="paginaInicioModulos.html">
                        <img src="0. Imagenes/0. Logos/3. logo sin  nombre blanco.png" alt="Logo" width="60" height="65" class="d-inline-block align-text-top">
                    </a>

                    <button class="navbar-toggler btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavDropdown">

                        <ul class="navbar-nav">

                            <li class="nav-item fs-3">
                                <a class="nav-link active text-white" aria-current="page" href="paginaInicioModulos.html">STEL</a>
                            </li>

                            <li class="nav-item dropdown align-self-center">

                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Usuarios <i class="bi bi-people-fill"></i></a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="usuriosCreacion.php">Crear Usurario</a></li>
                                    <li><a class="dropdown-item" href="consultarUsu.php">Consultar Usuario</a></li>
                                    <li><a class="dropdown-item" href="consultarInmueble.php">Consultar Inmueble</a></li>


                                </ul>

                            <li class="nav-item dropdown align-self-center">

                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Adminstración <i class="bi bi-house"></i></a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="administracionDocumentacion.html">Documentación</a></li>
                                    <li><a class="dropdown-item" href="multasSeccion.html">Multas</a></li>
                                    <li><a class="dropdown-item" href="carteraSeccion.html">Cartera</a></li>
                                    <li><a class="dropdown-item" href="visitantesSeccion.html">Vistantes</a></li>
                                    <li><a class="dropdown-item" href="resumenDatos.html">Resumen de datos</a></li>

                                </ul>

                            <li class="nav-item dropdown align-self-center">
                                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Alquiler Parqueaderos <i class="bi bi-car-front-fill"></i></a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="solicitudesAlquiler.html">Solicitudes alquiler</a></li>
                                    <li><a class="dropdown-item" href="cuposParqueadero.html">Cupos parqueadero</a></li>
                                    <li><a class="dropdown-item" href="movimientoVehiculo.html">Entrada y Salida</a></li>
                                    <li><a class="dropdown-item" href="configuracionAlquiler.html">Configuración</a></li>

                                </ul>

                            </li>
                    
                            <li class="nav-item dropdown align-self-center">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Comunicación <i class="bi bi-broadcast"></i></a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="correspondencia.html">Correspondencia</a></li>
                                    <li><a class="dropdown-item" href="novedades.html">Novedades</a></li>

                                </ul>

                            </li>

                            <li class="nav-item align-self-center">
                                <a class="nav-link active text-white d-flex justify-content-end" aria-current="page" href="index.html">Salir</a>
                            </li>
                        
                        </ul>


                    </div>

                </div>

            </nav>

            <!-- Explicacion Usuarios -->

            <div class="container d-text-center pt-2 ">

                
                <div class="row justify-content-center">
                
                    <div class="col">

                        <div class="card mx-auto" style="width: 20rem;">

                            <img src="0. Imagenes/13. consultarUsuario/usuarioConsultar.jpg" class="card-img-top" alt="...">
                            
                            <div class="card-body">
                            
                                <h5 class="card-title" style="text-align: center;">Residentes</h5>
                                <hr>
                                <p class="card-text" style="text-align: justify; margin-bottom:25px;">Los residentes son propietarios, arrendatarios e integrantes, los cuales se encuentran agrupados por anden y casa.</p>
                            
                            </div>
                            
                            <ul class="list-group list-group-flush">
                            
                                <a href="consultarUsuResidente.php" style="text-decoration: none; color: #ffffff; background-color:#45b373; border-radius: 3px; padding:10px; text-align: center;">Consultar</a>
                            
                            </ul>
                        
                        </div>
                
                    </div>
                
                    <div class="col">

                        <div class="card mx-auto" style="width: 20rem;">

                            <img src="0. Imagenes/13. consultarUsuario/usuariosCreacionTrabajadores.jpg" class="card-img-top" alt="...">
                            
                            <div class="card-body">
                            
                                <h5 class="card-title" style="text-align: center;">Trabajadores</h5>
                                <hr>
                                <p class="card-text" style="text-align: justify;">Los trabajadores se distribuyen en tres roles, administrador/a, todero y guardia de seguridad. Cada uno cuanta con caracteristicas y permisos dentro del sistema.</p>
                            
                            </div>
                            
                            <ul class="list-group list-group-flush">
                            
                                <a href="consultarUsuTrabajador.php" style="text-decoration: none; color: #ffffff; background-color:#b37a45; border-radius: 3px; padding:10px; text-align: center;">Consultar</a>
                            
                            </ul>
                        
                        </div>

                
                    </div>
                
                </div>
            
            </div>

            <!-- Final Explicacion Usuarios -->
            

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        
        </body>
        
    </html>
<?php
}
?>